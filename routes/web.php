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


Route::get('/', 'WelcomeController@returnwelcome')->name('welcome');
Route::get('/home', 'HomeController@returnHomePage')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'], function () {

    // menu route
    Route::get('/menu/add', 'MenuController@create')->name('menu.add');
    Route::get('/menu/edit/{id}', 'MenuController@edit')->name('menu.edit');
    Route::get('/menu/confirm/{id}', 'MenuController@confirm')->name('menu.confirm');
    Route::get('/menu/delete/{id}', 'MenuController@destroy')->name('menu.delete');
    Route::get('/menu/view', 'MenuController@create_view_all')->name('menu.view');
    Route::post('/menu/store', 'MenuController@store')->name('menu.store');
    Route::post('/menu/update/{id}', 'MenuController@update')->name('menu.update');


});