<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;

/* -------- FRONT -------- */
Route::get('/', [FrontController::class, 'Home'])
->name('home');
/* Home - [POST] - contact rapide */
Route::post('/send', [FrontController::class, 'store']);

Route::get('/rooms', [FrontController::class, 'Room'])
->name('rooms');
Route::get('/rooms/{id}', [FrontController::class, 'ShowRoom']);

Route::get('/staff', [FrontController::class, 'Staff'])
->name('staff');

Route::get('/gallery', [FrontController::class, 'Gallery'])
->name('gallery');


/* Route::resource('/rooms', RoomsController::class)
    ->names(['index' => 'rooms.index']);

Route::resource('/staff', StaffController::class)
    ->names(['index' => 'staff.index']);

Route::resource('/gallery', GalleryController::class)
    ->names(['index' => 'gallery.index']); */

Route::resource('/contact', ContactController::class)
    ->names(['index' => 'contact.index']);

Route::resource('/blog', BlogController::class)
    ->names(['index' => 'blog.index']);

Route::resource('/booking-form', BookingController::class)
    ->names(['index' => 'booking.index']);


Route::resource('/dashboard', DashboardController::class)
    ->names(['index' => 'dashboard'])
    ->middleware(['auth', 'verified']);

Route::get('/admin', function(){
    return view('pages.backoffice.b-home');
});


Route::fallback(function(){
    return view('pages.error404');
});

require __DIR__.'/auth.php';
