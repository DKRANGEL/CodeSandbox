<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LojaFormRequest extends FormRequest
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
            'cnpjLojaInput'             => 'required|cnpj',
            'razaoSocialLojaInput'      => ['required','max:100', Rule::unique('central.tenants', 'razao_social')->ignore($this->id)],
            'fantasiaLojaInput'         => ['required','max:100', Rule::unique('central.tenants', 'fantasia')->ignore($this->id)],
            'proprietarioLojaInput'     => 'max:50',
            'gerenteLojaInput'          => 'max:50',
            'inscricaoEstadualInput'    => 'max:30',
            'inscricaoMunicipalInput'   => 'max:50',
            'cepInput'                  => 'max:10',
            'logradouroInput'           => 'max:100',
            'bairroInput'               => 'max:50',
            'numeroInput'               => 'max:20',
            'complementoInput'          => 'max:50',
            'emailLojaInput'            => ['required','email','max:100',Rule::unique('central.tenants', 'email')->ignore($this->id)],
            'celularLojaInput'          => 'required|celular_com_ddd',
            'telefoneLojaInput'         => 'required|telefone_com_ddd',
            'usuarioFarmaPopular'       => 'max:50',
            'senhaFarmaPopular'         => 'max:100',

            'nomeRespInput'             => 'required',
            'cpfRespInput'              => 'required|cpf',
            'rgRespInput'               => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cnpjLojaInput.required'                => 'O campo CNPJ é obrigatório.',
            'cnpjLojaInput.cnpj'                    => 'O campo CNPJ é inválido.',
            'razaoSocialLojaInput.required'         => 'O campo Razão Social é obrigatório.',
            'razaoSocialLojaInput.max'              => 'O campo Razão Social deve ter no maximo 100 caracteres.',
            'razaoSocialLojaInput.unique'           => 'A Razão Social informada já está em uso.',
            'fantasiaLojaInput.required'            => 'O campo Nome Fantasia é obrigatório.',
            'fantasiaLojaInput.max'                 => 'O campo Nome Fantasia deve ter no maximo 100 caracteres.',
            'fantasiaLojaInput.unique'              => 'O Nome Fantasia informado já está em uso.',
            'proprietarioLojaInput.max'             => 'O campo Nome do Proprietário deve ter no maximo 50 caracteres.',
            'gerenteLojaInput.max'                  => 'O campo Nome do Gerente deve ter no maximo 50 caracteres.',
            'inscricaoEstadualInput.max'            => 'O campo Inscrição Estadual deve ter no maximo 30 caracteres.',
            'inscricaoMunicipalInput.max'           => 'O campo Inscrição Municipal deve ter no maximo 50 caracteres.',
            'cepInput.max'                          => 'O campo CEP deve ter no maximo 10 caracteres.',
            'logradouroInput.max'                   => 'O campo Endereço deve ter no maximo 100 caracteres.',
            'bairroInput.max'                       => 'O campo Bairro deve ter no maximo 50 caracteres.',
            'numeroInput.max'                       => 'O campo Número deve ter no maximo 20 caracteres.',
            'complementoInput.max'                  => 'O campo Complemento deve ter no maximo 50 caracteres.',
            'emailLojaInput.required'               => 'O campo Email é obrigatório.',
            'emailLojaInput.email'                  => 'O campo Email deve ser um endereço de email válido.',
            'emailLojaInput.max'                    => 'O campo Email deve ter no maximo 100 caracteres.',
            'emailLojaInput.unique'                 => 'O Email informado já está em uso.',
            'celularLojaInput.required'             => 'O campo Celular é obrigatório.',
            'celularLojaInput.celular_com_ddd'      => 'O campo Celular é inválido.',
            'telefoneLojaInput.required'            => 'O campo Telefone é obrigatório.',
            'telefoneLojaInput.telefone_com_ddd'    => 'O campo Telefone é inválido.',
            'senhaFarmaPopular.max'                 => 'O campo Senha deve ter no maximo 100 caracteres.',

            'nomeRespInput.required'                => 'O campo Nome é obrigatório.',
            'cpfRespInput.required'                 => 'O campo CPF é obrigatório.',
            'cpfRespInput.cpf'                      => 'O campo CPF é inválido.',
            'rgRespInput.required'                  => 'O campo RG é obrigatório.',
        ];
    }
}
