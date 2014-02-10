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

Route::get('/users', array('before' => 'old', function() {
	//$users = User::all();
	$users = DB::table('users')->where('id', '1')->get();
	return View::make('users')->with('users', $users);
}));

Route::get('/create', function(){
	return View::make('create');
});

Route::post('/create/save', function() {
	$input = Input::all();
	
	$id = DB::table('article')->insertGetId($input);
	return Response::json(array('status' => '200', 'id' => $id));
	//return $input::get('name');
});

Route::get('/article/list', function() {
	$articles = DB::table('article')->get();
	return View::make('articlelist')->with('articles', $articles);
});