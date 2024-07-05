<?php

namespace App\Http\Controllers\Central;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaisFormRequest;
use App\Models\Central\Pais;
use Exception;
use Yajra\DataTables\Facades\DataTables;

class PaisController extends Controller
{
    public function __construct(protected Pais $model)
    {
        $this->model = $model;
    }

    public function listar(Request $request)
    {
        if ($request->ajax()) {
            $paises = $this->model->query();
            return DataTables::eloquent($paises)->make(true);
        }
        
        return view('central.pais.index');
    }

    public function cadastrar(PaisFormRequest $request)
    {
        try {
            $data = $this->getRequestData($request);

            $this->model->create($data);

            $messages = ['success' => "País cadastrado com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar o País!"];
        }
        
        return redirect()->route(request()->getHost().'.paises.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function atualizar(PaisFormRequest $request, $id)
    {
        try {
            $data = $this->getRequestData($request, $id);

            $pais = $this->model->find($id);
            $pais->save($data);

            $messages = ['success' => "País atualizado com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizar o País!"];
        }

        return redirect()->route(request()->getHost().'.paises.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {
            $pais = $this->model->find($id);
            $pais->delete();

            $messages = ['success' => "País excluído com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir o País!"];
        }

        return redirect()->route(request()->getHost().'.paises.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request, $id = null)
    {
        return [
            'id'            => $id,
            'nome'          => $request->nomePaisInput,
            'codigo_bacen'  => $request->codBacenInput,
            'sigla'         => $request->siglaPaisInput,
        ];
    }
}
