<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    function index () 
    {
        return view('posts.index',[
            'posts' => Post::paginate(2)
        ]);
    }
    function create()
    {
        return view('posts.create');
    }

    function store()
    {     
        Post::create([
            'title' => request()->title,
            'description' => request()->description
        ]);
        return redirect()->route('posts.index');
    }

    function show($post)
    {
        $posts = Post::all();
        $post = $posts->find($post);
        return view('posts.show',['post' => $post]);  
    }

    function edit($post)
    {
        $posts = Post::all();
        $post = $posts->find($post);
        return view('posts.edit',['post' => $post]);  
    }

    function update($post)
    {
        Post::where('id', $post)
        ->update(array('title' => request()->title,
        'description' => request()->description));
        return redirect()->route('posts.index');
    }

    function destroy($post)
    {
        Post::where('id', $post)
        ->delete();
        return redirect()->route('posts.index');
    }
}
