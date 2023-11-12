<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::view('library','forms.library');

Route::get('show', [LibController::class, 'ShowController']);

Route::get('/addBook', [LibController::class,'ValidateInput']);