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
use Illuminate\Support\Facades\Route;

Route::view('laravel','app.welcome')->name('laravel');
Route::get('/','HomeController@home')->name('home');
Route::get('about/{user?}','HomeController@about')->name('about');
Route::resource('/posts','PostController');
Route::resource('/comments','CommentController')->except(['index']);
Route::get('posts/comments/{post}','CommentController@commentsByPost')->name('commentsByPost');
Route::get('comments/')