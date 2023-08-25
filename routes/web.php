<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');

});
route::get('productos',[App\Http\Controllers\productosController::class, 'index'])->name('productos.index');
Route::get('imagenes',[App\Http\Controllers\productosController::class, 'show'])->name('imagenes');