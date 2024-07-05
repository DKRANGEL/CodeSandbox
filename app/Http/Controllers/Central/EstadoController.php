<?php

namespace App\Http\Controllers\Central;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EstadoFormRequest;
use App\Models\Central\Estado;
use App\Models\Central\Pais;
use Exception;
use Yajra\DataTables\Facades\DataTables;

class EstadoController extends Controller
{
    public function __construct(protected Estado $model, protected Pais $pais)
    {
        $this->model  = $model;
        $this->pais = $pais;
    }

    public function listar(Request $request)
    {
        if ($request->ajax()) {
            $estados = $this->model->with('pais');

            return DataTables::eloquent($estados)
                ->addColumn('pais_nome', function ($estado) {
                    return $estado->pais->nome;
                })
                ->addColumn('pais_codigo_bacen', function ($estado) {
                    return $estado->pais->codigo_bacen;
                })
                ->rawColumns(['pais_nome', 'pais_codigo_bacen'])
                ->make(true);
        }

        $paises = $this->pais->all();

        return view('central.estado.index', compact('paises'));
    }

    public function cadastrar(EstadoFormRequest $request)
    {
        try {
            $data = $this->getRequestData($request);

            $this->model->create($data);

            $messages = ['success' => "Estado cadastrado com sucesso!"];

        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar o Estado!"];
        }
        
        return redirect()->route(request()->getHost().'.estados.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function atualizar(EstadoFormRequest $request, $id)
    {
        try {
            $data = $this->getRequestData($request, $id);

            $estados = $this->model->find($id);
            $estados ->save($data);

            $messages = ['success' => "Estado atualizado com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizar o Estado!"];
        }

        return redirect()->route(request()->getHost().'.estados.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {
            $estados = $this->model->find($id);
            $estados->delete();

            $messages = ['success' => "Estado excluído com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir o Estado!"];
        }

        return redirect()->route(request()->getHost().'.estados.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request, $id = null)
    {
        return [
            'id'                    => $id,
            'pais_id'               => $request->paisSelectInput,
            'nome'                  => $request->nomeEstadoInput,
            'codigo_ibge'           => $request->codIBGEInput,
            'sigla'                 => $request->siglaEstadoInput,
            'valor_maximo_venda'    => str_replace(['.', ','], ['', '.'], $request->valorMaxInput),
            'ddd'                   => $request->dddInput,
        ];
    }
}
