<?php


namespace App\Modules\Posts\Services;


use App\Modules\Posts\Models\Post;

class PostService
{
    public static function index()
    {
        return Post::all();
    }
    public static function show($id){
        $post = Post::query()->find($id);
        return $post;
    }
    public static function create($data)
    {
        return Post::query()->create($data);
    }

    public static function update(Post $post, $newData)
    {
        $post->update($newData);
        return $post;
    }

    public static function delete(Post $post)
    {
        $post->delete();
        return $post;
    }
}
