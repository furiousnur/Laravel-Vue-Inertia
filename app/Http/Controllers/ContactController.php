<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\ContactMe;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    function ContactPage(){
        return Inertia::render('Contact/Contact')->withViewData(['title'=>'Contact Page']);
    }

    public function storeMessage(Request $request)
    {
        $contact = new ContactMe();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        return Inertia::render('Contact/ContactForm', [
            'success' => 'Your message has been sent successfully'
        ]);
    }
}
