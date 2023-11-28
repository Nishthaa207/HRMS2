<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\VacancyController;


Route::get('laravel_default', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('profile', function () {
    return view('profile');
});

Route::get('index', function () {
    return view('sample-index');
});
Route::resource('vacancy', 'VacancyController');