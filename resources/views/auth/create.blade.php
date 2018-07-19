@extends('layouts.master')

@section('title')

        Register

@endsection('content')


@section('content')

        <form action="/register" method="POST">

            {{ csrf_field() }}

            

            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" >
                @include("partials.error-message", ["fieldName" => "name"])
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" >
                @include("partials.error-message", ["fieldName" => "email"])
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" >
                @include("partials.error-message", ["fieldName" => "password"])
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



@endsection