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
Route::get('/','pagecontroller@index')->name('home');
Route::get('/signup','RegisterController@create')->name('signup');
Route::post('/user/submit/','RegisterController@store')->name('userregister');
Route::get('/login','LoginController@getloginpage')->name('getloginpage');
Route::post('/login/submit','LoginController@login')->name('login');

Route::get('/playlist','songcontroller@getplaylist')->name('getplaylist');
Route::get('/playlist/create','songcontroller@addplaylist')->name('addplaylist');
Route::get('/playlist/song','songcontroller@addsong')->name('addsong');
Route::post('/playlist/create/submit','songcontroller@playlist_store')->name('playlist_store');
Route::post('/playlist/song/submit','songcontroller@song_store')->name('song_store');
Route::get('/playlist/song/list','songcontroller@getsong')->name('getsong');

Route::get('/playlist/delete/{id}','songcontroller@playlist_delete')->name('playlist_delete');
Route::post('/playlist/update','songcontroller@playlist_update')->name('playlist_update');
Route::get('/playlist/updatepage','songcontroller@getupdate')->name('getupdate');
