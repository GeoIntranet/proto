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
    return view('euro.home');
});


Route::get('/home','RenderController@home')->name('home');
Route::get('/visu2','RenderController@visu_')->name('visu2');
Route::get('/visu3','RenderController@visu3')->name('visu3');

Auth::routes();
