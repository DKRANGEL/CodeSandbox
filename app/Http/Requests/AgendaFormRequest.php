<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AgendaFormRequest extends FormRequest
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
            'nomeAgendaInput'       => ['required', 'max:100', Rule::unique('central.agendas', 'nome')->ignore($this->route('id'))],
            'apelidoAgendaInput'    => ['required', 'max:50', Rule::unique('central.agendas', 'apelido')->ignore($this->route('id'))],
            'cepInput'              => 'required|max:10',
            'logradouroInput'       => 'required|max:100',
            'bairroInput'           => 'required|max:50',
            'numeroInput'           => 'required|max:20',
            'complementoInput'      => 'max:50',
            'cidadeInput'           => 'required',
            'emailAgendaInput'      => 'nullable|email|max:100',
            'celularAgendaInput'    => ['required', 'celular_com_ddd', Rule::unique('central.agendas', 'celular')->ignore($this->route('id'))],
            'telefoneAgendaInput'   => 'nullable|telefone_com_ddd',
            'dataNascAgendaInput'   => 'nullable|date|before_or_equal:today',
            'obsAgendaInput'        => 'max:255',
        ];
    }

    public function messages()
    {
        return [
            'nomeAgendaInput.required'              => 'O campo Nome é obrigatório.',
            'nomeAgendaInput.max'                   => 'O campo Nome deve ter no máximo 100 caracteres.',
            'nomeAgendaInput.unique'                => 'O Nome da Agenda já está em uso!',
            'apelidoAgendaInput.max'                => 'O campo Apelido deve ter no máximo 50 caracteres.',
            'apelidoAgendaInput.unique'             => 'O campo Apelido já está em uso!',
            'apelidoAgendaInput.required'           => 'O campo Apelido é obrigatório.',
            'cepInput.max'                          => 'O campo CEP deve ter no máximo 10 caracteres.',
            'cepInput.required'                     => 'O campo CEP é obrigatório.',
            'logradouroInput.max'                   => 'O campo Endereço deve ter no máximo 100 caracteres.',
            'logradouroInput.required'              => 'O campo Endereço é obrigatório.',
            'bairroInput.max'                       => 'O campo Bairro deve ter no máximo 50 caracteres.',
            'bairroInput.required'                  => 'O campo Bairro é obrigatório.',
            'numeroInput.max'                       => 'O campo Número deve ter no máximo 20 caracteres.',
            'numeroInput.required'                  => 'O campo Número é obrigatório.',
            'cidadeInput.required'                  => 'O campo Cidade é obrigatório.',
            'complementoInput.max'                  => 'O campo Complemento deve ter no máximo 50 caracteres.',
            'emailAgendaInput.email'                => 'O campo Email deve ser um endereço de email válido.',
            'emailAgendaInput.max'                  => 'O campo Email deve ter no máximo 100 caracteres.',
            'celularAgendaInput.required'           => 'O campo Celular é obrigatório.',
            'celularAgendaInput.celular_com_ddd'    => 'O campo Celular é inválido.',
            'celularAgendaInput.unique'             => 'O campo Celular já está em uso!',
            'telefoneAgendaInput.telefone_com_ddd'  => 'O campo Telefone é inválido.',
            'dataNascAgendaInput.date'              => 'O campo Data de Nascimento deve ser uma data válida.',
            'dataNascAgendaInput.before_or_equal'   => 'A Data de Nascimento deve ser anterior ou igual à data atual.',
            'obsAgendaInput.max'                    => 'O Contato Email deve ter no máximo 255 caracteres.',
        ];
    }
}
