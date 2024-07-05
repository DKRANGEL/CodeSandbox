<?php

namespace App\Http\Controllers\Central;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CidadeFormRequest;
use App\Models\Central\Cidade;
use App\Models\Central\Estado;
use Exception;
use Yajra\DataTables\Facades\DataTables;

class CidadeController extends Controller
{   
    public function __construct(protected Cidade $model, protected Estado $estado)
    {
        $this->model  = $model;
        $this->estado = $estado;
    }

    public function listar(Request $request)
    {
        if ($request->ajax()) {
            $cidades = $this->model->query()->with('estado');

            return DataTables::eloquent($cidades)
                ->addColumn('estado_nome', function ($cidade) {
                    return $cidade->estado->nome;
                })
                ->addColumn('estado_codigo_ibge', function ($cidade) {
                    return $cidade->estado->codigo_ibge;
                })
                ->rawColumns(['estado_nome', 'estado_codigo_ibge'])
                ->make(true);
        }
        
        $estados = $this->estado->all();
        
        return view('central.cidade.index', compact('estados'));
    }

    public function cadastrar(CidadeFormRequest $request)
    {
        try {
            $data = $this->getRequestData($request);

            $this->model->create($data);

            $messages = ['success' => "Cidade cadastrada com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar a Cidade!"];
        }
        
        return redirect()->route(request()->getHost().'.cidades.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function atualizar(CidadeFormRequest $request, $id)
    {
        try {
            $data = $this->getRequestData($request, $id);

            $cidade = $this->model->find($id);
            $cidade->save($data);

            $messages = ['success' => "Cidade atualizada com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizar a Cidade!"];
        }
        
        return redirect()->route(request()->getHost().'.cidades.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {
            $cidade = $this->model->find($id);
            $cidade->delete();

            $messages = ['success' => "Cidade excluída com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir a Cidade!"];
        }

        return redirect()->route(request()->getHost().'.cidades.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request, $id = null)
    {
        return [
            'id'                => $id,
            'estado_id'         => $request->estadoCidadeSelect,
            'nome'              => $request->nomeCidadeInput,
            'codigo_ibge'       => $request->codIbgeCidadeInput,
        ];
    }
}
