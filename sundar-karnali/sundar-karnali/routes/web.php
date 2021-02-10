<?php

use App\Http\Controllers\user\FrontController;
use App\Http\Controllers\user\NewsController;

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

Route::get('/adminlog', 'HomeController@index')->name('admin');

Route::get('/', 'FrontController@index')->name('home');

Route::get('/news', 'FrontController@news')->name('news');

Route::get('/newslist', 'FrontController@newslist')->name('newslist');

Route::resource('admin/news', 'NewsController');

Route::get('/addnews', 'NewsController@category')->name('addnews');

Route::get('/addnews/subcategory/{id}','NewsController@subcategory')->name('subcategory');

Route::post('ckeditor/image_upload', 'NewsController@upload')->name('upload');