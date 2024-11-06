<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\VueloController; // Asegúrate de importar el controlador para los vuelos

Route::get('/loginA', function () {
    return view('loginA');
});

require __DIR__.'/auth.php';

// Ruta para la vista de Hoteles
Route::get('/Hoteles', function () {
    return view('Hoteles');  
})->name('Hoteles');

// Ruta para guardar un nuevo hotel
Route::post('Hoteles', [HotelController::class, 'store'])->name('Hoteles.store');

// Ruta para la vista de vuelos
Route::get('/vuelosangel', function () {
    return view('vuelosangel');  
})->name('vuelosangel');

// Ruta para guardar o actualizar los datos del vuelo
Route::post('/vuelosangel', [VueloController::class, 'guardar'])->name('ruta.vuelosangel');
