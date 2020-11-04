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

Auth::routes();

/*Route::get('index','PostController@index');*/
Route::get('{any}', 'AppController@index')
    ->where('any', '.*')
    ->middleware('auth')
    ->name('home');

Route::get('/logout-manual', function(){
    request()->session()->invalidate();
});