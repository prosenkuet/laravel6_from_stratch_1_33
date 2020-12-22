<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::get('/article', 'ArticleController@index')->name('article.index');
Route::post('/article', 'ArticleController@store');
Route::get('/article/create', 'ArticleController@create');
Route::get('/article/{article}', 'ArticleController@show')->name('article.show');
Route::get('/article/{article}/edit', 'ArticleController@edit');
Route::put('/article/{article}', 'ArticleController@update');

Route::get('/post/{post}', 'PostsController@show');
