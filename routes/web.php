<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/',[\App\http\Controllers\LoginUsuario::class,'Login']);
Route::get('/cadastrar',[\App\http\Controllers\cadastrarUsuario::class,'cadastrar']);
Route::get('/home',[\App\http\Controllers\homeControl::class,'Home']);
Route::get('/consultar',[\App\http\Controllers\consultarControl::class,'consultar']);
Route::get('/editar/{id}', [\App\Http\Controllers\consultarControl::class,'editar']);
Route::get('/atualizar/{id}', [\App\Http\Controllers\consultarControl::class,'atualizar']);
Route::get('/excluir/{id}',[\App\Http\Controllers\consultarControl::class,'excluir']);

Route::post('/cadastrar/salvar',[\App\Http\Controllers\cadastrarUsuario::class,'store']);
Route::post('/home/agendar',[\App\http\Controllers\homeControl::class,'store']);
Route::get('/validar',[\App\http\Controllers\LoginUsuario::class,'validar']);