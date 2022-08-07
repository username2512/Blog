<?php

use Illuminate\Support\Facades\Route;
use App\Models\user;

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
Route::get('login','App\Http\Controllers\infoController@login');
Route::get('register','App\Http\Controllers\infoController@reg');
Route::post('login', 'App\Http\Controllers\infoController@postlogin')->name('login.post');
Route::post('register', 'App\Http\Controllers\infoController@register')->name('register.post');
Route::get('logout', 'App\Http\Controllers\infoController@logout')->name('logout');
