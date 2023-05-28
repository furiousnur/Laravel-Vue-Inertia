<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    function BlogPage(){
        return Inertia::render('Blogs/Blogs')->withViewData(['title'=>'Blogs Page']);
    }
}
