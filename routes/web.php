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

Route::get('/', [PostsController::class, 'index']);


// Route::get('/',[ThemeController::class, 'readCookie']);


Route::get('/cookie-policy', function () {
    return view('cookie-policy');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
