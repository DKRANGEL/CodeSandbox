<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfiguracaoFormRequest;
use App\Models\Central\Configuracao;
use Exception;

class ConfiguracaoController extends Controller
{
    public function __construct(protected Configuracao $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $configuracao = $this->model->find(1);

        return view('central.configuracao.index', compact('configuracao'));
    }

    public function atualizar(ConfiguracaoFormRequest $request)
    {
        try {

            $data = $this->getRequestData($request);

            $configuracao = $this->model->find(1);
            $configuracao->update($data);

            $messages = ['success' => "Configuração atualizada com sucesso!"];
        } catch (Exception $e) {
            $messages = ['error'   => "Ocorreu um erro ao atualizar as Configurações!"];
        }
        
        return redirect()->route(request()->getHost().'.configuracoes.show')->with('messages', $messages)->with('timestamp', time());
    }

    private function getRequestData($request)
    {
        return [
            'tipo_sistema'  => $request->tiposistemaInput,
            'deconto_max'   => $request->descontoMaxInput,
            'senha_menu'    => $request->statusSenhaMenuInput === 'on' ? true : false,
        ];
    }
}
