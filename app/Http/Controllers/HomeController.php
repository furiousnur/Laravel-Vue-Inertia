<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    function HomePage(){
        $data = [
            'name' => 'Nur Alam',
            'age' => 28,
        ];
        return Inertia::render('Index')->withViewData(['title'=>'Home Page']);
//        return Inertia::render('Home',['data' => $data])->withViewData(['title'=>'Home Page']);
    }

    function ProductPage(){
        return Inertia::render('Product')->withViewData(['title'=>'Product Page']);
    }
}
