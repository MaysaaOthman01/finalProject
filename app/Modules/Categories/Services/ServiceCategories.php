<?php


namespace App\Modules\Categories\Services;


use App\Modules\Categories\Models\Categories;

class ServiceCategories

{
    public static function store($data)
    {
        return Categories::query()->create($data);


    }

    public static function dalete(Categories $categories)
    {
        $categories->delete();
        return $categories;
    }

    public static function index()
    {
        return Categories::all();
    }


    public static function update(Categories $categories, $newdata)
    {
        $categories->update($newdata);
        return $categories;

    }
}
