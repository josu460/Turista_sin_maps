<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', function () {
    return view('welcome');
});


require __DIR__.'/auth.php';
require __DIR__.'/rutasangel.php';