@extends('layouts.master')

@section('title')
@stop

@section('top-script')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
@stop


@section('bottom-script')
@stop



@section('content')

<h1>form to create a post</h1>

 <div class="col-xs-6 col-md-4">
            {{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }}
<!-- {{$errors->has('title') ? 'has-error' : '' }} ternary-->
               <label for="title">title: </label>
               <input type="text" name="title" id="title"placeholder="title" value="{{{ Input::old('title') }}}" class= "form-control"> <br>
                {{$errors->first('title', '<span class="help-block">:message</span>')}}

               <label for="body">body: </label>
               <textarea rows = "10" input type="textarea" name="body" id="body"placeholder="body" value="{{{ Input::old('body') }}}" class= "form-control"></textarea>
                {{$errors->first('body', '<span class="help-block">:message</span>')}}

                <h2><input type="submit" value="submit!!"></h2>
                <!-- <textarea rows="3"></textarea> -->
            {{ Form::close() }} 
        </div>

{{--Form::submit('Update Post', array('class' => 'btn btn-primary'))--}}
{{-- @include('posts.form') --}}

<!-- $url = action('HomeController@getIndex', $params); -->



			
	


@stop