<?php

namespace App\Http\Controllers\Central;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransportadoraFormRequest;
use App\Models\Central\Cidade;
use App\Models\Central\Transportadora;
use Exception;
use Yajra\DataTables\Facades\DataTables;

class TransportadoraController extends Controller
{
    public function __construct(protected Transportadora $model, protected Cidade $cidade)
    {
        $this->model = $model;
        $this->cidade = $cidade;
    }

    public function listar(Request $request)
    {
        if ($request->ajax()) {
            $transportadoras = $this->model->on('central')->with('endereco.cidade');

            return DataTables::eloquent($transportadoras)->make(true);
        }

        $cidades = $this->cidade->all();

        return view('central.transportadora.index', compact('cidades'));
    }

    public function adicionar()
    {
        return view('central.transportadora.add');
    }

    public function cadastrar(TransportadoraFormRequest $request)
    {
        try {
            $data = $this->getRequestData($request);

            $this->model->on('central')->create($data);

            $messages = ['success' => "Transportadora cadastrada com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar a Transportadora!"];
        }
        
        return redirect()->route(request()->getHost().'.transportadoras.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function editar($id)
    {
        $transportadora = $this->model->find($id);

        return view('central.transportadora.edit', compact('transportadora'));
    }

    public function atualizar(TransportadoraFormRequest $request, $id)
    {
        try {

            $data = $this->getRequestData($request, $id);

            $transportadora = $this->model->on('central')->find($id);
            $transportadora->save($data);

            $messages = ['success' => "Transportadora atualizada com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizar a Transportadora!"];
        }
        
        return redirect()->route(request()->getHost().'.transportadoras.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {
            
            $transportadora = $this->model->on('central')->find($id);
            $transportadora->delete();

            $messages = ['success' => "Transportadora excluída com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir a Transportadora!"];
        }

        return redirect()->route(request()->getHost().'.transportadoras.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request, $id = null)
    {
        $cidade = $this->cidade->on('central')->whereRaw('unaccent(lower(nome)) = unaccent(lower(?))', [$request->cidadeInput])->first();

        $endereco_id = $this->buscaEndereco($request, $cidade);

        return [
            'id'                 => $id,
            'cnpj'               => $request->cnpjTranspInput,
            'nome'               => $request->nomeTranspInput,
            'end_num'            => $request->numeroInput,
            'complemento'        => $request->complementoInput,
            'endereco_id'        => $endereco_id,
            'contato'            => $request->contatoTranspInput,
            'telefone'           => $request->telefoneTranspInput,
            'celular'            => $request->celularTranspInput,
            'email'              => $request->emailTranspInput,
            'inscricao_estadual' => $request->inscricaoEstadualInput,
        ];
    }
}
