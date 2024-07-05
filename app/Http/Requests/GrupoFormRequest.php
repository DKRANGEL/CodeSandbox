<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GrupoFormRequest extends FormRequest
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
            'codGrupoInput'         => ['required', 'max:3', Rule::unique('central.grupos', 'codigo')->ignore($this->route('id'))],
            'descricaoGrupoInput'   => ['required', 'max:100', Rule::unique('central.grupos', 'descricao')->ignore($this->route('id'))]
        ];
    }

    public function messages()
    {
        return [
            'codGrupoInput.required'        => 'O campo Código é obrigatório.',
            'codGrupoInput.max'             => 'O campo Código deve ter no máximo :max caracteres.',
            'codGrupoInput.unique'          => 'O Código já está em uso!',
            'descricaoGrupoInput.required'  => 'O campo Descrição é obrigatório.',
            'descricaoGrupoInput.max'       => 'O campo Descrição deve ter no máximo :max caracteres.',
            'descricaoGrupoInput.unique'    => 'A Descrição já está em uso!',
        ];
    }
}
