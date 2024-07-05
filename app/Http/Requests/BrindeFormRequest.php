<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BrindeFormRequest extends FormRequest
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
        $rules = [
            'descricaoBrindeInput'  => ['required', 'max:100'],
            'pontosBrindeInput'     => 'required|numeric|min:0.1',
            'estoqueBrindeInput'    => 'required|numeric|min:0.1',
        ];

        if (request()->getHost() == getCentralDomain() && str_contains($this->route()->getName(), 'cadastrar')) { 
            $rules['lojaSelectMultiple'] = 'required';
        } 
        
        if (tenant()) {
            $rules['descricaoBrindeInput'][] = Rule::unique('brindes', 'descricao')->ignore($this->route('id'));
        }
    
        return $rules;
    }

    public function messages()
    {
        return [
            'descricaoBrindeInput.required' => 'O campo Descrição é obrigatório.',
            'descricaoBrindeInput.max'      => 'O campo Descrição deve ter no máximo :max caracteres.',
            'descricaoBrindeInput.unique'   => 'A Descrição já está em uso!',
            'pontosBrindeInput.required'    => 'O campo Pontos é obrigatório.',
            'pontosBrindeInput.numeric'     => 'O campo Pontos deve ser numérico.',
            'pontosBrindeInput.min'         => 'O campo Pontos deve ter um valor mínimo de 0.1.',
            'estoqueBrindeInput.required'   => 'O campo Estoque é obrigatório.',
            'estoqueBrindeInput.numeric'    => 'O campo Estoque deve ser numérico.',
            'estoqueBrindeInput.min'        => 'O campo Estoque deve ter um valor mínimo de 0.1.',
            'lojaSelectMultiple.required'   => 'O campo Lojas é obrigatório.',
        ];
    }
}
