<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('welcome');
});
//前台首页
Route::get('index','Home\\IndexController@index');
//后台首页
Route::get('admin','Admin\\IndexController@index');

//Route::resource('admin', 'ArticleController');
//后台内容页
Route::get('mian', 'Admin\\IndexController@mian');
Route::post('webset_config', 'Admin\\IndexController@webset_config');

Route::get('webset', 'Admin\\IndexController@webset');
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/home', 'HomeController@index');
