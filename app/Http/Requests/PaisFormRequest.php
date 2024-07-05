<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PaisFormRequest extends FormRequest
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
            'nomePaisInput'  => ['required', 'min:3', 'max:100', Rule::unique('central.cidades', 'nome')->ignore($this->route('id'))],
            'codBacenInput'  => 'required|gt:0|digits_between:3,4',
            'siglaPaisInput' => 'required|min:2|max:2',
        ];
    }

    public function messages()
    {
        return [
            'nomePaisInput.required'        => 'O campo Nome é obrigatório.',
            'nomePaisInput.min'             => 'O campo Nome deve ter no mínimo 3 caracteres.',
            'nomePaisInput.max'             => 'O campo Nome deve ter no maximo 100 caracteres.',
            'nomePaisInput.unique'          => 'O Nome do País ja está em uso!',
            'codBacenInput.required'        => 'O campo Cod. Bacen é obrigatório.',
            'codBacenInput.gt'              => 'O campo Cod. Bacen deve ser um número inteiro.',
            'codBacenInput.digits_between'  => 'O campo Cod. Bacen deve ser um código de 4 digitos',
            'siglaPaisInput.required'       => 'O campo Sigla é obrigatório.',
            'siglaPaisInput.min'            => 'O campo Sigla deve ser um código de 2 digitos.',
            'siglaPaisInput.max'            => 'O campo Sigla deve ser um código de 2 digitos.',
        ];
    }
}
