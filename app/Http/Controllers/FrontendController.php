<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FrontendController extends Controller
{
    function HomePage(){
        return Inertia::render('Index')->withViewData(['title'=>'Home Page']);
    }

    function AdminLogin(){
        return Inertia::render('Admin/Login')->withViewData(['title'=>'Admin Login']);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
