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
    return view('mainview');
});

Route::get('/docs', function () {
    return view('documentation');
});

Route::get('/get', 'GetController@getDownloadLinks');

Route::get('/user/profile', 'UserController@profileIndex');

Route::get('/user/profile/key', 'UserController@generateNewApiProcess');

Route::get('/user/profile/change-password', 'UserController@changePasswordIndex');

Route::post('/user/profile/change-password/auth', 'UserController@changePasswordProcess');

Route::get('/user/profile/change-password/auth', function(){
    abort(404);
});

Route::get('/user/login', 'UserController@loginIndex');

Route::post('/user/login/auth', 'UserController@loginProcess');

Route::get('/user/login/auth', function(){
    abort(404);
});

Route::get('/user/register', 'UserController@registerIndex');

Route::post('/user/register/auth', 'UserController@registerProcess');

Route::get('/user/register/auth', function(){
    abort(404);
});

Route::get('/user/logout', 'UserController@logoutProcess');

Route::get('/key', 'KeyController@getIndex');

Route::post('/key', 'KeyController@postIndex');
