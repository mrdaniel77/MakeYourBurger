<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BurgerController;
use App\Http\Controllers\TesteController;


Route::get('/', function () {
    return Inertia::render('TheTeste');
});

Route::get('/create', [TesteController::class, 'create']);
