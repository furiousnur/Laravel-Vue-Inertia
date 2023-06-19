<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    function HomePage(){
        return Inertia::render('Index')->withViewData(['title'=>'Home Page']);
    }

    function ProductPage(){
        return Inertia::render('Portfolio/Product')->withViewData(['title'=>'Product Page']);
    }
}
