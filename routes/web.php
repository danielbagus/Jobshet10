<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view ('homeAwal');
});

Route::get('/hello', function(){
	return 'Hello World';
});

Route::get('/about', function(){
	return view ('AboutController', ['NIM' => '1931710156'], ['name' => 'Daniel Bagus Christyanto']);
});

Route::get('/articless/{id}', function($id){
	return 'Halaman artikel dengan id '.$id;
});

Route::get('/post', function () {
 	return view('postAwal');
 	});

Route::get('/', 'HomeController@welcome');

//Route::get'/manage', 'ArticleController@index'->name('manage');

//Route::get('/hello' 'PageController@hello');

//Auth::routes();
//Route::get('/', 'HomeController@index')=>name('home');