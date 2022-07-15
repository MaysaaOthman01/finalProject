<?php


namespace App\Modules\Likes\Controller;


use App\Helpers\Helpers;
use App\Modules\Likes\Models\Like;
use App\Modules\Likes\Request\StoreLike;
use App\Modules\Likes\Service\ServiceLike;

class LikeController
{
public function index(){
    $like = ServiceLike::index();
    $request=Helpers::createSuccessResponse($like);
    return response()->json($request);

}
public function store(StoreLike $like){
    $likes = ServiceLike::store($like->validated());
   $response=Helpers::createSuccessResponse($likes);
   return response()->json($response);


    }
    public function delete(Like $like){
    $like = ServiceLike::delete($like);
    $response=Helpers::createSuccessResponse($like);
    return $response()->json($response);

}
}

