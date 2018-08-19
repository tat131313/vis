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

Route::post('deleteComment', 'AdminController@deleteComment')->name('deleteComment');

Route::get('admin', 'AdminController@index')->name('admin');

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::post('pswTrue', 'Auth\LoginController@login')->name('pswTrue');

    Route::get('Page', 'AdminController@showAdminPage')->name('admin/Page');
});
  
