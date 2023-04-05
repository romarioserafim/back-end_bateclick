<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class StoreDefeitoRequest extends RequestApi
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
        return [
            'idVeiculo' => [
                'required',
                Rule::exists('veiculo', 'id'),
            ],
            'id' => [
                Rule::exists('defeito', 'id'),
            ],
            'descricao_defeito' =>'required',

        ];
    }

    public function messages()
    {
        return [
            'idVeiculo.required' => 'O campo idVeiculo é obrigatório.',
            'descricao_defeito.required' => 'O campo descricao_defeito é obrigatório.',
            'idVeiculo.exists' => 'O veículo informado não existe na base.',
            'id.exists' => 'O defeito informado não existe na base.'
        ];
    }
}
