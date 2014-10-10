<?php

class CommentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()

	{
		//return " index () this displays a list of all posts";
		$comments = Comment::paginate(4);
		//$posts = Post::all();
		return View::make('comments.index')->with('comments', $comments);
	}



}