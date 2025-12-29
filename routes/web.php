<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/newsletter', [ContactController::class, 'newsletter'])->name('newsletter');


// Se quiser adicionar mais páginas
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
