<?php


namespace App\Modules\Medication\Controllers;


use App\Helpers\Helpers;
use App\Modules\Associations\Models\Association;
use App\Modules\Associations\Requests\AssociationUpdateRequest;
use App\Modules\Associations\Services\AssociationServices;
use App\Modules\Categories\Requests\CategoriesStoreRequest;
use App\Modules\Categories\Services\ServiceCategories;
use App\Modules\Medication\Models\Medication;
use App\Modules\Medication\Requestes\MedicationStoreRequest;
use App\Modules\Medication\Requestes\MedicationUpdateRequest;
use App\Modules\Medication\Services\MedicationService;

class MedicationController
{
    public function index()
    {
        $data = MedicationService::index();
        $response = Helpers::createSuccessResponse($data);
        return response()->json($response);
    }

    public function store(MedicationStoreRequest $request)
    {
        return response()->json(Helpers::createSuccessResponse(MedicationService::store($request->validated())));
    }

    public function update(Medication $medication, MedicationUpdateRequest $request)
    {
        $data = MedicationService::update($medication, $request->validated());
        $response = Helpers::createSuccessResponse($data);
        return response()->json($response);
    }

    public function delete(Medication $medication)
    {
        $medication=MedicationService::dalete($medication);
        $response = Helpers::createSuccessResponse($medication);

        return response()->json($response);
    }




}
