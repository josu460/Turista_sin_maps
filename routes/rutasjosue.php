<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VuelosController;
use App\Http\Controllers\consultarController;


Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/ConsultaVuelos', function () {
    return view('ConsultaVuelos');
})->name('ConsultaVuelos');

Route::get('/Vuelos', function () {
    return view('Vuelos');
})->name('Vuelos');

Route::get('/EleccionDestino', function () {
    return view('EleccionDestino');
})->name('EleccionDestino');

Route:: get('/HomeAdministrador', function () {
    return view('HomeAdministrador');
})->name('HomeAdministrador');

Route:: get('/Reportes', function () {
    return view('Reportes');
})->name('Reportes');


Route :: post('/enviarVuelo', [VuelosController::class, 'VuelosBuscar'])->name('VuelosBuscar');

Route :: post('/consultar', [consultarController::class, 'consultar'])->name('consultar');

Route :: post('/crearVuelo', [VuelosController::class, 'CrearVuelos'])->name('CrearVuelos');

Route :: post('/editarVuelo', [VuelosController::class, 'EditarVuelos'])->name('EditarVuelos');

Route :: post('/comprarVuelo', [VuelosController::class, 'ComprarVuelo'])->name('ComprarVuelo');

require __DIR__.'/auth.php';
