<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;

/* -------- FRONT -------- */
/* Home */
Route::get('/', [HomeController::class, 'index'])->name('home');
/* Home - [POST] - contact rapide */
Route::post('/send', [HomeController::class, 'store']);

Route::resource('/rooms', RoomsController::class)
    ->names(['index' => 'rooms.index']);

Route::resource('/staff', StaffController::class)
    ->names(['index' => 'staff.index']);

Route::resource('/gallery', GalleryController::class)
    ->names(['index' => 'gallery.index']);

Route::resource('/contact', ContactController::class)
    ->names(['index' => 'contact.index']);

Route::resource('/blog', BlogController::class)
    ->names(['index' => 'blog.index']);

Route::resource('/booking-form', BookingController::class)
    ->names(['index' => 'blog.index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::fallback(function(){
    return view('pages.error404');
});

require __DIR__.'/auth.php';
