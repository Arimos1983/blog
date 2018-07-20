<?php

namespace App\Http\Controllers;


use App\Comment;
use App\Mail\CommentReceived;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



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

        Mail::to($post->user)->send(new CommentReceived($post));

        return redirect('/posts/'.$post->id);
    }
}
