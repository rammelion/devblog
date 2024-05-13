<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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


Route::get('/cookie-policy', function () {
    return view('cookie-policy');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
