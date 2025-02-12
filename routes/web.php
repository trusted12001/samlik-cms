<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use App\Models\Intro;
use App\Models\Slider;
use App\Models\About;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Project;
use App\Models\ContactInformation;
use App\Models\Client;




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
})->name('home');;


Route::get('/about', function () {
    $about = About::first();
    if (!$about) {
        $about = new About([
            'image'       => 'intros/CdD7s4PImkqOjHTPafFFdTsffIuvrySIyYv9qM48.jpg',
            'article'     => "Samlik Engineering Services is a leading indigenous engineering firm in Nigeria, dedicated to delivering innovative and cost-effective solutions across a broad spectrum of industries. Our approach is built on a commitment to excellence, driven by a team of specialists who are up to date with the latest technologies and engineering practices.

            At Samlik Engineering Services, we believe that every project is unique. Our diverse teams specialize in different facets of engineering—from comprehensive electrical systems, including power distribution and lighting design, to robust mechanical solutions like HVAC and plumbing systems. We also excel in facility and project management, ensuring that every project is executed efficiently from inception to completion.

            We understand that a one-size-fits-all approach does not work in today’s competitive market. That is why our consultancy services are tailored to meet the specific needs of each client, whether they are large multinational corporations or local enterprises. We leverage cutting-edge methodologies and thorough analysis of your business environment to deliver solutions that not only meet but exceed your expectations.

            Our focus on innovation, precision, and customer satisfaction has established us as a trusted partner in the engineering sector. By blending technical expertise with creative problem-solving, Samlik Engineering Services transforms visions into reality—ensuring every project is completed with the highest standards of quality and efficiency.",
            'service_list_left'  => "Electrical Engineering Services\nMechanical Engineering Services\nFacility management",
            'service_list_right' => "Civi / Structural Engineering\nUninterrupted Power Supply System\nLift System Design",
        ]);
    }
    return view('front-end.about', compact('about'));
})->name('about');



Route::get('/services', function () {
    $services = Service::all();
    $skills   = Skill::all();
    return view('front-end.services', compact('services', 'skills'));
})->name('services');



Route::get('/projects', function () {
    $projects = Project::paginate(10);
    return view('front-end.projects', compact('projects'));
})->name('projects');



Route::get('/contact', function () {
    $contactInfo = ContactInformation::first();
    $clients = Client::all();
    return view('front-end.contact', compact('contactInfo', 'clients'));
})->name('contact');




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

    // About management resource routes
    Route::resource('admin/abouts', App\Http\Controllers\AboutController::class)->names([
        'index'   => 'abouts.index',
        'create'  => 'abouts.create',
        'store'   => 'abouts.store',
        'edit'    => 'abouts.edit',
        'update'  => 'abouts.update',
        'destroy' => 'abouts.destroy',
    ]);

    Route::resource('admin/services', App\Http\Controllers\ServiceController::class)->names([
        'index'   => 'services.index',
        'create'  => 'services.create',
        'store'   => 'services.store',
        'edit'    => 'services.edit',
        'update'  => 'services.update',
        'destroy' => 'services.destroy',
    ]);

    Route::resource('admin/skills', App\Http\Controllers\SkillController::class)->names([
        'index'   => 'skills.index',
        'create'  => 'skills.create',
        'store'   => 'skills.store',
        'edit'    => 'skills.edit',
        'update'  => 'skills.update',
        'destroy' => 'skills.destroy',
    ]);


    Route::resource('admin/projects', App\Http\Controllers\ProjectController::class)->names([
        'index'   => 'projects.index',
        'create'  => 'projects.create',
        'store'   => 'projects.store',
        'edit'    => 'projects.edit',
        'update'  => 'projects.update',
        'destroy' => 'projects.destroy',
    ]);


    Route::resource('admin/contact', App\Http\Controllers\ContactInformationController::class)->names([
        'index'   => 'contact.index',
        'create'  => 'contact.create',
        'store'   => 'contact.store',
        'edit'    => 'contact.edit',
        'update'  => 'contact.update',
        'destroy' => 'contact.destroy',
    ]);


    Route::resource('admin/clients', App\Http\Controllers\ClientController::class)->names([
        'index'   => 'clients.index',
        'create'  => 'clients.create',
        'store'   => 'clients.store',
        'edit'    => 'clients.edit',
        'update'  => 'clients.update',
        'destroy' => 'clients.destroy',
    ]);


});
