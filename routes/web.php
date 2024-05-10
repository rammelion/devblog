<?php

use App\Models\Posts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get("/away", function () {
    return redirect()->away('https://www.bing.com');
});

/*Route::get('/', function (Request $request) {
        return view('index');
    }
);*/

// show all post unfiltered
Route::get('/', [PostsController::class, 'index']);



//show a single post

Route::get('/{title}', [PostsController::class, 'show']);

/*Route::get('/{title}', function ($title) {
    return view('index', [
        'post' => Posts::findByTitle($title),
        'action' => 'show'
    ]);
});*/

// Route::get('/',[ThemeController::class, 'readCookie']);


Route::get('/cookie-policy', function () {
    return view('cookie-policy');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
