<?php

namespace App\Http\Controllers\Central;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioFormRequest;
use App\Models\Central\AcaoAcessoUser;
use App\Models\Central\Acesso;
use App\Models\Central\CentralUser;
use App\Models\Central\Cidade;
use App\Models\Central\FarmaciaPopular;
use App\Models\Central\PermissaoEspecial;
use App\Models\Central\Tela;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Exception;

class UserController extends Controller
{
    public function listar(Request $request)
    {
        if ($request->ajax()) {
            $usuarios = CentralUser::select('id', 'nome', 'cargo', 'endereco_id', 'complemento', 'end_num')->with('acessos', 'endereco.cidade.estado');

            // Formatando os dados para DataTables
            return DataTables::eloquent($usuarios)
                ->addColumn('permissao', function (CentralUser $user) {
                    return $user->acessos->pluck('nome')->implode(', ');
                })
                ->addColumn('endereco', function (CentralUser $user) {
                    return $user->endereco ? json_decode($user->endereco, true) : false;
                })
                ->rawColumns(['endereco'])
                ->make(true);
        }

        return view('central.usuario.index');
    }

    public function adicionar(Request $request)
    {
        $acessos = Acesso::select('id', 'nome')->get();
        $permissoes = PermissaoEspecial::select('id', 'descricao')->get();
        $data = $this->getTelasAndAcessos();

        return view('central.usuario.add', compact('acessos', 'permissoes', 'data'));
    }

    public function cadastrar(UsuarioFormRequest $request)
    {
        DB::beginTransaction();
        
        try {

            if ($request->usuarioFarmaPopular && $request->senhaFarmaPopular) {
                $farmaciaPopular = FarmaciaPopular::create([
                    'usuario'   => $request->usuarioFarmaPopular,
                    'senha'     => Crypt::encryptString($request->senhaFarmaPopular),
                ]);
            }
            
            $cidade = Cidade::whereRaw('unaccent(lower(nome)) = unaccent(lower(?))', [$request->cidadeInput])->first();

            $endereco_id = $this->buscaEndereco($request, $cidade);
            $selectedIds = json_decode($request->selectedIds, true);

            $usuario = CentralUser::create([
                'nome'                          => $request->nomeUsuarioInput,
                'cpf'                           => $request->cpfUsuarioInput,
                'rg'                            => $request->rgUsuarioInput,
                'status'                        => $request->statusUsuarioInput ?? false,
                'genero'                        => $request->generoUsuarioInput,
                'email'                         => $request->emailUsuarioInput,
                'telefone'                      => $request->telefoneUsuarioInput,
                'celular'                       => $request->celularUsuarioInput,
                'data_nasc'                     => $request->dataNascUsuarioInput,
                'cargo'                         => $request->cargoUsuarioInput,
                'password'                      => Hash::make($request->confSenhaUsuario),
                'admissao'                      => $request->dataAdmissaoUsuarioInput,
                'demissao'                      => $request->dataDemissaoUsuarioInput,
                'desconto'                      => $request->descontoUsuarioInput,
                'comissao'                      => $request->comissaoUsuarioInput,
                'meta'                          => floatval(str_replace(',', '.', str_replace('.', '', $request->metasuarioInput))),
                'endereco_id'                   => $endereco_id,
                'end_num'                       => $request->numeroInput,
                'complemento'                   => $request->complementoInput,
                'obs'                           => $request->obsUsuarioInput,
                'farmacia_popular_id'           => $farmaciaPopular->id ?? null,
            ]);

            // Associação aos acessos
            $usuario->acessos()->sync($request->acessoUsuarioInput);

            // Associação às permissões especiais
            if ($request->has('permissoesUsuario')) {
                $usuario->permissoesEspeciais()->sync($request->permissoesUsuario);
            }
            
            // Sincronizar ações do usuário
            $this->syncActionUser('create', $selectedIds, $usuario);

            $messages = ['success' => "Usuário cadastrado com sucesso!"];

            DB::commit();
            
        } catch (Exception $e) {
            DB::rollback();
            $messages = ['error' => "Ocorreu um erro ao cadastrar o Usuário!"];
        }
        
        return redirect()->route(request()->getHost().'.usuarios.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function editar($id)
    {
        $usuario = CentralUser::with('acessos')->find($id);
        $acessos = Acesso::select('id', 'nome')->get();
        $permissoes = PermissaoEspecial::select('id', 'descricao')->get();
        $data = $this->getTelasAndAcessos();
        
        // Preparar os dados de ações vinculadas ao usuário
        $userActions = [];
        foreach ($usuario->acessos as $acesso) {
            $acoes = AcaoAcessoUser::where('acesso_user_id', $acesso->pivot->id)->get();
            foreach ($acoes as $acao) {
                $userActions[$acao->tela_id][] = $acao->acao_id;
            }
        }

        return view('central.usuario.edit', compact('usuario', 'acessos', 'permissoes', 'data', 'userActions'));
    }

    public function atualizar(UsuarioFormRequest $request, $id)
    {
        DB::beginTransaction();

        try {

            $usuario = CentralUser::find($id);

            if ($request->usuarioFarmaPopular && $request->senhaFarmaPopular) {

                $farmaciaPopular = FarmaciaPopular::updateOrCreate(
                    ['id' => $usuario->farmacia_popular_id], // Verifica se já existe um registro com esse id
                    [
                        'usuario' => $request->usuarioFarmaPopular, 
                        'senha' => Crypt::encryptString($request->senhaFarmaPopular)
                    ]
                );

            } else {
                if ($usuario->farmacia_popular_id) {
                    FarmaciaPopular::find($usuario->farmacia_popular_id)->delete();
                }
            }
            
            $cidade = Cidade::whereRaw('unaccent(lower(nome)) = unaccent(lower(?))', [$request->cidadeInput])->first();

            $endereco_id = $this->buscaEndereco($request, $cidade);
            $selectedIds = json_decode($request->selectedIds, true);

            $usuario->nome                          = $request->nomeUsuarioInput;
            $usuario->cpf                           = $request->cpfUsuarioInput;
            $usuario->rg                            = $request->rgUsuarioInput;
            $usuario->status                        = $request->statusUsuarioInput ?? false;
            $usuario->genero                        = $request->generoUsuarioInput;
            $usuario->email                         = $request->emailUsuarioInput;
            $usuario->telefone                      = $request->telefoneUsuarioInput;
            $usuario->celular                       = $request->celularUsuarioInput;
            $usuario->data_nasc                     = $request->dataNascUsuarioInput;
            $usuario->cargo                         = $request->cargoUsuarioInput;
            $usuario->password                      = $request->confSenhaUsuario ? Hash::make($request->confSenhaUsuario) : $usuario->password;
            $usuario->admissao                      = $request->dataAdmissaoUsuarioInput;
            $usuario->demissao                      = $request->dataDemissaoUsuarioInput;
            $usuario->desconto                      = $request->descontoUsuarioInput;
            $usuario->comissao                      = $request->comissaoUsuarioInput;
            $usuario->meta                          = floatval(str_replace(',', '.', str_replace('.', '', $request->metasuarioInput)));
            $usuario->endereco_id                   = $endereco_id;
            $usuario->end_num                       = $request->numeroInput;
            $usuario->complemento                   = $request->complementoInput;
            $usuario->obs                           = $request->obsUsuarioInput;
            $usuario->farmacia_popular_id           = $farmaciaPopular->id ?? null;
            $usuario->save();

            // Associação aos acessos
            $usuario->acessos()->sync($request->acessoUsuarioInput);

            // Associação às permissões especiais
            $request->has('permissoesUsuario') ? $usuario->permissoesEspeciais()->sync($request->permissoesUsuario) : $usuario->permissoesEspeciais()->sync([]);

            // Sincronizar ações do usuário
            $this->syncActionUser('update', $selectedIds, $usuario);

            $messages = ['success' => "Usuário atualizado com sucesso!"];

            DB::commit();
            
        } catch (Exception $e) {
            DB::rollback();
            $messages = ['error' => "Ocorreu um erro ao atualizar o Usuário!"];
        }

        return redirect()->route(request()->getHost().'.usuarios.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {
            
            $usuario = CentralUser::find($id);
            $usuario->delete();

            $messages = ['success' => "Usuário excluído com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir o Usuário!"];
        }

        return redirect()->route(request()->getHost().'.usuarios.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getTelasAndAcessos()
    {
        $telas = Tela::select('id', 'nome');
    
        // Adiciona os campos de ação na consulta
        $telas->addSelect(DB::raw('(SELECT id FROM acoes WHERE nome = \'ACESSAR\' LIMIT 1) as id_acao_acessar'));
        $telas->addSelect(DB::raw('(SELECT id FROM acoes WHERE nome = \'CADASTRAR\' LIMIT 1) as id_acao_cadastrar'));
        $telas->addSelect(DB::raw('(SELECT id FROM acoes WHERE nome = \'ALTERAR\' LIMIT 1) as id_acao_alterar'));
        $telas->addSelect(DB::raw('(SELECT id FROM acoes WHERE nome = \'DELETAR\' LIMIT 1) as id_acao_deletar'));

        return $telas->get();
    }

    private function syncActionUser($param, $selectedIds, $usuario)
    {
        if ($selectedIds) {
            $filteredIds = array_filter($selectedIds, function($value) {
                return !is_null($value);
            });
        }

        switch ($param) {
        case 'create':
            foreach ($filteredIds as $telaId => $acoes) {
                foreach ($acoes as $acaoId) {
                    AcaoAcessoUser::create([
                        'acesso_user_id' => $usuario->acessos()->pluck('acesso_user.id')->first(),
                        'tela_id' => $telaId,
                        'acao_id' => $acaoId,
                    ]);
                }
            }
            break;
        case 'update':
            $acessoIds = $usuario->acessos->pluck('pivot.id')->toArray();
            AcaoAcessoUser::whereIn('acesso_user_id', $acessoIds)->delete();
            
            if (isset($filteredIds)) {
                foreach ($filteredIds as $tela_id => $acoes) {
                    foreach ($acoes as $acao_id) {
                        AcaoAcessoUser::create([
                            'acesso_user_id' => $acessoIds[0],
                            'tela_id' => $tela_id,
                            'acao_id' => $acao_id
                        ]);
                    }
                }
            }
            break;
        default:
            null;
        }
    }
}
