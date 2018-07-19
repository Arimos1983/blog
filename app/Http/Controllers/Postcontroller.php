<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index','show']]);
    }
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id);
        return view('posts.show', compact('post'));

    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        $this->validate(request(), [ 
            "title"=>"required",
            "body"=>"required"
        ]);

       /* $post = new Post();

        $post->title = request('title');
        $post->body = request('body');
        $post->published = request('published');
        $post->save();  */


        Post::create(
            [
                "title" => request('title'),
                "body" => request('body'),
                "published" => (bool)request('published'),
                "user_id" => auth()->user()->id
            ]
            );

        return redirect('/posts');
    }

}
