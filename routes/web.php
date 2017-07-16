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
Route::get('/visu4','RenderController@visu4')->name('visu4');
Route::get('/visu5','RenderController@visu5')->name('visu5');
Route::get('/visu6','RenderController@visu6')->name('visu6');
Route::get('/ask','AskController@getAsk')->name('ask');
Route::post('/ask','AskController@postAsk');
Route::get('/information','RenderController@clientInformation');

Auth::routes();
