<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});



Route::get('/sayhello/{name}/{day}', function($name, $day)
{
    if ($name == "Chris") {
        return Redirect::to('http://codeup.com');
    } else {
        $data = [
        	'name' => $name,
        	'day' => $day
		];
        return View::make('my-first-view')->with($data);
    }
});

Route::get('/rolldice/{guess}', function($guess)
{
	$num = mt_rand(1,6);
		

	if($guess == 1){
		$data = [
			'guess' => $guess,
			'num'	=> $num

		];

		return View::make('dice')->with($data);
	}

	else{
		return Redirect::to('http://codeup.com');
	}
    
});

Route::get('/espn', function()
{
	
	$homescore = mt_rand(0, 48);
	$visitorscore = mt_rand(0, 48);

			$data =[
				
				'homescore' => $homescore,
				'visitorscore' => $visitorscore
			];


		return View::make('espn')->with($data);
	
	

});



Route::get('/hello-codeup/{student}/{day}', function($student, $day)
{
    
        $data = [
        	'student' => $student,
        	'day' => $day
		];
        return View::make('hello-codeup')->with($data);
    
});

Route::get('/show/{sport}/{team}', function($sport, $team)
{
    
        $data = [
        	'sport' => $sport,
        	'team' => $team
		];
        return View::make('show')->with($data);
    
});

Route::get('/hello', 'HomeController@showWelcome');


Route::get('/hello-codeup/{name}', 'HomeController@sayHello');


Route::get('/myResumePage', 'HomeController@showResume');


Route::get('/myPortfolioPage', 'HomeController@showPortfolio');

Route::get('orm-test', function ()
{
//     $post1 = new Post();
// $post1->title = 'Eloquent is awesome!';
// $post1->body  = 'It is super easy to create a new post.';
// $post1->save();

// $post2 = new Post();
// $post2->title = 'Post number two';
// $post2->body  = 'The body for post number two.';
// $post2->save();
  //   $posts = Post::all();
		// return $posts;

	// $post = Post::find(1);
	// return $post;
	// $post = Post::find(3);
	// $post->title = "What happened to Johnny Football?";
	// $post->body = "He has disappeared from the world, unless you like snickers.";
	// $post->save();
	// return $post;
	$comment1 = new Comment();
	$comment1->body = "My mom wouldn't know walter white if he bit her in the rear";
	$comment1->save();

	$comment2 = new Comment();
	$comment2->body = "My mom wouldn't know walter white if he bit her in the rear";
	$comment2->save();

	$comments = Comment::all();

	return $comments;
});

Route::resource('addComment/{post}', 'PostsController@addComment');
Route::resource('posts', 'PostsController');












