<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});


// User
Route::middleware(['admin'])->group(function () {	
	Route::get('/user/create','UserController@create');   
	Route::get('/user/{id}/edit','UserController@edit');
	Route::post('/user','UserController@store');
	Route::patch('/user/{id}','UserController@update');
	Route::get('/user/{id}/destroy','UserController@destroy');
});

Route::middleware(['auth'])->group(function () {
	Route::get('/user','UserController@index');
	Route::get('/user/{id}','UserController@show');
});


//Route::delete('/user/{id}/destroy','UserController@destroy'); 
//How using delete : form & {{ method_field('delete') }s} & {{ csrf_field() }}


// Board
Route::middleware(['admin'])->group(function () {	
	Route::get('/board/create','BoardController@create');   
	Route::get('/board/{id}/edit','BoardController@edit');
	Route::post('/board','BoardController@store');
	Route::patch('/board/{id}','BoardController@update');
	Route::get('/board/{id}/destroy','BoardController@destroy');
});

Route::get('/board','BoardController@index');
Route::get('/board/{id}','BoardController@show');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
