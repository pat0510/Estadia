<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\MedicamentoController;

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

Route::get('/', function () {
    return view('pages.home');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('usuarios', UsuarioController::class);
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::get('/paciente/dashboard', function () {
    return view('paciente.dashboard');
})->name('paciente.dashboard');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('medicamentos', MedicamentoController::class);
});