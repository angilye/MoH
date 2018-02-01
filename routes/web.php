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


Route::get('/', 'PagesController@home')->name('acceuil_path');



//pages

Route::get('/moh', 'PagesController@moh')->name('root_path');

Route::get('/home', 'PagesController@moh')->name('root_path');

Route::get('/about', 'PagesController@about')->name('about_path');

Route::get('/arma', 'PagesController@arma')->name('arma_path');

Route::get('/warzone', 'PagesController@warzonefr')->name('warzonefr_path');



 //Prise de contact

Route::get('/contact', 'ContactController@create')->name('contactSend_path');

Route::post('/contact', 'ContactController@store')->name('contactSend_path');

Route::get('/ticketWarzone', 'ContactController@createWarzone')->name('ticketSend_path');

Route::post('/ticketWarzone', 'ContactController@storeWarzone')->name('ticketSend_path');



 // Authentification

Auth::routes();

Route::get('/steam', 'Auth\RegisterController@createsteam')->name('steam_path');

 //administration

Route::get('/index', 'AdminController@index')->name('indexAdmin_path');

    //gestionUser dans administration

    Route::resource('user', 'adminUsersController');

    //gestionPages dans administration

    Route::resource('page', 'adminPagesController');

    //gestionContact dans administration

    Route::resource('ticket', 'adminContactController');

    


