<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CidadeFormRequest extends FormRequest
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
            'nomeCidadeInput'     => ['required', 'min:3', 'max:100', Rule::unique('central.cidades', 'nome')->ignore($this->route('id'))],
            'codIbgeCidadeInput'  => 'required|gt:0|digits_between:7,7',
            'estadoCidadeSelect'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nomeCidadeInput.required'          => 'O campo Cidade é obrigatório.',
            'nomeCidadeInput.min'               => 'O campo Cidade deve ter no mínimo 3 caracteres.',
            'nomeCidadeInput.max'               => 'O campo Cidade deve ter no maximo 100 caracteres.',
            'nomeCidadeInput.unique'            => 'O Nome da Cidade ja está em uso!',
            'codIbgeCidadeInput.required'       => 'O campo Cod. Bacen é obrigatório.',
            'codIbgeCidadeInput.gt'             => 'O campo Cod. Bacen deve ser um número inteiro.',
            'codIbgeCidadeInput.digits_between' => 'O campo Cod. Bacen deve ser um código de 7 digitos',
            'estadoCidadeSelect.required'       => 'O campo Estado é obrigatório.',
        ];
    }
}
