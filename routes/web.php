<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use App\Models\Intro;
use App\Models\Slider;

// Home Page: Pass dynamic data for intro and slider sections
Route::get('/', function () {
    // Retrieve up to 4 intro records
    $intro = Intro::take(4)->get();

    // If there are fewer than 4, add placeholders.
    if ($intro->count() < 4) {
        $missing = 4 - $intro->count();
        for ($i = 0; $i < $missing; $i++) {
            $intro->push((object)[
                'title'       => 'Default Title',
                'description' => 'Default description for this section.',
                // Use a default image path that exists in your public assets
                'image'       => 'constrion/assets/images/intro.jpg'
            ]);
        }
    }

    // Retrieve slider records for the home page
    $sliders = Slider::all();

    return view('front-end.home', compact('intro', 'sliders'));
});

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

    // Intro management resource routes
    Route::resource('admin/intros', App\Http\Controllers\IntroController::class)->names([
        'index'   => 'intros.index',
        'create'  => 'intros.create',
        'store'   => 'intros.store',
        'edit'    => 'intros.edit',
        'update'  => 'intros.update',
        'destroy' => 'intros.destroy',
    ]);
});
