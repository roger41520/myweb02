<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome');



Route::view('dashboard', 'dashboard')    
    ->middleware(['auth', 'verified'])
    
    ->name('dashboard');



Route::view('profile', 'profile')
    
    ->middleware(['auth'])
    
    ->name('profile');




require __DIR__.'/auth.php';

Route::resource('contacts', ContactController::class)->middleware(['auth']);
Route::resource('articles', ArticleController::class)->middleware(['auth']);
Route::resource('products', ProductController::class)->middleware(['auth']);