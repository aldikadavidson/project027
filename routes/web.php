<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/ujian', 'UjianController@index');
Route::get('/ujian/create', 'UjianController@create');
Route::get('/ujian/store', 'UjianController@store');
Route::post('/ujian', 'UjianController@store');