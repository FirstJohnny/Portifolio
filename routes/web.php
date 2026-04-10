<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

// Rota principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotas para portfolio
Route::get('/portfolio/{slug}', [HomeController::class, 'portfolioDetail'])->name('portfolio.detail');
Route::get('/portfolios', [HomeController::class, 'portfolios'])->name('portfolios');

// Rotas para blog
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-post/{slug}', [HomeController::class, 'blogPost'])->name('blog.post');

// Rotas para serviços
Route::get('/servicos-detalhes/{id}', [HomeController::class, 'serviceDetail'])->name('service.detail');

// Rota para contato (POST)
Route::post('/sendmail', [ContactController::class, 'send'])->name('contact.send');
