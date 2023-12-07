<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// 一般画面のルーティング

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ここから管理画面のルーティング

// ユーザー管理のルーティング
Route::prefix('/admin/user')->name('admin.user.')->middleware(['auth', 'verified'])->group(function () {

    // ユーザー一覧を表示するURL ( http://localhost/admin/user )
    Route::get('/', [UserController::class, 'index'])->name('index');

    // ユーザーを削除するURL ( http://localhost/admin/user/delete/{userのid} )
    Route::get('/delete/{user_id}', [UserController::class, 'delete'])->name('delete');
});

// 企業管理のルーティング
Route::prefix('/admin/company')->name('admin.company.')->group(function () {

    // 企業一覧を表示するURL ( http://localhost/admin/company )
    Route::get('/', [CompanyController::class, 'index'])->name('index');

    // 企業編集画面を表示するURL ( http://localhost/admin/company/edit/{companyのid} )
    Route::get('/edit/{company_id?}', [CompanyController::class, 'edit'])->name('edit');

    // 企業情報を新規登録または更新するURL ( http://localhost/admin/company/store/{companyのid} )
    Route::post('/store/{company_id?}', [CompanyController::class, 'store'])->name('store');

    // 企業を削除するURL ( http://localhost/admin/company/delete/{companyのid} )
    Route::get('/delete/{company_id}', [CompanyController::class, 'delete'])->name('delete');

});

// 商品管理のルーティング
Route::prefix('/admin/production')->name('admin.production.')->group(function () {

    // 商品一覧を表示するURL ( http://localhost/admin/production )
    Route::get('/', [ProductController::class, 'index'])->name('index');
});

// イベント管理のルーティング
Route::prefix('/admin/event')->name('admin.event.')->group(function () {

    // イベント一覧を表示するURL ( http://localhost/admin/event )
    Route::get('/', [EventController::class, 'index'])->name('index');
});

require __DIR__.'/auth.php';
