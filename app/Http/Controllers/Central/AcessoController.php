<?php

namespace App\Http\Controllers\Central;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AcessoFormRequest;
use App\Models\Central\Acesso;
use Exception;
use Yajra\DataTables\Facades\DataTables;

class AcessoController extends Controller
{
    public function __construct(protected Acesso $model)
    {
        $this->model = $model;
    }

    public function listar(Request $request)
    {   
        if ($request->ajax()) {
            $acessos = $this->model->query();
            return DataTables::eloquent($acessos)->make(true);
        }
        
        return view('central.acesso.index');
    }

    public function cadastrar(AcessoFormRequest $request)
    {
        try {
            $data = $this->getRequestData($request);

            $this->model->create($data);
    
            $messages = ['success' => "Acesso cadastrado com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar o Acesso!"];
        }
        
        return redirect()->route(request()->getHost().'.acessos.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function atualizar(AcessoFormRequest $request, $id)
    {
        try {
            $data = $this->getRequestData($request, $id);

            $acesso = $this->model->find($id);
            $acesso->save($data);
    
            $messages = ['success' => "Acesso atualizado com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizar o Acesso!"];
        }

        return redirect()->route(request()->getHost().'.acessos.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {
            $acesso = $this->model->find($id);
            $acesso->delete();

            $messages = ['success' => "Acesso excluído com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir o Acesso!"];
        }

        return redirect()->route(request()->getHost().'.acessos.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request, $id = null)
    {
        return [
            'id'   => $id,
            'nome' => $request->acessoNomeInput,
        ];
    }
}
