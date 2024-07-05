<?php

namespace App\Http\Controllers\Central;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MotoqueiroFormRequest;
use App\Models\Central\Cidade;
use App\Models\Central\Motoqueiro;
use Exception;
use Yajra\DataTables\Facades\DataTables;

class MotoqueiroController extends Controller
{
    public function __construct(protected Motoqueiro $model, protected Cidade $cidade)
    {
        $this->model = $model;
        $this->cidade = $cidade;
    }

    public function listar(Request $request)
    {
        if ($request->ajax()) {
            $motoqueiros =  $this->model->on('central')->with('endereco.cidade');

            return DataTables::eloquent($motoqueiros)
                ->addColumn('cidade_nome', function ($motoqueiro) {
                    return $motoqueiro->endereco->cidade->nome;
                })
                ->rawColumns(['cidade_nome'])
                ->make(true);
        }

        return view('central.motoqueiro.index');
    }

    public function adicionar()
    {
        return view('central.motoqueiro.add');
    }

    public function cadastrar(MotoqueiroFormRequest $request)
    {
        try {
            $data = $this->getRequestData($request);
            
            $this->model->create($data);

            $messages = ['success' => "Motoqueiro cadastrado com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar o Motoqueiro!"];
        }

        return redirect()->route(request()->getHost().'.motoqueiros.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function editar($id)
    {
        $motoqueiro = $this->model->find($id);

        return view('central.motoqueiro.edit', compact('motoqueiro'));
    }

    public function atualizar(MotoqueiroFormRequest $request, $id)
    {
        try {

            $data = $this->getRequestData($request, $id);

            $motoqueiro = $this->model->find($id);
            $motoqueiro->save($data);

            $messages = ['success' => "Motoqueiro atualizado com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizar o Motoqueiro!"];
        }

        return redirect()->route(request()->getHost().'.motoqueiros.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {
            $motoqueiro = $this->model->find($id);
            $motoqueiro->delete();

            $messages = ['success' => "Motoqueiro excluído com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir o Motoqueiro!"];
        }

        return redirect()->route(request()->getHost().'.motoqueiros.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request, $id = null)
    {
        $cidade =  $this->cidade->on('central')->whereRaw('unaccent(lower(nome)) = unaccent(lower(?))', [$request->cidadeInput])->first();

        $endereco_id = $this->buscaEndereco($request, $cidade);

        return [
            'id'            => $id,
            'nome'          => $request->nomeMotoInput,
            'cpf'           => $request->cpfMotoInput,
            'rg'            => $request->rgMotoInput,
            'empresa'       => $request->empresaMotoInput,
            'endereco_id'   => $endereco_id,
            'end_num'       => $request->numeroInput,
            'complemento'   => $request->complementoInput,
            'email'         => $request->emailMotoInput,
            'telefone'      => $request->telefoneMotoInput,
            'celular'       => $request->celularMotoInput,
            'data_nasc'     => $request->dataNascMotoInput,
            'placa'         => $request->placaMotoInput,
            'comissao'      => $request->comissaoMotoInput,
            'salario'       => $request->taxaEntregaMotoInput,
            'taxa_entrega'  => $request->salarioMotoInput,
            'obs'           => $request->obsMotoInput,
        ];
    }
}
