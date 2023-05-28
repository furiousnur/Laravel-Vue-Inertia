<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    function ContactPage(){
        return Inertia::render('Contact')->withViewData(['title'=>'Contact Page']);
    }
}
