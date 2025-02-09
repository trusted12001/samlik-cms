<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('back-end.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');


    Route::get('/reset-password', [App\Http\Controllers\ResetPasswordController::class, 'showResetForm'])
        ->name('password.reset.form');
    Route::put('/reset-password', [App\Http\Controllers\ResetPasswordController::class, 'update'])
        ->name('password.reset.update');
    // Add additional admin routes here.


    // Resource routes for user management.
    Route::resource('admin/users', App\Http\Controllers\UserController::class)->names([
        'index'   => 'users.index',
        'create'  => 'users.create',
        'store'   => 'users.store',
        'edit'    => 'users.edit',
        'update'  => 'users.update',
        'destroy' => 'users.destroy',
    ]);


    // Slider management resource routes (only index, edit, and update are needed)
    Route::resource('admin/sliders', App\Http\Controllers\SliderController::class)->only([
        'index', 'edit', 'update'
    ])->names([
        'index'  => 'sliders.index',
        'edit'   => 'sliders.edit',
        'update' => 'sliders.update',
    ]);

});



