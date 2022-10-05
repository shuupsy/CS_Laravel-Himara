<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;


Route::resource('/', HomeController::class)
    ->names(['index' => 'home.index']);

Route::resource('/rooms', RoomsController::class)
    ->names(['index' => 'rooms.index']);

Route::resource('/staff', StaffController::class)
    ->names(['index' => 'staff.index']);

Route::resource('/gallery', GalleryController::class)
    ->names(['index' => 'galley.index']);

Route::resource('/contact', ContactController::class)
    ->names(['index' => 'contact.index']);

Route::resource('/blog', BlogController::class)
    ->names(['index' => 'blog.index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
