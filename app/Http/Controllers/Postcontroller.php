<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Tag;

class Postcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index','show']]);
    }
    public function index()
    {
        $posts = Post::with('user')->latest()->paginate(10);
        return view('posts.index', ['posts'=> $posts]);
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id);
        return view('posts.show', compact('post'));

    }

    public function create()
    {
        $tags = Tag::all();
        return view('posts.create', compact('tags'));
    }

    public function store()
    {

        $this->validate(request(), [ 
            "title"=>"required",
            "body"=>"required",
            "tags"=>"required|array"
        ]);

       /* $post = new Post();

        $post->title = request('title');
        $post->body = request('body');
        $post->published = request('published');
        $post->save();  */


        $post = Post::create(
            [
                "title" => request('title'),
                "body" => request('body'),
                "published" => (bool)request('published'),
                "user_id" => auth()->user()->id
                
            ]
            );

        $post->tags()->attach(request('tags'));

        return redirect('/posts');
    }

}
