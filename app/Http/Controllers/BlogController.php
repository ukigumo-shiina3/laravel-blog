<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    @return view

    public function showList()
    {
        $blogs = Blog::all();

        return view('blog.list', ['blogs' => $blogs]);
    }
}
