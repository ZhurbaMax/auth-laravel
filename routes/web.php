<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('/add-comment', 'HomeController@addComment')->name('layout.home');
