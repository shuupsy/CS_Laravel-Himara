<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RoomsPhotoController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RoomsDescriptionController;



/* -------- FRONT -------- */
Route::get('/', [FrontController::class, 'Home'])
->name('home');
/* Home - [POST] - contact rapide */
Route::post('/send', [FrontController::class, 'store']);

Route::get('/rooms', [FrontController::class, 'Room'])
->name('rooms');
Route::get('/rooms/{id}', [FrontController::class, 'ShowRoom']);

Route::get('/blog/{id}', [FrontController::class, 'ShowBlog'])->name('blog');

Route::get('/staff', [FrontController::class, 'Staff'])
->name('staff');

Route::get('/gallery', [FrontController::class, 'Gallery'])
->name('gallery');

/* Profil personnel */
Route::resource('/dashboard', DashboardController::class)
    ->names(['index' => 'dashboard'])
    ->middleware(['auth', 'verified']);

/* Booking */
Route::resource('/booking-form', BookingController::class)
    ->names(['index' => 'booking']);

Route::resource('/contact', ContactController::class)
    ->names(['index' => 'contact']);


/* -------- BACKOFFICE -------- */
/* Accès - Admin/Mod/Editor */
Route::middleware('access')->group(function(){
    Route::get('/admin', [AdminController::class,'index']);

    Route::resource('/notification', NotificationController::class);

    /* BACKOFFICE - Rooms */
    Route::resource('/admin/rooms', RoomsController::class)
        ->names(['index' => 'rooms.index']);

    /* BACKOFFICE - Valider room  */
    Route::put('/admin/rooms/{id}/promo', [RoomsController::class, 'promo']);

    Route::resource('/admin/rooms/descriptions', RoomsDescriptionController::class);

    Route::resource('/admin/rooms/gallery', RoomsPhotoController::class);
});

/* Accès - Admin / Mod */
Route::middleware('high-access')->group(function(){
    /* BACKOFFICE - Valider review */
    Route::put('/admin/review/{id}/publish', [ReviewController::class, 'publish']);

    /* BACKOFFICE - Valider room  */
    Route::put('/admin/rooms/{id}/publish', [RoomsController::class, 'publish']);

     /* BACKOFFICE - Infos Hotel */
     Route::resource('/admin/info', InfoController::class)
     ->names(['index' => 'info.index']);

    Route::put('/admin/info/{id}/update1', [InfoController::class, 'update_logo']);
    Route::put('/admin/info/{id}/update2', [InfoController::class, 'update_biglogo']);

    /* BACKOFFICE - Service */
    Route::resource('/admin/services', ServiceController::class)
        ->names(['index' => 'service.index']);

    /* BACKOFFICE - Ads */
    Route::resource('/admin/ads', AdsController::class)
        ->names(['index' => 'ads.index']);

    /* BACKOFFICE - Sliders */
    Route::resource('/admin/sliders', SlidersController::class)
        ->names(['index' => 'sliders.index']);

    /* BACKOFFICE - About */
    Route::resource('/admin/about', AboutController::class)
        ->names(['index' => 'about.index']);

    /* BACKOFFICE - Restaurant */
    Route::resource('/admin/restaurant', RestaurantController::class)
        ->names(['index' => 'restaurant.index']);

    /* BACKOFFICE - Staff */
    Route::resource('/admin/staff', StaffController::class)
        ->names(['index' => 'staff.index']);

    /* BACKOFFICE - Gallery */
    Route::resource('/admin/gallery', GalleryController::class)
        ->names(['index' => 'gallery.index']);

    Route::resource('/admin/gallerycategory', GalleryCategoryController::class);

    /* BACKOFFICE - Users */
    Route::resource('/admin/users', UserController::class);

    /* BACKOFFICE - Blog */
    /* Route::resource('/blog', BlogController::class)
    ->names(['index' => 'blog.index']); */
});



Route::resource('/review', ReviewController::class);

Route::get('/reviews', function(){
    return view('pages.review');
});


Route::fallback(function(){
    return view('pages.error404');
});

require __DIR__.'/auth.php';
