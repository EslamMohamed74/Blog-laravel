<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use  App\Http\Resources\PostResource;
use App\Http\Requests\StorePost;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::with('user')->paginate(2));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return new PostResource($post);
    }


    function store(StorePost $request)
    {   
        
        Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'user_id' => $request->user()->id
        ]);
    }
}
