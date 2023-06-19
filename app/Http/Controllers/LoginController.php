<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LoginController extends Controller
{
    function index(){
        return Inertia::render('Admin/Login')->withViewData(['title'=>'Admin Login']);
    }
}
