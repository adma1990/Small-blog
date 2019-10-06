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
Route::get('/show_ganre/{id}', 'BlogController@show_ganre')->where('id', '\d+');
Route::get('/comment', 'CommentController@comment');
Route::post('/comment', 'CommentController@store');
Route::get('/gallery', 'GalleryController@gallery');
