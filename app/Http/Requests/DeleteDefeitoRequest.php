<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DeleteDefeitoRequest extends RequestApi
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
            'id' => Rule::exists('defeito', 'id'),
        ];
    }

    public function messages()
    {
        return [
            'id.exists' => 'O id de defeito informado não existe na base'
        ];
    }
}
