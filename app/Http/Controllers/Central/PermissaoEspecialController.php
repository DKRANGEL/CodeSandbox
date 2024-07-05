<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissaoEspecialFormRequest;
use App\Models\Central\PermissaoEspecial;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PermissaoEspecialController extends Controller
{
    public function __construct(protected PermissaoEspecial $model)
    {
        $this->model = $model;
    }

    public function listar(Request $request)
    {
        if ($request->ajax()) {
            $permissoes = $this->model->query();
            return DataTables::eloquent($permissoes)->make(true);
        }
        
        return view('central.permissao.index');
    }

    public function cadastrar(PermissaoEspecialFormRequest $request)
    {
        try {
            $data = $this->getRequestData($request);

            $this->model->create($data);
    
            $messages = ['success' => "Permissão cadastrada com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar a Permissão!"];
        }
        
        return redirect()->route(request()->getHost().'.permissoes.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function atualizar(PermissaoEspecialFormRequest $request, $id)
    {
        try {
            $data = $this->getRequestData($request, $id);

            $permissao = $this->model->find($id);
            $permissao->save($data);
    
            $messages = ['success' => "Permissão atualizada com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizar a Permissão!"];
        }

        return redirect()->route(request()->getHost().'.permissoes.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {
            
            $permissao = $this->model->find($id);
            $permissao->delete();

            $messages = ['success' => "Permissão excluída com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir a Permissão!"];
        }

        return redirect()->route(request()->getHost().'.permissoes.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request, $id = null)
    {
        return [
            'id'   => $id,
            'descricao' => $request->descricaoPermissaoInput
        ];
    }
}
