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

Route::get('/', [
    'as' => 'root_path',
    'uses' => 'PagesController@home'
]);

Route::get('/about', 'PagesController@about')->name('about_path');

Route::get('/contact', 'ContactController@create')->name('contact_path');

Route::post('/contact', 'ContactController@store')->name('contact_path');



Auth::routes();

Route::get('/steam', 'Auth\RegisterController@createsteam')->name('steam_path');

Route::get('/gestion', 'AdminController@gestion')->name('gestion_path');

Route::get('/index', 'AdminController@index')->name('index_path');


