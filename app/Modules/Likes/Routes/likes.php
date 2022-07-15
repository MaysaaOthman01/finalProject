<?php

use App\Modules\Likes\Controller\LikeController;
use Illuminate\Support\Facades\Route;

Route::get('likes',[LikeController::class,'index']);
Route::post('likes',[LikeController::class,'store']);
Route::delete('likes/{like}',[LikeController::class,'delete']);

