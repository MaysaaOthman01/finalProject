<?php

use App\Modules\Comments\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('comments',[CommentController::class,'index']);
Route::post('comments',[CommentController::class,'store']);
Route::put('comments/{comment}',[CommentController::class,'update']);
Route::delete('comments/{comment}',[CommentController::class,'delete']);

