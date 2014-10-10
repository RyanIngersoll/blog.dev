<?php

class PostsController extends \BaseController {

	public function __construct()
{
    // call base controller constructor
    parent::__construct();

    // run auth filter before all methods on this controller except index and show
    $this->beforeFilter('auth.basic', array('except' => array('index', 'show')));
}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()

	{
		//return " index () this displays a list of all posts";
		$posts = Post::paginate(4);
		//$posts = Post::all();
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//return " function - create() show a form for creating the posts";
		return View::make('posts.create');
	}

	// public function addComment($postId)
	// {
	// 	$comment = new Comment();
	// 	return $this->saveComment($comment);
	// 	//return " function - create() show a form for creating the posts";
	// 	// return View::make('posts.comments');
	// }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		return $this->savePost($post);

		//return Redirect::back()->withInput();
		// Post::$rules;
		// $validator = Validator::make(Input::all(), Post::$rules);

		// 	if ($validator->fails()) {

	 //        return Redirect::back()->withInput()->withErrors($validator);

  //   		} else {

  //       $post = new Post();
		// $post->title = Input::get('title');
		// $post->body = Input::get('body');

		// $post->save();
		// return Redirect::action('PostsController@index');

    // }

		

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		if(!$post) {
			Log::info('user got 404 message.');
			App::abort(404);
		}
		
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findorFail($id);

		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		 $post = Post::findorFail($id);
		
		return $this->savePost($post);
	}

	protected function savePost(Post $post) {

		$validator = Validator::make(Input::all(), Post::$rules);

			if ($validator->fails()) {

				$message = 'Comeon, dude. Post must have a title and body.';
				Session::flash('errorMessage', $message);
				Log::error('post validator failed', Input::all());

	        return Redirect::back()->withInput()->withErrors($validator);

    		} else {

		$post->title = Input::get('title');
		$post->body = Input::get('body');

		$post->save();

		$message = 'post is a success!!!';

		Session::flash('successMessage', $message);
		return Redirect::action('PostsController@index');

		//Log::info()
		}
	}

	protected function saveComment(Post $comment) {

		$validator = Validator::make(Input::all(), Post::$rules);

			if ($validator->fails()) {

	        return Redirect::back()->withInput()->withErrors($validator);

    		} else {

		
		$comment->body = Input::get('comment');

		$comment->save();
		return Redirect::action('CommentController@index');

		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);

		if(!$post){
			App::abort(404);
		}

		$post->delete();

		Log::info('post deleted!!!');

		Session::flash('successMessage', 'Post deleted!!!');

		return Redirect::action('PostsController@index');
	}
// GET	/posts	index	Show a list of all posts
// GET	/posts/create	create	Show a form for creating a post
// POST	/posts/{post}	store	Store the new post
// GET	/posts/{post}	show	Show a specific post
// GET	/posts/{post}/edit	edit	Show a form for editing a specific post
// PUT	/posts/{post}	update	Update a specific post
// DELETE	/posts/{post}	destroy	Delete a specific post

}
