<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MotoqueiroFormRequest extends FormRequest
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
            'nomeMotoInput'         => 'required|max:100',
            'empresaMotoInput'      => 'required|max:100',
            'cpfMotoInput'          => ['required', 'cpf', Rule::unique('central.motoqueiros', 'cpf')->ignore($this->id)],
            'rgMotoInput'           => 'required|max:20',
            'cepInput'              => 'max:10',
            'logradouroInput'       => 'max:100',
            'bairroInput'           => 'max:50',
            'numeroInput'           => 'max:20',
            'complementoInput'      => 'max:50',
            'emailMotoInput'        => 'nullable|email|max:100',
            'telefoneMotoInput'     => 'nullable|telefone_com_ddd',
            'celularMotoInput'      => 'required|celular_com_ddd',
            'dataNascMotoInput'     => 'nullable|date|before_or_equal:today',
            'placaMotoInput'        => 'required|max:10',
            'comissaoMotoInput'     => 'required|numeric|min:0.0',
            'taxaEntregaMotoInput'  => 'required|numeric|min:0.0',
            'salarioMotoInput'      => 'required|numeric|min:0.0',
            'obsMotoInput'          => 'max:255',
        ];
    }

    public function messages()
    {
        return [
            'nomeMotoInput.required'              => 'O campo Nome é obrigatório.',
            'nomeMotoInput.max'                   => 'O campo Nome deve ter no maximo 100 caracteres.',
            'empresaMotoInput.required'           => 'O campo Empresa é obrigatório.',
            'empresaMotoInput.max'                => 'O campo Empresa deve ter no maximo 100 caracteres.',
            'cpfMotoInput.required'               => 'O campo CPF é obrigatório.',
            'cpfMotoInput.cpf'                    => 'O campo CPF é inválido.',
            'cpfMotoInput.unique'                 => 'O CPF do Motoqueiro ja está em uso!',
            'rgMotoInput.required'                => 'O campo RG é obrigatório.',
            'rgMotoInput.max'                     => 'O campo RG deve ter no maximo 20 caracteres.',
            'cepInput.max'                        => 'O campo CEP deve ter no maximo 10 caracteres.',
            'logradouroInput.max'                 => 'O campo Endereço deve ter no maximo 100 caracteres.',
            'bairroInput.max'                     => 'O campo Bairro deve ter no maximo 50 caracteres.',
            'numeroInput.max'                     => 'O campo Número deve ter no maximo 20 caracteres.',
            'complementoInput.max'                => 'O campo Complemento deve ter no maximo 50 caracteres.',
            'emailMotoInput.email'                => 'O campo Email deve ser um endereço de email válido.',
            'emailMotoInput.max'                  => 'O campo Email deve ter no maximo 100 caracteres.',
            'telefoneMotoInput.telefone_com_ddd'  => 'O campo Telefone é inválido.',
            'celularMotoInput.required'           => 'O campo Celular é obrigatório.',
            'celularMotoInput.celular_com_ddd'    => 'O campo Celular é inválido.',
            'dataNascMotoInput.date'              => 'O campo Data de Nascimento deve ser uma data válida.',
            'dataNascMotoInput.before_or_equal'   => 'A Data de Nascimento deve ser anterior ou igual à data atual.',
            'placaMotoInput.required'             => 'O campo Placa é obrigatório.',
            'placaMotoInput.max'                  => 'O campo Placa deve ter no maximo 10 caracteres.',
            'comissaoMotoInput.required'          => 'O campo Comissão é obrigatório.',
            'comissaoMotoInput.numeric'           => 'O campo Comissão deve ser numérico.',
            'comissaoMotoInput.min'               => 'O campo Comissão deve ter um valor mínimo de 0.0.',
            'taxaEntregaMotoInput.required'       => 'O campo Taxa de Entrega é obrigatório.',
            'taxaEntregaMotoInput.numeric'        => 'O campo Taxa de Entrega deve ser numérico.',
            'taxaEntregaMotoInput.min'            => 'O campo Taxa de Entrega deve ter um valor mínimo de 0.0.',
            'salarioMotoInput.required'           => 'O campo Salário é obrigatório.',
            'salarioMotoInput.numeric'            => 'O campo Salário deve ser numérico.',
            'salarioMotoInput.min'                => 'O campo Salário deve ter um valor mínimo de 0.0.',
            'obsMotoInput.max'                    => 'O campo Observação deve ter no maximo 255 caracteres.',
        ];
    }
}
