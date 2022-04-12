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

// ユーザー認証系（メール認証機能を有効）
Auth::routes(['verify' => true]);

// ログイン、メール認証済みの場合のみアクセス可能
Route::middleware(['auth', 'verified'])->group(function () {
    // ホームメニュー
    Route::get('/', 'HomeController@index')->name('home');

    // 製品マスタ照会
    Route::get('product_search', 'ProductMasterController@search')->name('product_search');
    Route::get('product_master', 'ProductMasterController@show')->name('product_master');
});
