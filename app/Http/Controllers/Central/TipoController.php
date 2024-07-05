<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipoFormRequest;
use App\Models\Central\Tipo;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TipoController extends Controller
{
    public function __construct(protected Tipo $model)
    {
        $this->model = $model;
    }

    public function listar(Request $request)
    {   
        if ($request->ajax()) {
            $tipos = $this->model->query();
            return DataTables::eloquent($tipos)->make(true);
        }     

        return view('central.tipo.index');
    }

    public function cadastrar(TipoFormRequest $request)
    {
        try {

            $data = $this->getRequestData($request);

            $this->model->create($data);

            $messages = ['success' => "Tipo cadastrado com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar o Tipo!"];
        }

        return redirect()->route(request()->getHost().'.tipos.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function atualizar(TipoFormRequest $request, $id)
    {
        try {

            $data = $this->getRequestData($request, $id);

            $tipo = $this->model->find($id);
            $tipo->update($data);

            $messages = ['success' => "Tipo atualizado com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizar o Tipo!"];
        }

        return redirect()->route(request()->getHost().'.tipos.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {

            $tipo = $this->model->find($id);
            $tipo->delete();

            $messages = ['success' => "Tipo excluído com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir o Tipo!"];
        }

        return redirect()->route(request()->getHost().'.tipos.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request, $id = null)
    {
        return [
            'id'   => $id,
            'nome' => $request->tipoNomeInput,
        ];
    }
}
