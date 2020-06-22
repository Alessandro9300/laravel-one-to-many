<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'belController@index' ) -> name('home');
Route::get('/name/{id}', 'belController@show') -> name('employee');
Route::get('/task/{id}', 'belController@showTask') -> name('task');
Route::get('/update/{id}', 'belController@update') -> name('update');
Route::post('/update_store/{id}', 'belController@updateStore') -> name('update_store');
