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

Route::get('/', function () {
    return view('welcome');
});
Route::get('create',function(){
	return view('/books/create');
});
Route::get('proba',function(){
	return view('/books/proba');
});
Route::get('admin',function(){
	return view('/books/administration');
});
Route::get('about', function(){
	return view('/books/about');
});
Route::resource('books','BookController');
Route::resource('users','UserController');
Route::resource('orders','OrderController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


