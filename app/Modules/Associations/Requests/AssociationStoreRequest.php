<?php


namespace App\Modules\Associations\Requests;


use App\Exceptions\CustomException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class AssociationStoreRequest extends FormRequest
{

    protected function failedValidation(Validator $validator)
    {
        throw new CustomException($validator->errors()->first(),422);
    }

    public function rules()
    {
        return

            [

                'name' => 'required|string',
                'place' => 'required|string'

            ];

    }
}

