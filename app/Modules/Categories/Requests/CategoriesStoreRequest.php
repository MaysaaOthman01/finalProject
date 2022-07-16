<?php


namespace App\Modules\Categories\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CategoriesStoreRequest extends FormRequest
{
public function rules(){
    return

        [
            'type' => 'required|string',
            'name' => 'required|string',
            'association_id' => 'required|integer'

        ];


}
}
