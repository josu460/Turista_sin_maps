<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminHoteles;

Route::get('/registroHoteles', [adminHoteles::class, 'RegistrarHotel'])->name('registroHoteles'); 

Route :: post('/añadirHotel', [adminHoteles::class, 'addHoteles'])->name('addHoteles');

require __DIR__.'/auth.php';
