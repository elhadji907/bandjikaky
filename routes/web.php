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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/generations/list', 'GenerationsController@list')->name('generations.list');
Route::get('/administrateurs/list', 'AdministrateursController@list')->name('administrateurs.list');
Route::get('/quartiers/list', 'QuartiersController@list')->name('quartiers.list');
Route::get('/membres/list', 'MembresController@list')->name('membres.list');
Route::get('/familles/list', 'FamillesController@list')->name('familles.list');

Route::resource('/administrateurs', 'AdministrateursController');
Route::resource('/generations', 'GenerationsController');
Route::resource('/quartiers', 'QuartiersController');
Route::resource('/membres', 'MembresController');
Route::resource('/familles', 'FamillesController');
