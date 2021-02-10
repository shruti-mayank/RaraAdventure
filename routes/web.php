<?php
use App\Model\Admin\book;
use App\review;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/admin/index', 'HomeController@index')->name('admin.index');

Route::get('/', 'FrontController@index')->name('home');
Route::get('/dest', 'FrontController@dest')->name('dest');
Route::get('/package', 'FrontController@package')->name('package');
Route::get('/destination', 'FrontController@alldest')->name('alldest');
Route::get('/packages', 'FrontController@allpackage')->name('allpackage');
Route::get('/book', 'FrontController@book')->name('book');
Route::get('/review', 'FrontController@reviews')->name('review');
Route::get('/storebook','FrontController@storebook')->name('storebook');
Route::get('/about/', 'FrontController@about')->name('about');
Route::get('/contact/', 'FrontController@contact')->name('contact');
Route::get('/extras/', 'FrontController@extras')->name('extras');
Route::get('/review/', 'FrontController@reviews')->name('review');
Route::post('/storereview','FrontController@storereview')->name('storereview');
Route::get('/destination/{id}', 'FrontController@showdest')->name('front.destination');
Route::get('/packages/{id}', 'FrontController@showpackage')->name('front.package');

Route::namespace('Admin')->group(function(){
//    Route::get('admin/index', function (){
//        $books = book::all();
//        return view('admin.index', compact('books'));
//    })->name('admin.index');
Route::post('/admin/addtrek','TrekController@store')->name('storetrek');
Route::post('/admin/updatetrek/{id}','TrekController@update')->name('updatetrek');
Route::post('/admin/updatealldest/{id}','AlldestController@update')->name('updatealldest');
Route::post('/admin/updatedest/{id}','DestinationController@update')->name('updatedest');
Route::get('/admin/deletedest/{id}','DestinationController@destroy')->name('deletedest');
Route::post('/admin/updatepackage/{id}','PackageController@update')->name('updatepackage');
Route::get('/admin/deletepackage/{id}','PackageController@destroy')->name('deletepackage');

    Route::resource('admin/destination','DestinationController');
    Route::resource('admin/package','PackageController');
    Route::resource('front/book', 'BookController');	
    Route::resource('admin/review', 'ReviewController');
    Route::get('/deletebook/{id}','BookController@destroy')->name('book.destroy');
    Route::get('/deletereview/{id}','ReviewController@destroy')->name('review.destroy');
});
