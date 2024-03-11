<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ChurchesController;

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


#Rutas de la tabla Iglesias
Route::get('/crear-usuario', [UsersController::class, 'create']);
Route::post('/saveuser', [UsersController::class, 'store']);
Route::get('/usuarios', [UsersController::class, 'show']);
Route::put('/usuarios/{id}', [UsersController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [UsersController::class, 'destroy'])->name('usuarios.destroy');


#Rutas de la tabla Iglesias
Route::get('/registrar-iglesia', [ChurchesController::class, 'create']);
Route::post('/saveiglesia', [ChurchesController::class, 'store']);
Route::get('/iglesias', [ChurchesController::class, 'show']);
Route::put('/iglesias/{id}', [ChurchesController::class, 'update'])->name('iglesias.update');
Route::delete('/iglesias/{id}', [ChurchesController::class, 'destroy'])->name('iglesias.destroy');