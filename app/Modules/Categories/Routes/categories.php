<?php


use App\Modules\Categories\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::post('categories',[CategoriesController::class,'store']);
Route::put('categories/{categories}',[CategoriesController::class,'update']);
Route::delete('categories/{categories}',[CategoriesController::class,'delete']);
Route::get('categories',[CategoriesController::class,'index']);
