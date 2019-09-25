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

//Route::get('/', function () {
    //return view('welcome');
//});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'IndexController@index');
Route::get('/blog', 'BlogController@blog');
Route::get('/show/{id}', 'BlogController@show')->where('id', '\d+');
//Route::match(['get', 'post'], '/catalog', 'CatalogController@catalog');
Route::post('/comment', 'CommentController@comment');
Route::get('/comment', 'CommentController@comment');
//Route::post('/catalog', 'CatalogController@comment');
