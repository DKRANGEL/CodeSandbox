<?php

namespace App\Http\Controllers\Central;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AgendaFormRequest;
use App\Models\Central\Agenda;
use App\Models\Central\Cidade;
use Exception;
use Yajra\DataTables\Facades\DataTables;

class AgendaController extends Controller
{
    public function __construct(protected Agenda $model, protected Cidade $cidade)
    {
        $this->model = $model;
        $this->cidade = $cidade;
    }

    public function listar(Request $request)
    {
        if ($request->ajax()) {
            $agendas = $this->model->on('central')->with('endereco.cidade');

            return DataTables::eloquent($agendas)
                ->addColumn('cidade_nome', function ($agenda) {
                    return $agenda->endereco->cidade->nome;
                })
                ->rawColumns(['cidade_nome'])
                ->make(true);
        }

        return view('central.agenda.index');
    }

    public function adicionar()
    {
        return view('central.agenda.add');
    }  

    public function cadastrar(AgendaFormRequest $request)
    {
        try {

            $data = $this->getRequestData($request);

            $this->model->on('central')->create($data);

            $messages = ['success' => "Agenda cadastrada com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar a Agenda!"];
        }

        return redirect()->route(request()->getHost().'.agendas.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function editar($id)
    {
        $agenda = $this->model->on('central')->find($id);

        return view('central.agenda.edit', compact('agenda'));
    }

    public function atualizar(AgendaFormRequest $request, $id)
    {
        try {

            $data = $this->getRequestData($request, $id);

            $agenda = $this->model->on('central')->find($id);
            $agenda->update($data);

            $messages = ['success' => "Agenda atualizada com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizar a Agenda!"];
        }
        
        return redirect()->route(request()->getHost().'.agendas.listar')->with('messages', $messages)->with('timestamp', time());
    }

    public function deletar($id)
    {
        try {
            
            $agenda = $this->model->on('central')->find($id);
            $agenda->delete();

            $messages = ['success' => "Agenda excluída com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir a Agenda!"];
        }

        return redirect()->route(request()->getHost().'.agendas.listar')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request)
    {
        $cidade = $this->cidade->on('central')->whereRaw('unaccent(lower(nome)) = unaccent(lower(?))', [$request->cidadeInput])->first();

        $endereco_id = $this->buscaEndereco($request, $cidade);

        return [
            'nome'                  => $request->nomeAgendaInput,
            'apelido'               => $request->apelidoAgendaInput,
            'empresa'               => $request->empresaAgendaInput,
            'endereco_id'           => $endereco_id,
            'end_num'               => $request->numeroInput,
            'complemento'           => $request->complementoInput,
            'email'                 => $request->emailAgendaInput,
            'telefone'              => $request->telefoneAgendaInput,
            'celular'               => $request->celularAgendaInput,
            'data_nasc'             => $request->dataNascAgendaInput,
            'obs'                   => $request->obsAgendaInput,
        ];
    }
}
