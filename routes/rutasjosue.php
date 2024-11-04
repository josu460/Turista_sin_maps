<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VuelosController;


Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/ConsultaVuelos', function () {
    return view('ConsultaVuelos');
});

Route::get('/Vuelos', function () {
    return view('Vuelos');
})->name('Vuelos');


Route :: post('/enviarVuelo', [VuelosController::class, 'VuelosBuscar'])->name('VuelosBuscar');

require __DIR__.'/auth.php';
