<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorHoteles;

Route::get('/hoteles', function () {
    return view('hoteles');
})->name('hoteles');


Route::post('/enviarHotel', [controladorHoteles::class, 'buscarHotel'])->name('buscarHotel');

require __DIR__.'/auth.php';
