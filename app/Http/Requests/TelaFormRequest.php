<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TelaFormRequest extends FormRequest
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
            'telaNomeInput' => ['required', 'max:30', Rule::unique('central.telas', 'nome')->ignore($this->id)],
        ];
    }

    public function messages()
    {
        return [
            'telaNomeInput.required' => 'O campo Nome da Tela é obrigatório.',
            'telaNomeInput.max'      => 'O campo Nome da Tela deve ter no máximo :max caracteres.',
            'telaNomeInput.unique'   => 'O Nome da Tela ja está em uso.',
        ];
    }
}
