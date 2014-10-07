@extends('layouts.master')



                <!-- Post Content -->
                @section('content')
                	<h1>Crazy AZZ blog posts</h1>
                	<img class="gekko" src="bluecomputercode2.gif" alt="wall street">
                <!-- Author -->
	                <p class="lead">
	                    by <a href="https://www.linkedin.com/profile/view?id=49609689&trk=nav_responsive_tab_profile">Ryan Ingersoll</a>
	                </p>

					@foreach ($posts as $post)
					    <em><p class="lead">post: {{ $post->id }} </p></em>
					     <p><span class="glyphicon glyphicon-time"></span> created: {{ $post->created_at }} last updated {{ $post->updated_at }}</p>

					    <h2>title: {{ $post->title }}</h2>
					    <h3>random response: {{ $post->body }}</h3>
					@endforeach


					@stop
