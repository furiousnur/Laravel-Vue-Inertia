<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    function AboutPage(){
        return Inertia::render('About/About')->withViewData(['title'=>'About Page']);
    }
}
