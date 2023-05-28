<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    function PortfolioPage(){
        return Inertia::render('Portfolio/Portfolio')->withViewData(['title'=>'Portfolio Page']);
    }
}
