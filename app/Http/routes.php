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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',['as'=>'posts','uses'=>'PostController@index']);
Route::get('unpublished',['as'=>'posts.unpublished','uses'=>'PostController@unpublished']);
Route::get('create',['as'=>'posts.create','uses'=>'PostController@create']);

$router->resource('/','PostController');