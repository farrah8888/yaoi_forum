<?php

class HomeController extends BaseController {


	protected $layout = '_layouts.default';

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

	public function index()
	{
		//return View::make('index');
		//return  View::make('index', array(
      	 //'posts' => Post::all() ));

		 $this->layout->content = View::make('index', array(
      	 'posts' => Post::all() ));

	}




	


}