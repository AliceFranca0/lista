<?php

use App\Http\Controllers\ExercicioController;
use Illuminate\Support\Facades\Route;

Route::get('/exercicio01',[ExercicioController::class, 'exercicio01'] );
