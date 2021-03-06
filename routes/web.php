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
/*
Route::get('/', function () {
    return view('welcome');
});

*/



Route::get('/', 'PostController@alllist')->name('routAll');

Route::get('/post/{slag}', 'PostController@post')->name('routPost');

Route::get('/list/{slag}', 'PostController@listCategory')->name('routChocs');

Route::get('/author/{slug}', 'PostController@authorPosts')->name('routAuthor');

Route::get('search', 'PostController@search')->name('routSearch');



Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');


Route::middleware('auth')->namespace('Admin')->prefix('/admin')->group(function(){
    Route::get('/list', 'AdminController@list')->name('adminlist');
    Route::get('/postnew', 'AdminController@postnew')->name('adminpostnew');

    Route::get('/authorslist', 'AdminController@authorslist')->name('adminauthorslist');
    Route::get('/authornew', 'AdminController@authornew')->name('adminauthornew');


    Route::get('/categorieslist', 'AdminController@categorieslist')->name('admincategorieslist');
    Route::get('/categorynew', 'AdminController@categorynew')->name('admincategorynew');



    });


