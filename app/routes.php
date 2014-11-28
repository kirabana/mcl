<?php

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/recipes', 'PagesController@recipes');

Route::get('/contact', 'PagesController@contact');

Route::get('/register', 'PagesController@register');


Route::get('/retrieve', 'PagesController@retrieve');

Route::get('/entry', 'PagesController@entry');

Route::get('/adminlogin', 'PagesController@adminlogin');

Route::get('/editcategory', 'PagesController@editcategory');

Route::get('/editentryform', 'PagesController@editentryform');

Route::get('/editentry', 'PagesController@editentry');

Route::get('/users', 'PagesController@users');

Route::resource('users', 'UsersController');

Route::get('/userpage', 'PagesController@userpage');


Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

// Route::get('userlogin', function()
// {
// 	return 'Admin Page';
// });

