<?php

use App\Http\Controllers\MyPortfolioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MyPortfolioController::class, 'index']);