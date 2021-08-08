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

Route::get('/', function () {
    return view('welcome');
});
//groups
Route::get('groups', 'App\Http\Controllers\UserGroupController@index');
Route::get('create', 'App\Http\Controllers\UserGroupController@create');
Route::post('groups', 'App\Http\Controllers\UserGroupController@store');
Route::delete('groups/{id}', 'App\Http\Controllers\UserGroupController@destroy');
//Route::get('groups','UserGroupController@index');
//Route::get('users','App\Http\Controllers\UsersController@index');

//Users
Route::resource('users', 'App\Http\Controllers\UsersController', ['except' => ['show'] ]); //jeta bad tite hobe tar code ['except'=>['show'] ]


/*Route::get('users', 'App\Http\Controllers\UsersController@index');
Route::get('users/{id}', 'App\Http\Controllers\UsersController@show');
Route::get('users/create', 'App\Http\Controllers\UsersController@create');
Route::post('users', 'App\Http\Controllers\UsersController@store');
Route::get('users/{id}/edit', 'App\Http\Controllers\UsersController@edit');
Route::put('users/{id}', 'App\Http\Controllers\UsersController@update');
Route::delete('users/{id}', 'App\Http\Controllers\UsersController@delete');*/

