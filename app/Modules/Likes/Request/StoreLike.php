<?php


namespace App\Modules\Likes\Request;


use Illuminate\Foundation\Http\FormRequest;

class StoreLike extends FormRequest
{
    public function rules()
    {
        return [
            'id-user' => 'required|integer',
            'id-comment' => 'required|integer',
            'id-post' => 'required|integer'
        ];
    }

}



