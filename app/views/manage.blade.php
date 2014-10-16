@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
@stop

@section('content')

<h1>Post Manager</h1>

@foreach ($posts as $post)

	<h3>Post: {{ $post->title }} <span class="glyphicon glyphicon-time"></span> {{ $post->created_at->format(Post::DATE_FORMAT) }} </h3>
	<button><a href="{{{action('PostsController@edit', $post->id)}}}">Edit/Delete</a></button></p>

	{{ link_to_action('PostsController@edit', 'Edit', $post->id, array('class' => 'btn btn-default')) }}
	<button type="button" class="btn btn-danger delete-btn" data-post-id="{{{ $post->id }}}">Delete</button>

@endforeach
{{ $posts->links() }}
@stop

@section('bottom-script')
	<script>
    var csrfToken = "{{{ Session::get('_token') }}}";
    
    $(".delete-btn").click(function() {
        var postId = $(this).data('post-id');
 
        if (confirm('Are you sure you want to delete this post?')) {
            $.ajax({
                url: '/posts/' + postId,
                type: 'post',
                data: {
                    _token: csrfToken,
                    _method: 'delete'
                },
                success: function(data) {
                    // Alert success
                }
            });
        }
    });
</script>
@stop



