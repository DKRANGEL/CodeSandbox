<?php

namespace App\Http\Controllers\Central;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LojaFormRequest;
use App\Models\Central\Cidade;
use App\Models\Central\FarmaciaPopular;
use App\Models\Central\Tenant;
use App\Models\Central\TenantRepresentante;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Yajra\DataTables\Facades\DataTables;

class LojaController extends Controller
{
    public function listar(Request $request)
    {
        if ($request->ajax()) {
            $lojas = Tenant::select('id', 'razao_social', 'fantasia', 'telefone', 'matriz');
            return DataTables::eloquent($lojas)->make(true);
        }

        return view('central.loja.index');
    }

    public function adicionar()
    {
        $matrizExists = Tenant::where('matriz', true)->exists();

        return view('central.loja.add', ['matrizExists' => $matrizExists]);
    }

    public function cadastrar(LojaFormRequest $request)
    {
        try {

            if ($request->usuarioFarmaPopular && $request->senhaFarmaPopular) {
                $farmaciaPopular = FarmaciaPopular::create([
                    'usuario'       => $request->usuarioFarmaPopular,
                    'senha'         => Crypt::encryptString($request->senhaFarmaPopular),
                    'producao'      => $request->producaoFarmaPopular ?? false,
                ]);
            }

            $cnpj = preg_replace('/[^0-9]/', '', $request->cnpjLojaInput);

            $tenant = Tenant::where('id', $cnpj)->exists();

            if ($tenant) {
                $messages = ['warning' => "A Loja já está cadastrada!"];
            } else {

                $representanteLoja = $this->cadastrarOuAtualizarRepresentante($request);
            
                $cidade = Cidade::whereRaw('unaccent(lower(nome)) = unaccent(lower(?))', [$request->cidadeInput])->first();

                $endereco_id = $this->buscaEndereco($request, $cidade);

                $tenant = Tenant::create([
                    'id'                        => $cnpj,
                    'tenant_representante_id'   => $representanteLoja->id,
                    'razao_social'              => $request->razaoSocialLojaInput,
                    'fantasia'                  => $request->fantasiaLojaInput,
                    'proprietario'              => $request->proprietarioLojaInput,
                    'gerente'                   => $request->gerenteLojaInput,
                    'status'                    => $request->statusLojaInput ?? false,
                    'integrada'                 => $request->lojaIntegradaSwitch ?? false,
                    'matriz'                    => $request->lojaMatrizSwitch ?? false,
                    'telefone'                  => $request->telefoneLojaInput,
                    'celular'                   => $request->celularLojaInput,
                    'email'                     => $request->emailLojaInput,
                    'endereco_id'               => $endereco_id,
                    'end_num'                   => $request->numeroInput,
                    'complemento'               => $request->complementoInput,
                    'inscricao_estadual'        => $request->inscricaoEstadualInput,
                    'inscricao_municipal'       => $request->inscricaoMunicipalInput,
                    'abastecer_preco'           => $request->abastecerPrecoLojaInput ?? false,
                    'farmacia_popular_id'       => $farmaciaPopular->id ?? null,
                ]);

                $tenant->domains()->create(['domain' => $cnpj.".".getCentralDomain()]);

                $messages = ['success' => "Loja cadastrada com sucesso!"];
            }

        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar a Loja!"];
        }

        return redirect()->route(request()->getHost().'.lojas.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function editar($id)
    {
        $loja = Tenant::find($id);

        $representanteLoja = TenantRepresentante::find($loja->tenant_representante_id);

        $matrizExists = Tenant::where('matriz', true)->where('id', '<>', $id)->exists();

        return view('central.loja.edit', compact('loja', 'representanteLoja', 'matrizExists'));
    }

    public function atualizar(LojaFormRequest $request, $id, $representanteLojaId)
    {
        try {
            $representanteLoja = $this->cadastrarOuAtualizarRepresentante($request);
            
            $loja = Tenant::find($id);

            if ($request->usuarioFarmaPopular && $request->senhaFarmaPopular) {

                $farmaciaPopular = FarmaciaPopular::updateOrCreate(
                    ['id' => $loja->farmacia_popular_id], // Verifica se já existe um registro com esse id
                    [
                        'usuario'   => $request->usuarioFarmaPopular, 
                        'senha'     => Crypt::encryptString($request->senhaFarmaPopular),
                        'producao'  => $request->producaoFarmaPopular ?? false,
                    ]
                );

            } else {
                if ($loja->farmacia_popular_id) {
                    FarmaciaPopular::find($loja->farmacia_popular_id)->delete();
                }
            }
            
            $cidade = Cidade::whereRaw('unaccent(lower(nome)) = unaccent(lower(?))', [$request->cidadeInput])->first();

            $endereco_id = $this->buscaEndereco($request, $cidade);

            $loja->tenant_representante_id  = $representanteLoja->id;
            $loja->razao_social             = $request->razaoSocialLojaInput;
            $loja->fantasia                 = $request->fantasiaLojaInput;
            $loja->proprietario             = $request->proprietarioLojaInput;
            $loja->gerente                  = $request->gerenteLojaInput;
            $loja->status                   = $request->statusLojaInput ?? false;
            $loja->integrada                = $request->lojaIntegradaSwitch ?? false;
            $loja->matriz                   = $request->lojaMatrizSwitch ?? false;
            $loja->telefone                 = $request->telefoneLojaInput;
            $loja->celular                  = $request->celularLojaInput;
            $loja->email                    = $request->emailLojaInput;
            $loja->endereco_id              = $endereco_id;
            $loja->end_num                  = $request->numeroInput;
            $loja->complemento              = $request->complementoInput;
            $loja->inscricao_estadual       = $request->inscricaoEstadualInput;
            $loja->inscricao_municipal      = $request->inscricaoMunicipalInput;
            $loja->abastecer_preco          = $request->abastecerPrecoLojaInput ?? false;
            $loja->farmacia_popular_id      = $farmaciaPopular->id ?? null;
            $loja->save();

            $cidade = Cidade::whereRaw('unaccent(lower(nome)) = unaccent(lower(?))', [$request->resp_cidadeInput])->first();
            
            $endereco_id = $this->buscaEndereco($request, $cidade, true);

            $representanteLoja = TenantRepresentante::find($representanteLojaId);
            $representanteLoja->nome                = $request->nomeRespInput;
            $representanteLoja->cpf                 = $request->cpfRespInput;
            $representanteLoja->rg                  = $request->rgRespInput;
            $representanteLoja->profissao           = $request->profissaoRespInput;
            $representanteLoja->estado_civil        = $request->estadoCivilRespInput;
            $representanteLoja->data_nasc           = $request->dataNascRespInput;
            $representanteLoja->endereco_id         = $endereco_id;
            $representanteLoja->end_num             = $request->resp_numeroInput;
            $representanteLoja->complemento         = $request->resp_complementoInput;
            $representanteLoja->valor_instalacao    = floatval(str_replace(',', '.', str_replace('.', '', $request->valorInstalacaoRespInput)));
            $representanteLoja->save();

            $messages = ['success' => "Loja atualizada com sucesso!"];
        } catch (Exception $e) {
            dd($e);
            $messages = ['error' => "Ocorreu um erro ao atualizar a Loja!"];
        }

        return redirect()->route(request()->getHost().'.lojas.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {
            $loja = Tenant::find($id);
            $loja->delete();

            $messages = ['success' => "Loja excluída com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir a Loja!"];
        }

        return redirect()->route(request()->getHost().'.lojas.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function cadastrarOuAtualizarRepresentante($request)
    {
        $cidade = Cidade::whereRaw('unaccent(lower(nome)) = unaccent(lower(?))', [$request->resp_cidadeInput])->first();
                    
        $endereco_id = $this->buscaEndereco($request, $cidade, true);

        $representanteLoja = TenantRepresentante::updateOrCreate(
            ['cpf' => $request->cpfRespInput],
            [
                'nome'              => $request->nomeRespInput,
                'rg'                => $request->rgRespInput,
                'profissao'         => $request->profissaoRespInput,
                'estado_civil'      => $request->estadoCivilRespInput,
                'data_nasc'         => $request->dataNascRespInput,
                'endereco_id'       => $endereco_id,
                'end_num'           => $request->resp_numeroInput,
                'complemento'       => $request->resp_complementoInput,
                'valor_instalacao'  => floatval(str_replace(',', '.', str_replace('.', '', $request->valorInstalacaoRespInput)))
            ]
        );

        return $representanteLoja;
    }
}
