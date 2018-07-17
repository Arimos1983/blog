<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), [ 
            "author"=>"required",
            "text"=>"required"
        ]);

        $post->comments()->create([
            'author' =>request ('author'),
            'text' => request ('text'),
            'post_id' => $post->id
        ]);

        return redirect('/posts/'.$post->id);
    }
}
