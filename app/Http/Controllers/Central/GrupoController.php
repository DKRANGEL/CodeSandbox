<?php

namespace App\Http\Controllers\Central;

use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\GrupoFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Central\Grupo;
use App\Models\Central\Tipo;
use Illuminate\Http\Request;
use Exception;

class GrupoController extends Controller
{
    public function __construct(protected Grupo $model, protected Tipo $tipo)
    {
        $this->model = $model;
        $this->tipo = $tipo;
    }
    
    public function listar(Request $request)
    {
        if ($request->ajax()) {
            $grupos = $this->model->on('central');
            return DataTables::eloquent($grupos)->make(true);
        }

        return view('central.grupo.index');
    }

    public function adicionar()
    {
        $tipos = $this->tipo->on('central')->get();
        
        return view('central.grupo.add', compact('tipos'));
    }

    public function cadastrar(GrupoFormRequest $request)
    {        
        try {

            $data = $this->getRequestData($request);

            $this->model->on('central')->create($data);

            $messages = ['success' => "Grupo cadastrado com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar o Grupo!"];
        }
        
        return redirect()->route(request()->getHost().'.grupos.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function editar($id)
    {
        $grupo = $this->model->on('central')->find($id);
        $tipos = $this->tipo->on('central')->get();

        return view('central.grupo.edit', compact('grupo','tipos'));
    }

    public function atualizar(GrupoFormRequest $request, $id)
    {
        try {

            $data = $this->getRequestData($request);

            $grupo = $this->model->on('central')->find($id);
            $grupo->update($data);

            $messages = ['success' => "Grupo atualizado com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizado o Grupo!"];
        }
        
        return redirect()->route(request()->getHost().'.grupos.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {

            $grupo = $this->model->on('central')->find($id);
            $grupo->delete();
                
            $messages = ['success' => "Grupo excluído com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir o Grupo!"];
        }

        return redirect()->route(request()->getHost().'.grupos.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request)
    {        
        return [
            'codigo'            => $request->codGrupoInput,
            'descricao'         => $request->descricaoGrupoInput,
            'tipo_id'           => $request->tipoProdutoSelect,
            'desconto'          => $request->descontoGrupoInput,
            'margem'            => $request->margemGrupoInput,
            'meta'              => $request->valorMetaGrupoInput,
            'abastecer_preco'   => $request->abastecerPrecoGrupoInput === 'on' ? true : false,
            'curva_a'           => $request->curvaAGrupoInput,
            'curva_b'           => $request->curvaBGrupoInput,
            'rgb'               => null,
        ];
    }
}
