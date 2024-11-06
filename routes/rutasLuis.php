<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VuelosController;

Route::get('/hoteles', function () {
    return view('hoteles');
})->name('hoteles');




require __DIR__.'/auth.php';
