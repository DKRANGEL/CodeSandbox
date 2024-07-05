<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TipoFormRequest extends FormRequest
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
            'tipoNomeInput' => ['required', 'max:30', Rule::unique('central.tipos', 'nome')->ignore($this->route('id'))]
        ];
    }

    public function messages()
    {
        return [
            'tipoNomeInput.required' => 'O campo Nome do Tipo é obrigatório.',
            'tipoNomeInput.max'      => 'O campo Nome do Tipo deve ter no máximo :max caracteres.',
            'tipoNomeInput.unique'   => 'O Tipo já está em uso.',
        ];
    }
}