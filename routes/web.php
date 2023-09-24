<?php

use App\Http\Controllers\CalculadoraController;
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
    Route::get('/calculadora', [CalculadoraController::class, 'index'])->name('pages.calculargases.index');
    Route::post('/calcular', [CalculadoraController::class, 'calcular'])->name('pages.calculargases.calcular');
    Route::get('/calculargases/resultado', [CalculadoraController::class, 'resultado'])->name('pages.calculargases.resultado');
    Route::get('/cadastrarveiculo', [TipoVeiculoController::class, 'index'])->name('pages.cadastrarveiculo.index');
    Route::post('/cadastrar', [TipoVeiculoController::class, 'cadastrar'])->name('pages.cadastrarveiculo.cadastrar');
});