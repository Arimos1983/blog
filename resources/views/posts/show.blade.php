
@extends('layouts.master')

@section('content')
<!-- <div>
    {{$post->title}}
</div>
<div>
    {{$post->body}}
</div> -->


<div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            @if(count($post->tags))
                <ul class="list-unstyled">
                    @foreach ($post->tags as $tag)
                        <li>
                          <a href ="/posts/tags/{{$tag->name}}">{{$tag->name}} </a>
                        </li>
                    @endforeach
                </ul>
            @endif
            <p class="blog-post-meta">January 1, 2014 by <a href="{{'/users/'.$post->user->id}}">{{$post->user->name}}</a></p>

                {{ $post->body}}<br><hr>

            @foreach($post->comments as $comment)
                {{$comment->author}}<br>
                {{$comment->text}}<br>

            @endforeach
            
</div><!-- /.blog-post -->

<h4>Post comment.</h4>
<form method="POST" action="{{ '/posts/'.$post->id.'/comments' }}">
    {{ csrf_field() }}
    <div>
        <label for="author">Author</label>
        <input name="author" type="text" class="form-control" id="author" >
    </div>
    <div>
        <label for="text">Comment</label>
        <textarea name="text" class="form-control" id="text"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection 