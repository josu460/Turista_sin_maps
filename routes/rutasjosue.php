<?php

use Illuminate\Support\Facades\Route;


Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/ConsultaVuelos', function () {
    return view('ConsultaVuelos');
});

require __DIR__.'/auth.php';
