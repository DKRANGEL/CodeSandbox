<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AcessoFormRequest extends FormRequest
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
            'acessoNomeInput' => ['required', 'max:50', Rule::unique('central.acessos', 'nome')->ignore($this->route('id'))],
        ];
    }

    public function messages()
    {
        return [
            'acessoNomeInput.required' => 'O campo Nome do Acesso é obrigatório.',
            'acessoNomeInput.max'      => 'O campo Nome do Acesso deve ter no máximo :max caracteres.',
            'acessoNomeInput.unique'   => 'O Nome do Acesso ja está em uso!',
        ];
    }
}
