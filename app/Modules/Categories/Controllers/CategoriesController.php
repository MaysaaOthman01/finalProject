<?php


namespace App\Modules\Categories\Controllers;


use App\Helpers\Helpers;
use App\Modules\Categories\Models\Categories;
use App\Modules\Categories\Requests\CategoriesStoreRequest;
use App\Modules\Categories\Requests\CategoriesUpdateRequest;
use App\Modules\Categories\Services\ServiceCategories;

class CategoriesController
{



    public function index()
    {
        $data = ServiceCategories::index();
        $response = Helpers::createSuccessResponse($data);
        return response()->json($response);
    }

    public function store(CategoriesStoreRequest $request)
    {
        return response()->json(Helpers::createSuccessResponse(ServiceCategories::store($request->validated())));
    }

    public function update(Categories $categories, CategoriesUpdateRequest $request)
    {
        $data = ServiceCategories::update($categories, $request->validated());
        $response = Helpers::createSuccessResponse($data);
        return response()->json($response);
    }

    public function delete(Categories $categories)
    {
      $categories=ServiceCategories::dalete($categories);
        $response = Helpers::createSuccessResponse($categories);

        return response()->json($response);
    }
}
