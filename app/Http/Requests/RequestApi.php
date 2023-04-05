<?php
namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RequestApi extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            'status' => 'error'
        ], 422));
    }


    public function all($keys = null)
    {
        $request = parent::all();

        if ($this->route('id')) {
            $request['id'] = $this->route('id');
        }

        return $request;
    }
}
