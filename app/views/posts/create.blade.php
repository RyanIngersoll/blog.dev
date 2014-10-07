@extends('layouts.master')

@section('title')
@stop

@section('top-script')

@stop


@section('bottom-script')
@stop

@section('content')

<h1>form to create a post</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

 <div class="col-xs-6 col-md-4">
            <form method="POST" action="{{{ action('PostsController@store') }}}" class= "form-horizontal">

                <label for="name">Post Number: </label>
                <input type="text" name="name" id="name"placeholder="post number" value="{{{ Input::old('name') }}}" class= "form-control"> <br>
                {{$errors->first('name', '<span class="help-block">:message</span>')}}

               <label for="title">title: </label>
               <input type="text" name="title" id="title"placeholder="title" value="{{{ Input::old('title') }}}" class= "form-control"> <br>
                {{$errors->first('title', '<span class="help-block">:message</span>')}}

               <label for="body">body: </label>
               <textarea rows = "10" input type="textarea" name="body" id="body"placeholder="body" value="{{{ Input::old('body') }}}" class= "form-control"></textarea>
                {{$errors->first('body', '<span class="help-block">:message</span>')}}

                <h2><input type="submit" value="submit!!"></h2>
                <!-- <textarea rows="3"></textarea> -->
            </form> 
        </div>








			
	


@stop