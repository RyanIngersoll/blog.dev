@extends('layouts.master')

@section('content')

<h1>post editor</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

 <div class="col-xs-6 col-md-4">
            {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

@include('posts.form')

            <div class= "form-group">
              <div class= 'col-sm-offset-2 col-sm 10'>
                {{ Form::submit('Edit Post', array('class' => 'btn btn-primary')) }}
              </div>
            </div>

             {{ Form::close() }} 
@stop           

