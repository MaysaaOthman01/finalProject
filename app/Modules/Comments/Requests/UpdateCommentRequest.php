<?php


namespace App\Modules\Comments\Requests;


use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
{
public function rules(){
    return[
        'comment'=>'required|string',
        'post_id'=>'required|integer',
        'user_id'=>'required|integer',
        ];

}
}
