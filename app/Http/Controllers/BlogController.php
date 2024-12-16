<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

use App\Models\User;



class BlogController extends Controller
{
    // Show the form to create a new blog post
    public function create_blog()
    {

        return view('create_blog');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'blog_text' => 'nullable|string|max:1000',
           
        ]);

        $data = $request->all();

        Blog::create($data);

        return redirect('/create_blog/view');


    }


    public function create_blog_view(){

        $blog_data = Blog::all();


        return view('blogs',compact('blog_data'));
    }



}
