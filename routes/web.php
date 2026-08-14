<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('estudiantes.index');
});

use App\Http\Controllers\EstudianteController;

Route::resource('estudiantes', EstudianteController::class);
