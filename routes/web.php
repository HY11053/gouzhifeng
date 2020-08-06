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
Route::group(['domain' => 'm.gouzhifeng.net'], function () {
    Route::get('/','Mobile\IndexController@Index');
    Route::get('about','Mobile\ListArticleController@About');
    Route::get('productions','Mobile\ListArticleController@Productions');
    Route::get('productions/{path}','Mobile\ListArticleController@Productions');
    Route::get('dianmian','Mobile\ListArticleController@Mendian');
    Route::get('news','Mobile\ListArticleController@News');
    Route::get('news/{path}','Mobile\ListArticleController@News');
    Route::get('article/{id}.shtml','Mobile\ArticleController@Article');
});
Route::get('/','Frontend\IndexController@Index');
Route::get('about','Frontend\ListArticleController@About');
Route::get('productions','Frontend\ListArticleController@Productions');
Route::get('productions/{path}','Frontend\ListArticleController@Productions');
Route::get('dianmian','Frontend\ListArticleController@Mendian');
Route::get('news','Frontend\ListArticleController@News');
Route::get('news/{path}','Frontend\ListArticleController@News');
Route::get('article/{id}.shtml','Frontend\ArticleController@Article');


