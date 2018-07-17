@extends('layouts.master')

@section('content')
    <a href="{{route("create-post")}}" >
    <button class = "btn bnt-primary">Create post</button>
    </a>
    @foreach($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            {{ $post->body}}
        </div><!-- /.blog-post -->
    @endforeach

@endsection('content')
