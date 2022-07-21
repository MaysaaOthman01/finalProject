<?php


namespace App\Modules\Associations\Controllers;


use App\Helpers\Helpers;
use App\Modules\Associations\Models\Association;
use App\Modules\Associations\Requests\AssociationStoreRequest;
use App\Modules\Associations\Requests\AssociationUpdateRequest;
use App\Modules\Associations\Services\AssociationServices;
use App\Modules\Categories\Models\Categories;
use App\Modules\Categories\Requests\CategoriesStoreRequest;
use App\Modules\Categories\Requests\CategoriesUpdateRequest;
use App\Modules\Categories\Services\ServiceCategories;

class AssociationController
{
    public function index()
    {
        $data = AssociationServices::index();
        $response = Helpers::createSuccessResponse($data);
        return response()->json($response);
    }

    public function store(AssociationStoreRequest $request)
    {
        return response()->json(Helpers::createSuccessResponse(AssociationServices::store($request->validated())));
    }

    public function update(Association $association, AssociationUpdateRequest $request)
    {
        $data = AssociationServices::update($association, $request->validated());
        $response = Helpers::createSuccessResponse($data);
        return response()->json($response);
    }

    public function delete(Association $association)
    {
        $association=AssociationServices::delete($association);
        $response = Helpers::createSuccessResponse($association);

        return response()->json($response);
    }


}
