<?php


namespace App\Modules\Posts\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function rules(){
        return [
            'title' => 'required|string',
            'body' => 'required|string',
            'user_id' => 'required|integer',
        ];
    }
}
