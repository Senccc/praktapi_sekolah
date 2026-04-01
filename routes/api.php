<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\GuruController;
use App\Http\Controllers\Api\MapelController;
use App\Http\Controllers\Api\KelasController;
use App\Http\Controllers\Api\SiswaController;
use App\Http\Controllers\Api\JadwalController;
use App\Http\Controllers\Api\AuthController;

// Public routes
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Safe routes (index, show) accessible without authentication
Route::apiResource('users', UserController::class) ->only(['index', 'show']);
Route::apiResource('/kelas', KelasController::class) ->only(['index', 'show']);
Route::apiResource('/mapel', MapelController::class) ->only(['index', 'show']);
Route::apiResource('/guru', GuruController::class) ->only(['index', 'show']);
Route::apiResource('/jadwal', JadwalController::class) ->only(['index', 'show']);
Route::apiResource('/siswa', SiswaController::class) ->only(['index', 'show']);

// Protected routes
Route::middleware('jwt.verify')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile.show');
    Route::put('/profile', [AuthController::class, 'updateProfile'])->name('profile.update');

    // Admin-only routes
    Route::middleware('admin')->group(function () {
        Route::apiResource('users', UserController::class) ->except(['index', 'show']);
        Route::apiResource('/kelas', KelasController::class) ->except(['index', 'show']);
        Route::apiResource('/mapel', MapelController::class) ->except(['index', 'show']);
        Route::apiResource('/guru', GuruController::class) ->except(['index', 'show']);
        Route::apiResource('/jadwal', JadwalController::class) ->except(['index', 'show']);
        Route::apiResource('/siswa', SiswaController::class) ->except(['index', 'show']);
    });
});

