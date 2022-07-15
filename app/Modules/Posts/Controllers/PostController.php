<?php


namespace App\Modules\Posts\Controllers;


use App\Helpers\Helpers;
use App\Modules\Posts\Models\Post;
use App\Modules\Posts\Requests\StorePostRequest;
use App\Modules\Posts\Requests\UpdatePostRequest;
use App\Modules\Posts\Services\PostService;

class PostController
{

    public function index()
    {
        // return all posts

        $posts = PostService::index();
        $response = Helpers::createSuccessResponse($posts);
        return response()->json($response);
    }
    public function store(StorePostRequest $request)
    {
        // add one post
        $post = PostService::create($request->validated());
        $response = Helpers::createSuccessResponse($post);
        return response()->json($response);

    }
    public function update(Post $post, UpdatePostRequest $request)
    {
        $post = PostService::update($post, $request->validated());
        $response = Helpers::createSuccessResponse($post);
        return response()->json($response);
    }
    public function delete(Post $post)
    {
        $post = PostService::delete($post);
        $response = Helpers::createSuccessResponse($post);
        return response()->json($response);
    }
}
