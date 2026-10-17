<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/laporbanjir', [LaporBanjirController::class, 'index'])
    ->name('banjir.index');

Route::post('/laporbanjir', [LaporBanjirController::class, 'store'])
    ->name('banjir.store');