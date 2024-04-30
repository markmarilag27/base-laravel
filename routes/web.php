<?php

use App\Http\Controllers\Page\AdminPageController;
use App\Http\Controllers\Page\AppPageController;
use App\Http\Controllers\Page\IndexPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User SPA Routes
|--------------------------------------------------------------------------
*/
Route::domain('app.'.config('app.domain'))->group(function () {
    Route::get('/{any}', AppPageController::class)->where('any', '^(?!api).*$')->name('app');
});

/*
|--------------------------------------------------------------------------
| Admin SPA Routes
|--------------------------------------------------------------------------
*/
Route::domain('admin.'.config('app.domain'))->group(function () {
    Route::get('/{any}', AdminPageController::class)->where('any', '^(?!api).*$')->name('admin');
});

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', IndexPageController::class)->name('home');
