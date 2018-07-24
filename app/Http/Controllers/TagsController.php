<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function showPostWithTag($name)
    {
        
        $tagModel = Tag::whereName($name)->first();
        $posts = $tagModel->posts()->paginate(10);
        return view('posts.index', compact('posts'));
    }
}
