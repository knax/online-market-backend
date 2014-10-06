<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('test', 'TestController@test');

Route::group(array('prefix' => 'api/v1'), function(){

    Route::group(array('prefix' => 'product'), function(){
        Route::get('sort_by/{type}', 'ProductsListController@sortBy');
        Route::get('/', 'ProductsListController@getAll');
        Route::get('all', 'ProductsListController@getAll');
    });

    Route::group(array('prefix' => 'contact'), function(){
        Route::get('/', 'ContactController@getAll');
        Route::get('all', 'ContactController@getAll');
        Route::get('type/{type}', 'ContactController@getByType');
    });
});
Route::get('test', 'ProductsListController@test');
