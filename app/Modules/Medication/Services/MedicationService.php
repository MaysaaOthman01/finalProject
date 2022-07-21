<?php


namespace App\Modules\Medication\Services;


use App\Modules\Categories\Models\Categories;
use App\Modules\Medication\Models\Medication;

class MedicationService
{
    public static function store($data)
    {
        return Medication::query()->create($data);


    }

    public static function dalete(Medication $medication)
    {
        $medication->delete();
        return $medication;
    }

    public static function index()
    {
        return Medication::all();
    }


    public static function update(Medication $medication, $newdata)
    {
        $medication->update($newdata);
        return $medication;

    }


}
