@extends('layouts.master')

@section('content')
    @if(auth()->check())
    <a href="{{route('create-post')}}" >
    <button class = "btn bnt-primary">Create post</button>
    </a>
    @endif
    @foreach($posts as $post)
        <div class="blog-post">
            <a href="{{'/posts/'.$post->id}}" >
            <h2 class="blog-post-title">{{$post->title}}</h2>
            </a>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">{{$post->user->name}}</a></p>

            {{ $post->body}}
        </div><!-- /.blog-post -->
    @endforeach

@endsection('content')
