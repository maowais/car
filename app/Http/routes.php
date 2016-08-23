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

Route::get('car', function () {
    return view('welcome');
});

Route::resource('car', 'carController');
Route::get('car', 'carController@index');
Route::get('car/create', 'carController@create');
Route::post('car/create', 'carController@store');
Route::get('edit', 'carController@edit');
Route::put('edit', 'carController@update');
Route::get('destroy/{id}',   array(
    'as' => 'destroy',
    'uses' => 'carController@destroy'
));
Route::group(['middlewareGroups' => ['web']], function () {
    return view('welcome');
});
