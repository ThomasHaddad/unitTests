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

//Route::get('/', function()
//{
//	return View::make('hello');
//});
Route::get('/', ['as'=>'home','uses'=>'HomeController@index']);

//Route::get('buy',  ['as'=>'2', 'uses'=>function() {return 'hello';}]);
Route::post('buy', function() {return Redirect::route('home')->withFlashMessage('ok');});
Route::get('file',function(){
   File::put(__DIR__.'/test.txt','macdo macdum');
});

Route::resource('posts','PostController');