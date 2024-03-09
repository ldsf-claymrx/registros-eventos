<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;

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
    return view('admin.login');
});

Route::get('/principal', [DashboardController::class, 'index']);

Route::get('/crearusuario', [UsersController::class, 'create']);
Route::post('/saveuser', [UsersController::class, 'store']);

Route::get('/usuarios', [UsersController::class, 'show']);
Route::put('/usuarios/{id}', [UsersController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [UsersController::class, 'destroy'])->name('usuarios.destroy');