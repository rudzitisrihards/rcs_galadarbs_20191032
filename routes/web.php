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
    return view('home');
});

Route::get('/album', function () {
    return view('album');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/albumpage', function () {
    return view('albumpage');
});

Route::post('/submitContact', 'ContactsController@submit');
