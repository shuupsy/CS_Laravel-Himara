<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ServiceController;

Route::get('/mail', function(){
    return view('emails.welcome');
});

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

/* Profil personnel */
Route::resource('/dashboard', DashboardController::class)
    ->names(['index' => 'dashboard'])
    ->middleware(['auth', 'verified']);


/* -------- BACKOFFICE -------- */
Route::get('/admin', function(){
    return view('pages.backoffice.b-home');
});

/* Infos Hotel */
Route::resource('/admin/info', InfoController::class)
    ->names(['index' => 'info.index']);
Route::put('/admin/info/{id}/update1', [InfoController::class, 'update_logo']);
Route::put('/admin/info/{id}/update2', [InfoController::class, 'update_biglogo']);

/* Service */
Route::resource('/admin/services', ServiceController::class)
    ->names(['index' => 'service.index']);

/* Ads */
Route::resource('/admin/ads', AdsController::class)
    ->names(['index' => 'ads.index']);

/* Sliders */
Route::resource('/admin/sliders', SlidersController::class)
    ->names(['index' => 'sliders.index']);

/* Restaurant */
Route::resource('/admin/restaurant', RestaurantController::class)
    ->names(['index' => 'restaurant.index']);

/* Staff */
Route::resource('/admin/staff', StaffController::class)
    ->names(['index' => 'staff.index']);

/* Gallery */
Route::resource('/admin/gallery', GalleryController::class)
    ->names(['index' => 'gallery.index']);

Route::resource('/admin/gallerycategory', GalleryCategoryController::class);

Route::resource('/admin/rooms', RoomsController::class)
    ->names(['index' => 'rooms.index']);



Route::resource('/contact', ContactController::class)
    ->names(['index' => 'contact.index']);

Route::resource('/blog', BlogController::class)
    ->names(['index' => 'blog.index']);

Route::resource('/booking-form', BookingController::class)
    ->names(['index' => 'booking.index']);







Route::fallback(function(){
    return view('pages.error404');
});

require __DIR__.'/auth.php';
