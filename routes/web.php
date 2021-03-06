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



Route::get('/','HomeController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('series','SeriesController');
Route::get('series/{series}/episode/{episode_id}','SeriesController@episode')->name('series.episode');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
