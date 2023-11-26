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

Route::prefix('/admin')->group(function () {
    // ユーザー管理
    Route::view('/user', 'admin.user.index');
    // Route::

    // 会社管理
    Route::view('/company', 'admin.user.index');

    // 商品管理
    Route::view('/production', 'admin.user.index');

});
