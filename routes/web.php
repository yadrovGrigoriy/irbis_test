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


Route::post('email', 'InviteController@emailSend');
Route::get('activate/{invite}', 'InviteController@handleInvite');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/edit/{id}', 'UserController@edit');
Route::post('/update', 'UserController@update');