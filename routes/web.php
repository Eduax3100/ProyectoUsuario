<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\UsuarioController;

Route::resource('usuarios', UsuarioController::class);
Route::get('/usuarios/{usuario}/delete', [UsuarioController::class, 'delete'])->name('usuarios.delete');
Route::put('/usuarios/{usuario}/softDelete', [UsuarioController::class, 'softDelete'])->name('usuarios.softDelete');

Route::get('/', function () {
    return view('welcome');
});
