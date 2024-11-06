<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminHoteles;

Route::get('/registroHoteles', [adminHoteles::class, 'RegistrarHotel'])->name('registroHoteles'); 
Route::get('/consultaHoteles', [adminHoteles::class, 'ConsultarHotel'])->name('consultaHoteles'); 
Route::get('/Home', [adminHoteles::class,'inicio'])->name('Home'); 
Route::get('/ConsultarUsuario', [adminHoteles::class, 'ConsultarUsuario'])->name('RutaConsultarU'); 
Route::get('/EditarUsuario', [adminHoteles::class, 'EditarUsuario'])->name('RutaEditarU'); 

Route :: post('/añadirHotel', [adminHoteles::class, 'addHoteles'])->name('addHoteles');
Route::post('/ActualizarUsuario', [adminHoteles::class, 'ActualizarUsuario'])->name('ActualizarUsuario');

require __DIR__.'/auth.php';
