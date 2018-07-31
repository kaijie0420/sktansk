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
    return view('landing');
});

Route::get('/about', function() {
	return view('about');
});

Route::get('/book', 'TitleController@index');

/*
Route::get('/book/{title}', function () {
	return view('title');
});*/

Route::get('/book/{title}', 'TitleController@getTitleContent');
Route::get('/topic', 'TopicController@index');
Route::get('/topic/{title}', 'TopicController@getTopicContent');
Route::get('/news', 'NewsController@index');
Route::get('/news/{title}', 'NewsController@getNewsContent');
Route::get('/video', function() {
	return view('video');
});

Route::get('/login', 'HomeController@dashboard');
Route::get('/dashboard', 'HomeController@dashboard');
