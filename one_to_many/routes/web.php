<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'belController@index' ) -> name('home');
Route::get('/name/{id}', 'belController@show') -> name('employee');
Route::get('/task/{id}', 'belController@showtask') -> name('task');
Route::get('/update/{id}', 'belController@update') -> name('update');
