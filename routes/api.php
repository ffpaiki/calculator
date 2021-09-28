<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/calculator', [CalculatorController::class, 'calculate']);
