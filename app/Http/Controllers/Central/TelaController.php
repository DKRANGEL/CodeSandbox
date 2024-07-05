<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use App\Http\Requests\TelaFormRequest;
use App\Models\Central\Tela;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TelaController extends Controller
{
    public function __construct(protected Tela $model)
    {
        $this->model = $model;
    }

    public function listar(Request $request)
    {   
        if ($request->ajax()) {
            $telas = $this->model->query();
            return DataTables::eloquent($telas)->make(true);
        }
        
        return view('central.tela.index');
    }

    public function cadastrar(TelaFormRequest $request)
    {
        try {
            $data = $this->getRequestData($request);
            
            $this->model->create($data);
    
            $messages = ['success' => "Tela cadastrada com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar a Tela!"];
        }
        
        return redirect()->route(request()->getHost().'.telas.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function atualizar(TelaFormRequest $request, $id)
    {
        try {

            $data = $this->getRequestData($request, $id);

            $tela = $this->model->find($id);
            $tela->save($data);
    
            $messages = ['success' => "Tela atualizada com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizar a Tela!"];
        }

        return redirect()->route(request()->getHost().'.telas.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {
            
            $tela = $this->model->find($id);
            $tela->delete();

            $messages = ['success' => "Tela excluída com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir a Tela!"];
        }

        return redirect()->route(request()->getHost().'.telas.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request, $id = null)
    {
        return [
            'id'   => $id,
            'nome' => $request->telaNomeInput
        ];
    }
}
