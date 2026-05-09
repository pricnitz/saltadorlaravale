<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend;
use App\Http\Controllers\MailController;


Route::get('/', [frontend::class, 'index'])->name('home');
Route::get('/about-us', [frontend::class, 'about'])->name('about');
Route::get('/portfolio', [frontend::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [frontend::class, 'contact'])->name('contact');

// Specific Service Routes
Route::get('/architect', [frontend::class, 'architect'])->name('service.architect');
Route::get('/interior', [frontend::class, 'interior'])->name('service.interior');
Route::get('/landscape-architecture', [frontend::class, 'landscape'])->name('service.landscape');
Route::get('/urban-planning', [frontend::class, 'urban'])->name('service.urban');
Route::get('/project-management', [frontend::class, 'projectManagement'])->name('service.management');
Route::get('/mep-services', [frontend::class, 'mep'])->name('service.mep');
Route::get('/project-management', [frontend::class, 'projectManagement'])->name('service.management');


// Contact mailer starts from here 
Route::post('/contact-send', [MailController::class, 'send'])->name('contact.send');
