<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\Cliente;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/exercicio01', [ExercicioController::class, 'exercicio01']);

Route::match(['get', 'post'], '/exercicio02', [ExercicioController::class, 'exercicio02']);

Route::match(['get', 'post'], '/exercicio03', [ExercicioController::class, 'exercicio03']);

Route::match(['get', 'post'], '/exercicio04', [ExercicioController::class, 'exercicio04']);

Route::match(['get', 'post'], '/exercicio05', [ExercicioController::class, 'exercicio05']);

Route::get('/exercicio06', [ExercicioController::class, 'exercicio06']);

Route::get('/exercicio07', [ExercicioController::class, 'exercicio07']);

Route::get('/exercicio08', [ExercicioController::class, 'exercicio08']);

Route::get('/exercicio09', [ExercicioController::class, 'exercicio09']);

Route::get('/exercicio10', [ExercicioController::class, 'exercicio10']);

Route::get('/exercicio11', [ExercicioController::class, 'exercicio11']);

Route::get('cadastrarCliente', [Cliente::class, 'create']);
Route::post('cadastrarCliente', [Cliente::class, 'store']);
Route::get('listarCliente', [Cliente::class, 'index']);
Route::delete('/deletarCliente/{id}', [Cliente::class, 'destroy']);
Route::get('editarCliente/{id}', [Cliente::class, 'edit']);
Route::put('editarCliente/{id}', [Cliente::class, 'update']);
