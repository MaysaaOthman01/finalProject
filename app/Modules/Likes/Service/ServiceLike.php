<?php


namespace App\Modules\Likes\Service;


use App\Modules\Likes\Models\Like;

class ServiceLike
{
public static function index()
{
    return Like::all();
}

public static function store($data) {
    return Like::query()->create($data);
}
public static function delete(Like $like){
    $like->delete();
   return $like;

}
}
