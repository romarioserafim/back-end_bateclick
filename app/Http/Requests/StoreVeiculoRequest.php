<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVeiculoRequest extends RequestApi
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rule = [
            'modelo' => 'required',
            'fabricante' => 'required',
            'ano' => 'required|numeric',
            'preco' => 'required|numeric',
            'id' => Rule::exists('veiculo', 'id'),
        ];

        return $rule;
    }


    public function messages()
    {
        return [
            'modelo.required' => 'O campo modelo é obrigatório.',
            'fabricante.required' => 'O campo fabricante é obrigatório.',
            'ano.required' => 'O campo ano é obrigatório.',
            'ano.numeric' => 'O campo ano deve ser um valor numérico.',
            'preco.required' => 'O campo preço é obrigatório.',
            'preco.numeric' => 'O campo preço deve ser um valor numérico.',
            'id.exists' => 'O veículo informado não existe na base'
        ];
    }
}
