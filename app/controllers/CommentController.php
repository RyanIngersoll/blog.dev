<?php

class CommentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()

	{
		//return " index () this displays a list of all posts";
		$comment = Comment::paginate(4);
		//$posts = Post::all();
		return View::make('comment.index')->with('comment', $comment);
	}



}