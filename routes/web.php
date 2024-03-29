<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers;
use App\Http\Controllers\Profiles;


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

Route::get('/', 'App\Http\Controllers\RestoController@index');
Route::get('users', 'App\Http\Controllers\UserController@index');

Route::post('/post', 'App\Http\Controllers\UserController@post_data');
Route::get('profile', 'App\Http\Controllers\Profiles@list');



