<?php


namespace App\Modules\Comments\Services;


use App\Modules\Comments\Models\Comment;

class CommentsService
{
public static function index(){
    return Comment::all();

}
public static function store($data){
    return Comment::query()->create($data);

}
public static function update(Comment $comment,$newdata){
    $comment->update($newdata);
    return $comment;
}
public static function delete($comment){
    $comment->delete();
    return $comment;

}
}
