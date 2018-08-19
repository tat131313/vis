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

Route::get('/', 'CommentController@index')->name('index');

Route::post('addNewComment', 'CommentController@addNewComment')->name('addNewComment');

Route::get('admin', 'AdminController@index')->name('admin');

Route::match(['get', 'post'], 'login', 'Auth\LoginController@login')->name('login');

Route::group(['middleware' => 'auth'], function () {

    Route::get('adminPage', 'AdminController@showAdminPage')->name('adminPage');

    Route::post('deleteComment', 'AdminController@deleteComment')->name('deleteComment');
});
  
