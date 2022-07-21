<?php


namespace App\Modules\Associations\Requests;


use Illuminate\Foundation\Http\FormRequest;

class AssociationUpdateRequest extends FormRequest


{
    public function rules()
    {
        return

            [

                'name' => 'required|string',
                'place' => 'required|string'

            ];


    }}



