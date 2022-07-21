<?php


namespace App\Modules\Medication\Requestes;


use Illuminate\Foundation\Http\FormRequest;

class MedicationStoreRequest extends FormRequest
{





    public function rules()
{
    return

        [

            'name' => 'required|string',
            'price' => 'required|numeric',
            'num_tablets' => 'required|integer',

        ];

}
}
