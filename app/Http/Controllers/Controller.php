<?php

namespace App\Http\Controllers;

use App\Models\Central\Endereco;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function buscaEndereco($request, $cidade = null, $prefix = false)
    {
        // Define os prefixos com base no parâmetro $prefix
        $prefixoCep = $prefix ? 'resp_' : '';
        $prefixoLogradouro = $prefix ? 'resp_' : '';
        $prefixoBairro = $prefix ? 'resp_' : '';

        // Verifica se os campos do endereço estão preenchidos
        if ($request->filled($prefixoCep.'cepInput') && 
            $request->filled($prefixoLogradouro.'logradouroInput') && 
            $request->filled($prefixoBairro.'bairroInput')) {
            
            // Extrai os valores dos campos com base nos prefixos
            $cep = $request->input($prefixoCep.'cepInput');
            $logradouro = $request->input($prefixoLogradouro.'logradouroInput');
            $bairro = $request->input($prefixoBairro.'bairroInput');

            // Verifica se o endereço já existe na tabela enderecos; se não, cadastra
            $endereco = Endereco::on('central')->where('cep', $cep)
                ->where('logradouro', $logradouro)
                ->where('bairro', $bairro)
                ->where('cidade_id', $cidade->id)
                ->firstOrCreate([
                    'cep' => $cep,
                    'logradouro' => $logradouro,
                    'bairro' => $bairro,
                    'cidade_id' => $cidade->id,
                ]);

            // Retorna o ID do endereço encontrado ou criado
            return $endereco->id;
        }

        return null;
    }

}
