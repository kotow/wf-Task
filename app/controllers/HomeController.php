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

	public function showEmployees($id=null)
	{
        if(!$id) {
            $results = DB::select('select * from employee');
        } else{
            $results = DB::select('select * from employee WHERE id='.$id);
        }
		return View::make('hello', ['results' => $results]);
	}

}
