<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;


Route::get('/tienda', function () {
    return view('tienda');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/create', function () {
    return view('create');
});

Route::get('/user', [UserController::class, 'index'])->name('user');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');


Route::get('productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');





