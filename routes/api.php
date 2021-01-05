<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 会員登録
Route::post('/register', 'Auth\RegisterController@register')->name('register');

// ログイン
Route::post('/login', 'Auth\LoginController@login')->name('login');

// ログアウト
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// ログインユーザー
//Route::get('/user', fn() => Auth::user())->name('user');

//Book一覧取得API
Route::get('/books', 'BookController@index');

//Book登録API
Route::post('/books', 'BookController@store');

//Book詳細取得API
Route::get('/books/{book}', 'BookController@show');

//Book更新API
Route::put('/books/{book}', 'BookController@update');

//Book削除API
Route::delete('/books/{book}', 'BookController@destroy');