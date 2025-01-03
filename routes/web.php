<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('mahasiswa.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'checkRole:admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('index.admin');

    Route::get('/prodi/datatable', [ProdiController::class, 'dataTable'])->name('admin.prodi.datatable');
    Route::resource('prodi', ProdiController::class);

    Route::get('/dosen/datatable', [DosenController::class, 'dataTable'])->name('admin.dosen.datatable');
    Route::resource('dosen', DosenController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
