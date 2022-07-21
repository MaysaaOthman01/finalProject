<?php

use App\Modules\Medication\Controllers\MedicationController;
use Illuminate\Support\Facades\Route;

Route::post('medications',[MedicationController::class,'store']);
Route::put('medications/{medication}',[MedicationController::class,'update']);
Route::delete('medications/{medication}',[MedicationController::class,'delete']);
Route::get('medications',[MedicationController::class,'index']);
