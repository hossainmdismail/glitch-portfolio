<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SinglePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [SinglePageController::class, 'about'])->name('about');
Route::get('/contact', [SinglePageController::class, 'contact'])->name('contact');
Route::get('/blog/{slug}', [BlogController::class, 'view'])->name('blog.view');
Route::get('/project/{slug}', [ProjectController::class, 'view'])->name('project.view');
