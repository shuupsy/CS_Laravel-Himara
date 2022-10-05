<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/* Route::get('/', function () {
    return view('pages.home');
}); */

Route::resource('/', HomeController::class)
    ->names(['index' => 'home.index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
