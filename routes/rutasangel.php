<?php

use Illuminate\Support\Facades\Route;

Route::get('/loginA', function (){
    return view('loginA');
});

require __DIR__.'/auth.php';