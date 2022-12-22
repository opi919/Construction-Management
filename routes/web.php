<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['middleware' => ['superAdmin']], function () {
        Route::prefix('expert')->group(function () {
            Route::get('/', [SuperAdminController::class, 'expert_index'])->name('expert.index');
            Route::get('/create', [SuperAdminController::class, 'create_expert'])->name('expert.create');
            Route::post('/store', [SuperAdminController::class, 'store_expert'])->name('expert.store');
        });

        Route::prefix('company')->group(function () {
            Route::get('/', [SuperAdminController::class, 'company_index'])->name('company.index');
            Route::get('/create', [SuperAdminController::class, 'create_company'])->name('company.create');
            Route::post('/store', [SuperAdminController::class, 'store_company'])->name('company.store');
        });
    });
});
