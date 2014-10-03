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

Route::get('/myResumePage', function()
{
    return "This is my resume!";
});

Route::get('/myPortfolioPage', function()
{
    return "This is my portfolio!";
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



















