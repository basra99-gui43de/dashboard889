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
Route::get('/addcompany/{id}', 'guide@addcompany');
Route::get('/delete_company/{id}/{cat_id}', 'guide@delete_company');
Route::get('/edit_company/{id}/{cat_id}', 'guide@edit_company');
Route::post('/edit_company/{id}', 'guide@edit_company');

Route::post('/addcompany/{id}', 'guide@addcompany');
Route::get('marketing', 'marketing@index');
Route::get('jobs', 'jobs@index');
Route::get('works', 'works@index');

Route::get('phones', 'phones@index');
Route::get('delete_phone/{id}', 'phones@delete');
Route::post('addphones', 'phones@addphones');
Route::get('users/{id}', function ($id) {
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
