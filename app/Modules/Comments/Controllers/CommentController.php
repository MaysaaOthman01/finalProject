<?php


namespace App\Modules\Comments\Controllers;


use App\Helpers\Helpers;
use App\Modules\Comments\Models\Comment;
use App\Modules\Comments\Requests\StoreCommentRequest;
use App\Modules\Comments\Requests\UpdateCommentRequest;
use App\Modules\Comments\Services\CommentsService;
use App\Modules\Posts\Requests\StorePostRequest;

class CommentController
{
public function index(){
    $comments =CommentsService::index();
    $response = Helpers::createSuccessResponse($comments);
    return response()->json($response);

}

public function store(StoreCommentRequest $request){


    $comments =CommentsService::store($request->validated());
    $response = Helpers::createSuccessResponse($comments);
    return response()->json($response);
}

public function update(Comment $comment, UpdateCommentRequest $request){

    $comment =CommentsService::update($comment, $request->validated());
    $response = Helpers::createSuccessResponse($comment);
    return response()->json($response);
}

public function delete(Comment $comment){

    $comment =CommentsService::delete($comment);
    $response = Helpers::createSuccessResponse($comment);
    return response()->json($response);
}


}
