<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TipoVeiculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('pages.dashboard.index');
    Route::get('/calculargases', [TipoVeiculoController::class, 'all'])->name('pages.calculargases.index');
});