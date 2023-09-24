<?php

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
    Route::get('/', function () {
        return view('base');
    });

    Route::get('/calculargases', [TipoVeiculoController::class, 'all'])->name('pages.calculargases.index');
    // Route::get('/create-tipo-veiculo', 'App\Http\Controllers\TipoVeiculoController@create');
});