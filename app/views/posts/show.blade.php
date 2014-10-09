@extends('layouts.master')

@section('title')
@stop

@section('top-script')

@stop


@section('bottom-script')
@stop

@section('content')

<h1>form to show a post</h1>

<!-- $posts = Post::all();
return $posts; -->

<h2> {{{ $posts->title }}} </h2>


  <p> posted by W.W. at {{{ $post->created_at->format(Post::DATE_FORMAT) }}} </p>

@stop