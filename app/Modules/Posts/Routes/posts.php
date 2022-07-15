<?php

use App\Modules\Posts\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('posts',[PostController::class, 'index']);
Route::post('posts',[PostController::class, 'store']);
Route::put('posts/{post}',[PostController::class, 'update']);
Route::delete('posts/{post}',[PostController::class, 'delete']);
