<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    function HomePage(){
        return Inertia::render('Index')->withViewData(['title'=>'Home Page']);
    }

    function AdminLogin(){
        return Inertia::render('Admin/Login')->withViewData(['title'=>'Admin Login']);
    }
}
