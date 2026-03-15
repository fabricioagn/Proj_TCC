<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('index');
    });

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/create', [UsuarioController::class, 'create']);
Route::post('/usuarios', [UsuarioController::class, 'store']);

Route::get('/registrar', [UsuarioController::class,'registrar']);
Route::post('/registrar', [UsuarioController::class,'store']);

Route::get('/login', [UsuarioController::class, 'login'])->name('login');
Route::post('/login', [UsuarioController::class, 'authenticate']);

Route::get('/home', [UsuarioController::class, 'home'])->middleware('auth');

Route::post('/logout', [UsuarioController::class, 'logout']);