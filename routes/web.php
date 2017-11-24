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

Route::get('/', ['as' => 'home', 'uses' => 'MainController@index']);

//Новости
//Route::resource('news', 'PostController'); // реализация стандартных методов
Route::get('news', ['as' => 'news.index', 'uses' => 'PostController@index']); // Главная страница новостей
Route::get('news/{slug}', ['as' => 'news.single' , 'uses' => 'PostController@getSingle']);
//Route::get('news/{news}', 'PostController@update')->name('news.update');

//Контакты
Route::get('/contacts', 'MainController@index' );

//Ресурсы
Route::get('/resources', 'MainController@index' );

//Структура
Route::get('/structure', 'MainController@index' );


//Пути к рубрикам и подрубрикам
Route::get('topic', ['as' => 'topic.index', 'uses' => 'TermController@index'] );
Route::get('topic/{alias}', ['as' => 'topic.alias', 'uses' => 'TermController@alias'])
    ->where('alias','[\w\d\-\_]+');//исключаем все символы кроме букв, цифр, -, _




//if(Gate::denies('view-admin')) {
//    return "dont";
//}