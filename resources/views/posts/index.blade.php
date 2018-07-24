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
            @if($post->user)
            <p class="blog-post-meta">January 1, 2014 by <a href="{{'/users/'. $post->user->id}}">{{$post->user->name}}</a></p>
            @endif
            {{ $post->body}} -->
        </div>
    @endforeach

    

    <nav class="blog-pagination">
       <a class="btn btn-outline-{{ $posts->currentPage() == 1 ? 'secondary disabled' : 'primary' }}"
       href="{{ $posts->previousPageUrl() }}">Previous</a>
       <a class="btn btn-outline-{{ $posts->hasMorePages() ? 'primary' : 'secondary disabled' }}"
       href="{{ $posts->nextPageUrl() }}">Next</a>
       Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}
   </nav>


   
    

@endsection
