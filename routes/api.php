<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmailController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CocktailController;

Route::get('cocktails', [CocktailController::class, 'index'])->name('api.cocktails.index');
Route::get('category', [CategoryController::class, 'index'])->name('api.category.index');

Route::post('emails/', [EmailController::class, 'store'])->name('api.emails.store');