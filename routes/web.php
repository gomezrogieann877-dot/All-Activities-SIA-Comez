<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DietController;

Route::get('/diet', [DietController::class, 'index'])->name('diet.index');
Route::post('/diet/recommend', [DietController::class, 'recommend'])->name('diet.recommend');