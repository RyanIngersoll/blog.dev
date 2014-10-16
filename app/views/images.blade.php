@extends('layouts.master')


{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal', 'files' => true )) }}

	@include('posts.form')
  
  {{ Form::label('image','File',array('class'=>'')) }}
  {{ Form::file('image','',array('class'=> 'form-control')) }}
  <br/>
  <!-- submit buttons -->
  {{ Form::submit('Save') }}
  
  <!-- reset buttons -->
  {{ Form::reset('Reset') }}
  
  {{ Form::close() }}