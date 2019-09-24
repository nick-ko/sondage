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
    return view('front.home');
});

Route::get('/backend', function () {
    return view('back.login');
});

Route::get('/sondage', [
    'uses'=>'SondageController@index',
    'as'=>'sondage'
]);

Route::get('/thank-you', [
    'uses'=>'SondageController@thank',
    'as'=>'thank'
]);

Route::post('/do-sondage', [
    'uses'=>'SondageController@store'
]);

Route::post('/login', [
    'uses'=>'AdminController@login'
]);
Route::get('/logout', [
    'uses'=>'AdminController@logout',
    'as'=>'logout'
]);
Route::get('/dashboard', [
    'uses'=>'AdminController@index',
    'as'=>'dashboard'
]);

Route::get('/dashboard/stats', [
    'uses'=>'SondageController@show',
    'as'=>'stats'
]);

Route::get('/dashboard/sondage', [
    'uses'=>'SondageController@sondage',
    'as'=>'back-sondage'
]);
