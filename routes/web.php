<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CutiController;


Route::get('/', [CutiController::class, 'preview']);

Route::get('/preview-cuti', [CutiController::class, 'preview']);