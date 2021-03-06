<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModeradorController;

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
    return view('auth.login');
});

Auth::routes();

Route::resource('inventarios', App\Http\Controllers\InventarioController::class);
Route::resource('vendedores', App\Http\Controllers\VendedoreController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('notas', App\Http\Controllers\NotaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/users', UserController::class);
Route::resource('/moders', ModeradorController::class);
Route::resource('/inventario', App\Http\Controllers\InventarioController::class);
Route::resource('/vendedore', App\Http\Controllers\InventarioController::class);
Route::resource('/cliente', App\Http\Controllers\ClienteController::class);
Route::resource('/nota', App\Http\Controllers\NotaController::class);