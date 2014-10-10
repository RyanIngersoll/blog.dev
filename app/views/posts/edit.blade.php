@extends('layouts.master')

@section('content')

<h1>post editor</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

 <div class="col-md-6 col-md-10">
            {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

@include('posts.form')

            <div class= "form-group">
              <div class= 'col-md-8 col-md 10'>
              	<p>{{{""}}}</p>
                {{ Form::submit('Edit Post', array('class' => 'btn btn-primary')) }}

              </div>
            </div>

             {{ Form::close() }} 

             {{ Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]]) }}

             	<button type="submit">Delete</button>

             {{ Form::close() }} 
          
</div>
@stop 