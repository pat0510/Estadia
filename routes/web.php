<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí se registran todas las rutas web de la aplicación.
| Estas rutas son cargadas por el RouteServiceProvider y
| estarán asignadas al grupo "web" middleware.
|
*/

// 🌐 Página principal del sitio
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// 🧭 Panel del administrador
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// 👥 CRUD de Usuarios (panel admin)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('usuarios', UsuarioController::class);
});
