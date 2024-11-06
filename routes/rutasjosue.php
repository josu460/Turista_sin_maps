<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VuelosController;
use App\Http\Controllers\consultarController;


Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/ConsultaVuelos', function () {
    return view('ConsultaVuelos');
});

Route::get('/Vuelos', function () {
    return view('Vuelos');
})->name('Vuelos');

Route::get('/EleccionDestino', function () {
    return view('EleccionDestino');
})->name('EleccionDestino');


Route :: post('/enviarVuelo', [VuelosController::class, 'VuelosBuscar'])->name('VuelosBuscar');

Route :: post('/consultar', [consultarController::class, 'consultar'])->name('consultar');

require __DIR__.'/auth.php';
