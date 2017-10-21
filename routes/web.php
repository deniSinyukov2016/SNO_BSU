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
Route::get('news', 'PostController@index' );
Route::get('news/{slug}', ['as' => 'news.single' , 'uses' => 'PostController@getSingle']);
Route::get('news/{news}', 'PostController@update')->name('news.update');
//Route::get('/news/{id}', 'PostController@show')->name('news.show');
Route::get('/contacts', 'MainController@index' );
Route::get('/resources', 'MainController@index' );
Route::get('/structure', 'MainController@index' );


//Пути к рубрикам и подрубрикам
Route::get('topic', ['as' => 'topic.index', 'uses' => 'TermController@index'] );
Route::get('topic/{alias}', ['as' => 'topic.alias', 'uses' => 'TermController@alias'])
    ->where('alias','[\w\d\-\_]+');//исключаем все символы кроме букв, цифр, -, _


//Route::get('/news', 'PostController@index');

Route::resource('news', 'PostController');


//if(Gate::denies('view-admin')) {
//    return "dont";
//}