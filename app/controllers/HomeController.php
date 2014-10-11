<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function sayHello($name)
{
    $data = array('name' => $name);
    return View::make('hello-codeup')->with($data);
}

	public function showResume()
{
    return View::make('myResumePage');
    
}
public function showGame()
{
    return View::make('game');
    
}
	public function showPortfolio()
{
    return View::make('myPortfolioPage');
    
}

public function showingytrader()
{
    return View::make('/');


}
