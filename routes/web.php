<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;

//Resource routes

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

//user related routes

//Route::get('/register', UserController::class, 'create');

// show create form
Route::get('/create', [PostsController::class, 'create']);

// store blog post
Route::post('/store', [PostsController::class, 'store']);







//static pages. Must be in the beginning of all, before handling blog pages

Route::get('/cookie-policy', function () {
    return view('cookie-policy');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/credits', function() {
    return view('credits');
});

//end of static pages




Route::get("/away", function () {
    return redirect()->away('https://www.bing.com');
});


//posts related routes

// show all post
Route::get('/', [PostsController::class, 'index']);


//show a single post
Route::get('/{title}', [PostsController::class, 'show']);

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware(['auth', 'verified'])->name('auth.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';*/
