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

// Route::get('/', function () {
//     return view('layout/main');
// });



Route::view('/','layout/main');
route::view('/index.html','layout/main');
Route::get('main','ThemController@index');

//Route::view('/index.html','index');
Route::view('/404.html','404');
Route::view('/about.html','about');
Route::view('/blog-home-1.html','blog-home-1');
Route::view('/services.html','services');
Route::view('/blog-post.html','blog-post');

Route::view('/contact.html','contact');
Route::post('contactus','ContactController@submit');

Route::view('/faq.html','faq');
Route::view('/portfolio-1-col.html','portfolio-1-col');
Route::view('/portfolio-2-col.html','portfolio-2-col');
Route::view('/portfolio-3-col.html','portfolio-3-col');
Route::view('/portfolio-4-col.html','portfolio-4-col');
Route::view('/portfolio-item.html','portfolio-item');

