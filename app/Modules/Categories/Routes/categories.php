<?php


use App\Modules\Categories\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::post('Categories',[CategoriesController::class,'store']);
Route::put('Categories/{Categories}',[CategoriesController::class,'updata']);
Route::delete('Categories/{Categories}',[CategoriesController::class,'delete']);
Route::get('Categories',[CategoriesController::class,'index']);
