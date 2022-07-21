<?php


namespace App\Modules\Associations\Services;


use App\Modules\Associations\Models\Association;

class AssociationServices
{
    public static function store($data)
    {
        return Association::query()->create($data);
    }

    public static function delete(Association $association)
    {
        $association->delete();
        return $association;
    }

    public static function index()
    {
        return Association::all();
    }


    public static function update(Association $association, $newdata)
    {
        $association->update($newdata);
        return $association;

    }


}
