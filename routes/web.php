<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/{id}', 'bookController@view');
Route::get('/books', 'bookController@all');

Route::get('/admin', 'AdminController@index')
->middleware('protected');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
