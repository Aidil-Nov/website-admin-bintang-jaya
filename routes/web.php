<?php

use Illuminate\Support\Facades\Route;

// Route utama
Route::get('/', function () {
    return view('dashboard.index'); // Mengarah ke views/dashboard/index.blade.php
})->name('home');

// Grup route untuk masing-masing modul
Route::prefix('/')->group(function () {
    // Dashboard
    Route::get('dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    // Absensi
    Route::get('absensi', function () {
        return view('absensi.index'); // views/absensi/absensi.blade.php
    })->name('absensi');

    // Inventaris
    Route::get('inventaris', function () {
        return view('inventaris.index'); // views/inventaris/index.blade.php
    })->name('inventaris');

    // Keuangan
    Route::get('keuangan', function () {
        return view('keuangan.keuangan'); // views/keuangan/keuangan.blade.php
    })->name('keuangan');

    // Laporan
    Route::prefix('laporan')->group(function () {
        Route::get('/', function () {
            return view('keuangan.laporan.index'); // Asumsi laporan ada di views/keuangan/laporan/
        })->name('laporan');
    });

    // Stok
    Route::prefix('stok')->group(function () {
        Route::get('/', function () {
            return view('stok.stok'); // Asumsi stok ada di views/stok/stok/
        })->name('stok');
    });
});