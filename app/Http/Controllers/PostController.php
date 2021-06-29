<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('admin.posts.index', compact('posts')); 
    }

    public function create()
    {
        return view('admin.posts.create'); 
    }

    public function storage(StorageUpdatePost $request)
    {
        $post = Post::create($request->all());
        return redirect()->route('post.index');
    }
}
