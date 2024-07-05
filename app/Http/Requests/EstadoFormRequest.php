<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; 

class EstadoFormRequest extends FormRequest
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
            'nomeEstadoInput'   => ['required', 'min:3', 'max:50', Rule::unique('central.estados', 'nome')->ignore($this->route('id'))],
            'codIBGEInput'      => 'required|gt:0|digits_between:2,2',
            'siglaEstadoInput'  => 'required|string|alpha|size:2',
            'valorMaxInput'     => 'required|string|min:0',
            'dddInput'          => 'required|digits_between:2,2',
            'paisSelectInput'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nomeEstadoInput.required'          => 'O campo Nome é obrigatório.',
            'nomeEstadoInput.min'               => 'O campo Nome deve que ter no mínimo 3 caracteres.',
            'nomeEstadoInput.max'               => 'O campo Nome deve que ter de 50 caracteres.',
            'nomeEstadoInput.unique'            => 'O Nome do Estado ja está em uso!',
            'codIBGEInput.required'             => 'O campo Cod. IBGE é obrigatório.',
            'codIBGEInput.gt'                   => 'O campo Cod. IBGE deve ser um número inteiro',
            'codIBGEInput.digits_between'       => 'O campo Cod. IBGE deve ser um código de 2 digitos',
            'siglaEstadoInput.required'         => 'O campo Sigla é obrigatório.',
            'siglaEstadoInput.alpha'            => 'O campo Sigla não pode ser superior a 2 caracteres.',
            'valorMaxInput.required'            => 'O campo Valor Max é obrigatório.',
            'valorMaxInput.min'                 => 'O campo Valor Max deve ter no mínimo 1 digito.',
            'dddInput.required'                 => 'O campo DDD é obrigatório.',
            'dddInput.digits_between'           => 'O campo DDD deve ser um código de 2 digitos',
            'paisSelectInput.required'          => 'O campo Pais é obrigatório.',
        ];
    }
}
