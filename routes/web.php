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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post', 'PostController@index')->name('post');
//insertpost
Route::get('post', 'PostController@insertpost')->name('post');
//insert
//Route::post('create', 'PostController@insert')->name('post');
Route::post('/post', 'PostController@insert')->name('post');
//view post
Route::get('post','PostController@OwnPostings')->name('post');
Route::get('/home', 'PostController@AllPost')->name('home');
//delete post
//Route::get('delete/{id}', 'PostController@delete')->name('post');
Route::get('delete/{id}', 'PostController@delete')->name('post');
//edit
Route::post('edit/{id}', 'PostController@edit')->name('edit');

