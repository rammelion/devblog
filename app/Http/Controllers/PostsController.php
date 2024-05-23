<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostsController extends Controller
{
    
    //Show all post filtered|unfiltered
    public function index() {
        Posts::updatePublished(); //later get it off and put in job queue
        return view('index', [
            'posts' => Posts::orderBy('published_at', 'desc')->filter(request(['tag', 'search', 'author']))->get(),
            'action' => 'index'
        ]);
    }



    //show single post
    public function show($title) {
        return view('index', [
            'post' => Posts::findByTitle($title),
            'action' => 'show'
        ]);
    }

    //Show posts of a user
    public function userPosts($id) {
        return view('index', [
            'posts' => Posts::where('user_id', $id)->get(),
            'action' => 'index'
        ]);
    }

    // show create form
    public function create() {
        return view('create');
    }

    public function store( Request $request) {
        //dd($request);
            $formFields = $request->validate([
                'title' => 'required|unique:posts|max:255',
                'tags' => 'nullable',   //create do not save unvalidated fields!
                'body' => 'required',
            ]);
            
            if ($request->hasFile('featuredImage')) {
                $formFields['featuredImage'] = $request->file('featuredImage')->store('gallery', 'public');
            }

            //$formFields['user_id'] = auth()->id;
            $formFields['user_id'] = 1;
            $formFields['body'] = '<p>' . preg_replace("/\r\n|\r|\n/", '</p><p>', $formFields['body']) . '</p>';
            Posts::create($formFields);
            return redirect("/");
    } 



}