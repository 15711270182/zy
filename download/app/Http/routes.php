<?php
/*
| ==================================	|
|  路由规则定义																	|
| ==================================	|
*/
Route::get('/', 'IndexController@index'); //定义网站首页
/*
|--------------------------------------------------------------------------
| Base 控制器
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'base'], function () {
    Route::get('index',"BaseController@index");
	Route::get('about',"BaseController@about");
});

/*
|--------------------------------------------------------------------------
| Login 控制器
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'login'], function () {
    Route::get('index',"LoginController@index");
	Route::get('about',"LoginController@about");
});

/*
|--------------------------------------------------------------------------
| Index 控制器
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'index'], function () {
    Route::get('index',"IndexController@index");
	Route::get('about',"IndexController@about");
});

/*
|--------------------------------------------------------------------------
| List 控制器
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'list'], function () {
    Route::get('index',"ListController@index");
	Route::get('about',"ListController@about");
});

/*
|--------------------------------------------------------------------------
| Images 控制器
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'images'], function () {
    Route::get('index',"ImagesController@index");
	Route::get('about',"ImagesController@about");
});