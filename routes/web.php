<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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


// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

Route::get("/away", function () {
    return redirect()->away('https://www.bing.com');
});

/*Route::get('/', function (Request $request) {
        return view('index');
    }
);*/

// show all post
Route::get('/', [PostsController::class, 'index']);


//show a single post
Route::get('/{title}', [PostsController::class, 'show']);

// create new post
Route::get('/create', [PostsController::class, 'create']);


