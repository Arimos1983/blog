@extends('layouts.master')

@section('content')



<div class="blog-post">

    <h4>All posts by user: {{$user->name}} </h4>
    @foreach($user->posts as $post)
    <a href="{{'/posts/'.$post->id}}">
    <h3>{{$post->title}}</h3><br>
    </a>
        {{$post->body}}<br>

    @endforeach
            
</div><!-- /.blog-post -->


@endsection 