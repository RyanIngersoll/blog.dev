@extends('layouts.master')

<style type="text/css"> 

          .jumbotron {
              padding: 30px;
              margin-bottom: 30px;
              color: white;
              background-color: black;

              /*background-image: url(img/bitcoin_conversion.jpeg);*/
              }

          .container .jumbotron {
              border-radius: 100px;
              }

            .button .jumbotron{
                  margin: 0;
                  font: inherit;
                  color: black;
                  }
        </style>

                <!-- Post Content -->
                @section('content')
                	<h1>The Heisenberg Principle</h1>
                	<!-- <img class="gekko" src="300px-Walter_White2.jpg" alt="wall street"> -->
                <!-- Author -->
	                <p class="lead">
	                    by <a href="http://www.savewalterwhite.com/">Walter White</a>
	                </p>

	                <img class="gekko" src="300px-Walter_White2.jpg" alt="wall street">
	                


					@foreach ($posts as $post)
						

					    <h3>Post: {{ $post->id }} <span class="glyphicon glyphicon-time"></span> {{ $post->created_at->format(Post::DATE_FORMAT) }} </h4>
					     

				<div class="container">
			        <div class="row">
			          <div class="col-md-8 col-md-8">

			            <div class="jumbotron">
					    <h2> {{ $post->title }} </h2>

					    <h4>W.W.--  {{ $post->body }}</h4></jumbotron>

					    {{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }}

					    	
                            <textarea class="form-control" input type="textarea" name="comment" id="comment" placeholder="comment" value="{{{ Input::old('comment') }}}"></textarea>

                            {{$errors->first('comment', '<span class="help-block">:message</span>')}}

                        <p>{{{""}}}</p>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {{ Form::close() }} 

					    </div>
					 </div>
				  </div>
				</div>
					    
					    <p><span class="glyphicon glyphicon-time"></span>-- last updated {{ $post->updated_at->format(Post::DATE_FORMAT)}}-- <button><a href="{{{action('PostsController@edit', $post->id)}}}">Edit/Delete</a></button></p>

				<!-- Blog Comments -->

                <!-- Comments Form -->
                <!-- <div class="well"> -->
                    <!-- <h4>Leave a Comment:</h4> -->
                    
                <!-- </div> -->

					    

					@endforeach
					{{ $posts->links() }}

					@stop

@section('bottom-script')
	// <script type="text/javascript">
	// $("#delete-form").submit(function(e) {
	// 	if (!confirm('are u sure you want to delete this post?')){
	// 		event.preventDefault();
	// 	}
	// });
	// </script>

@stop



