@extends('layouts.master')

@section('title')

        Create post

@endsection('content')


@section('content')

        <form action="/posts" method="POST">

            {{ csrf_field() }}

            

            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" >
                @include("partials.error-message", ["fieldName" => "title"])
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control" id="body"></textarea>
                @include("partials.error-message", ["fieldName" => "body"])
                
                
            </div>
            <div class="form-group form-check">
                <input name="published" value="1" type="checkbox" class="form-check-input" id="published">
                <label class="form-check-label" for="published">Published</label>
            </div>
            @if (count($tags))

                <div>
                    <label for='tags'>
                    tags
                    </lable>
                    @foreach($tags as $tag)
                    <input type='checkbox' class='form-control' id='tag' name='tags[]' value='{{$tag->id}}' >
                        {{$tag->name}}
                    @endforeach
                </div>

            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



@endsection