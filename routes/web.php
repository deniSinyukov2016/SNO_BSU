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

Route::get('/', 'MainController@index');

//Route::resource('posts', 'PostController');

Auth::routes();
//Route::get('/news', 'PostController@index' );
Route::get('/contacts', 'MainController@index' );
Route::get('/resources', 'MainController@index' );
Route::get('/structure', 'MainController@index' );
//Route::get('/news', 'PostController@index');

Route::resource('news', 'PostController');


//if(Gate::denies('view-admin')) {
//    return "dont";
//}