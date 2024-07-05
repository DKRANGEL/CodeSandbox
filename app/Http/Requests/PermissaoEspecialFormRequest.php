<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PermissaoEspecialFormRequest extends FormRequest
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
            'descricaoPermissaoInput' => ['required', 'max:50', Rule::unique('central.permissoes_especiais', 'descricao')->ignore($this->route('id'))],
        ];
    }

    public function messages()
    {
        return [
            'descricaoPermissaoInput.required' => 'O campo Descrição de Permissão é obrigatório.',
            'descricaoPermissaoInput.max'      => 'O campo Descrição de Permissão deve ter no máximo :max caracteres.',
            'descricaoPermissaoInput.unique'   => 'A Descrição ja está em uso!',
        ];
    }
}
