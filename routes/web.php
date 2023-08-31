<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');

});
route::get('productos',[App\Http\Controllers\productosController::class, 'index'])->name('productos.index');
Route::get('imagenes',[App\Http\Controllers\productosController::class, 'show'])->name('imagenes');
Route::get('catalogo/{id}',[App\Http\Controllers\productosController::class, 'catalogo'])->name('catalogo');
Route::get('categoria/{id}',[App\Http\Controllers\productosController::class, 'categoria'])->name('categoria');


Route::get('inicio',function(){return view('index');})->name('hola');
Route::get('login',function(){return view('login');})->name('login');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
