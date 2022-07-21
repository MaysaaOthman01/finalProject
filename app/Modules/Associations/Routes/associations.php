<?php

use App\Modules\Associations\Controllers\AssociationController;
use Illuminate\Support\Facades\Route;

Route::post('associations',[AssociationController::class,'store']);
Route::put('associations/{association}',[AssociationController::class,'update']);
Route::delete('associations/{association}',[AssociationController::class,'delete']);
Route::get('associations',[AssociationController::class,'index']);
