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

    // 入出庫明細 / 登録
    Route::get('transaction/search', 'TransactionController@search')->name('transaction.search');
    Route::get('transaction/index', 'TransactionController@index')->name('transaction.index');

    // 製品マスタ照会
    Route::get('product/search', 'ProductMasterController@search')->name('product.search');
    Route::get('product/master', 'ProductMasterController@show')->name('product.master');

    // 部品マスタ照会
    Route::get('material/search', 'MaterialMasterController@search')->name('material.search');
    Route::get('material/master', 'MaterialMasterController@show')->name('material.master');
});
