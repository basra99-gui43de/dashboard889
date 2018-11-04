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
    return view('welcome');
});
Route::get('/guide', 'guide@index');
Route::get('marketing', 'marketing@index');
Route::get('jobs', 'jobs@index');
Route::get('works', 'works@index');

Route::get('phones', 'phones@index');

Route::get('users/{id}', function ($id) {
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
