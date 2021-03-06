<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/test', 'PagesController@test');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'Questo utente è '.$name.' ed il suo id è '.$id;
});