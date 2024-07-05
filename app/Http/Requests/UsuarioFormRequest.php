<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuarioFormRequest extends FormRequest
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
        $rules = [
            'nomeUsuarioInput'          => 'required',
            'cpfUsuarioInput'           => ['required','cpf', Rule::unique('central.users', 'cpf')->ignore($this->id)],
            'rgUsuarioInput'            => 'required|max:20',
            'emailUsuarioInput'         => ['required','email', Rule::unique('central.users', 'email')->ignore($this->id)],
            'telefoneUsuarioInput'      => 'nullable|telefone_com_ddd',
            'celularUsuarioInput'       => 'required|celular_com_ddd',
            'dataNascUsuarioInput'      => 'nullable|date|before_or_equal:today',
            'cargoUsuarioInput'         => 'required|max:50',
            'cepInput'                  => 'max:10',
            'logradouroInput'           => 'max:100',
            'bairroInput'               => 'max:50',
            'numeroInput'               => 'max:20',
            'complementoInput'          => 'max:50',
            'acessoUsuarioInput'        => 'required',
        ];

        if (str_contains($this->route()->getName(), 'cadastrar')) { 
            $rules['senhaUsuarioInput'] = 'required';
            $rules['confSenhaUsuario'] = 'required|same:senhaUsuarioInput';
            $rules['selectedIds'] = 'required';
        }
    
        return $rules;
    }

    public function messages()
    {
        return [
            'nomeUsuarioInput.required'                 => 'O campo Nome é obrigatório.',
            'cpfUsuarioInput.required'                  => 'O campo CPF é obrigatório.',
            'cpfUsuarioInput.cpf'                       => 'O campo CPF é inválido.',
            'cpfUsuarioInput.unique'                    => 'O CPF informado já está em uso.',
            'rgUsuarioInput.required'                   => 'O campo RG é obrigatório.',
            'rgUsuarioInput.max'                        => 'O campo RG deve ter no maximo 20 caracteres.',
            'emailUsuarioInput.required'                => 'O campo Email é obrigatório.',
            'emailUsuarioInput.email'                   => 'O campo Email deve ser um endereço de email válido.',
            'emailUsuarioInput.unique'                  => 'O Email informado já está em uso.',
            'telefoneUsuarioInput.telefone_com_ddd'     => 'O campo Telefone é inválido.',
            'celularUsuarioInput.required'              => 'O campo Celular é obrigatório.',
            'celularUsuarioInput.celular_com_ddd'       => 'O campo Celular é inválido.',
            'dataNascUsuarioInput.date'                 => 'O campo Data de Nascimento deve ser uma data válida.',
            'dataNascUsuarioInput.before_or_equal'      => 'A Data de Nascimento deve ser anterior ou igual à data atual.',
            'cargoUsuarioInput.required'                => 'O campo Cargo é obrigatório.',
            'cargoUsuarioInput.max'                     => 'O campo RG deve ter no maximo 50 caracteres.',
            'senhaUsuarioInput.required'                => 'O campo Senha é obrigatório.',
            'confSenhaUsuario.required'                 => 'O campo Confirmação de Senha é obrigatório.',
            'confSenhaUsuario.same'                     => 'Os campos Senha e Confirmação de Senha devem ser iguais.',
            'cepInput.max'                              => 'O campo CEP deve ter no maximo 10 caracteres.',
            'logradouroInput.max'                       => 'O campo Endereço deve ter no maximo 100 caracteres.',
            'bairroInput.max'                           => 'O campo Bairro deve ter no maximo 50 caracteres.',
            'numeroInput.max'                           => 'O campo Número deve ter no maximo 20 caracteres.',
            'complementoInput.max'                      => 'O campo Complemento deve ter no maximo 50 caracteres.',
            'acessoUsuarioInput.required'               => 'O campo Acesso é obrigatório.',
            'selectedIds.required'                      => 'É obrigatório selecionar ao menos uma autorização para o usuário.',
        ];
    }
}
