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

Route::get('/adminhome', 'HomeController@index')->name('admin.home');

Route::get('/addnews', 'NewsController@category')->name('addnews');

Route::get('/ajax-subcat', function(){
	$cat_id = Input::get('cat_id');
	$subcategories = subcategory::where('category_id', '=', $cat_id)->get();
	return Response::json($subcategories);
});