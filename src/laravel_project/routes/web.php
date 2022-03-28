<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ユーザー認証系（メール認証機能を有効）
Auth::routes(['verify' => true]);

// インデックス（メニュー）ページ
Route::get('/', 'HomeController@index')->name('index')->middleware('verified');
