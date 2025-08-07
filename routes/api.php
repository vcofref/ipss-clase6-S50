<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);

Route::middleware('auth:api')->group(function () {
    Route::get('estudiantes', [App\Http\Controllers\SchoolController::class, 'estudiantes']);
    Route::get('profesor/{teacherId}', [App\Http\Controllers\SchoolController::class, 'profesor']);
    Route::get('listado', [App\Http\Controllers\SchoolController::class, 'listado']);
});
