<?php


namespace App\Modules\Categories\Requests;


use App\Exceptions\CustomException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CategoriesUpdateRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw new CustomException($validator->errors()->first(), 422);
    }

    public function rules()
    {
        return

            [
                'type' => 'required|string',
                'name' => 'required|string',
                'association_id' => 'required|integer'

            ];


    }
}
