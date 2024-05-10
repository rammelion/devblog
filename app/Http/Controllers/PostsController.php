<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    //Show all post unfiltered
    public function index() {
        return view('index', [
            'posts' => Posts::all()->sortDesc()
        ]);
    }
    
    //Show all post filtered|unfiltered
    /*public function index() {
        return view('index', [
            'posts' => Posts::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }*/



    //show single post
    public function show(post $post) {
        return view('index', [
            'post' => $post
        ]);
    }
}
