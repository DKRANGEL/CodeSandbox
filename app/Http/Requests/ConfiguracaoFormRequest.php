<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfiguracaoFormRequest extends FormRequest
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
            'descontoMaxInput'     => 'required|numeric|min:0.1',
        ];
    }

    public function messages()
    {
        return [
            'descontoMaxInput.required'    => 'O campo Desconto Máximo é obrigatório.',
            'descontoMaxInput.numeric'     => 'O campo Desconto Máximo deve ser numérico.',
            'descontoMaxInput.min'         => 'O campo Desconto Máximo deve ter um valor mínimo de 0.1.',
        ];
    }
}
