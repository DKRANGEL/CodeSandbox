<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransportadoraFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cnpjTranspInput'           => ['required', 'cnpj', Rule::unique('central.transportadoras', 'cnpj')->ignore($this->route('id'))],
            'nomeTranspInput'           => ['required', 'max:100', Rule::unique('central.transportadoras', 'nome')->ignore($this->route('id'))],
            'inscricaoEstadualInput'    => 'max:20',
            'cepInput'                  => 'max:10',
            'logradouroInput'           => 'max:100',
            'bairroInput'               => 'max:50',
            'numeroInput'               => 'max:20',
            'complementoInput'          => 'max:50',
            'emailTranspInput'          => 'email|max:100',
            'celularTranspInput'        => 'required|celular_com_ddd',
            'telefoneTranspInput'       => 'telefone_com_ddd',
            'contatoTranspInput'        => 'max:100',
        ];
    }

    public function messages()
    {
        return [
            'cnpjTranspInput.required'              => 'O campo CNPJ é obrigatório.',
            'cnpjTranspInput.cnpj'                  => 'O campo CNPJ é inválido.',
            'cnpjTranspInput.unique'                => 'O CNPJ da Transportadora já está em uso!',
            'nomeTranspInput.required'              => 'O campo Nome da Transportadora é obrigatório.',
            'nomeTranspInput.max'                   => 'O campo Nome da Transportadora deve ter no máximo 100 caracteres.',
            'nomeTranspInput.unique'                => 'O Nome da Transportadora já está em uso!',
            'inscricaoEstadualInput.max'            => 'O campo Inscrição Estadual deve ter no máximo 20 caracteres.',
            'cepInput.max'                          => 'O campo CEP deve ter no máximo 10 caracteres.',
            'logradouroInput.max'                   => 'O campo Endereço deve ter no máximo 100 caracteres.',
            'bairroInput.max'                       => 'O campo Bairro deve ter no máximo 50 caracteres.',
            'numeroInput.max'                       => 'O campo Número deve ter no máximo 20 caracteres.',
            'complementoInput.max'                  => 'O campo Complemento deve ter no máximo 50 caracteres.',
            'emailTranspInput.email'                => 'O campo Email deve ser um endereço de email válido.',
            'emailTranspInput.max'                  => 'O campo Email deve ter no máximo 100 caracteres.',
            'celularTranspInput.required'           => 'O campo Celular é obrigatório.',
            'celularTranspInput.celular_com_ddd'    => 'O campo Celular é inválido.',
            'telefoneTranspInput.required'          => 'O campo Telefone é obrigatório.',
            'telefoneTranspInput.telefone_com_ddd'  => 'O campo Telefone é inválido.',
            'contatoTranspInput.max'                => 'O Contato Email deve ter no máximo 100 caracteres.',
        ];
    }
}
