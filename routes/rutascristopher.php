<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminHoteles;

Route::get('/registroHoteles', [adminHoteles::class, 'RegistrarHotel'])->name('registroHoteles'); 
Route::get('/consultaHoteles', [adminHoteles::class, 'ConsultarHotel'])->name('consultaHoteles'); 
Route::get('/Home', [adminHoteles::class, 'inicio'])->name('Home'); 

Route :: post('/añadirHotel', [adminHoteles::class, 'addHoteles'])->name('addHoteles');

require __DIR__.'/auth.php';
