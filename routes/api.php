<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Versions Routes
|--------------------------------------------------------------------------
*/

Route::name('v1.')->prefix('v1')->group(base_path('routes/api/v1/index.php'));
