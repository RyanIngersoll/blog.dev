@extends('layouts.master')

@section('content')

<h1>Post Manager</h1>

@foreach ($posts as $post)

	<h3>Post: {{ $post->title }} <span class="glyphicon glyphicon-time"></span> {{ $post->created_at->format(Post::DATE_FORMAT) }} </h3>
	<button><a href="{{{action('PostsController@edit', $post->id)}}}">Edit/Delete</a></button></p>

@endforeach
{{ $posts->links() }}

@stop