<?php

namespace App\Http\Controllers;

use App\Models\ContactMe;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    function ContactPage(){
        return Inertia::render('Contact/Contact')->withViewData(['title'=>'Contact Page']);
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ],
        [
            'name.required'=> 'Name Field is Required', // custom message
            'email.required'=> 'Email Field is Required', // custom message
            'subject.required'=> 'Subject Field is Required', // custom message
            'message.required'=> 'Message Field is Required', // custom message
        ]);

        $contact = new ContactMe();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect()->back()->with('success', 'Your message has been sent successfully');
        /*return Inertia::render('Contact/ContactForm', [
            'success' => 'Your message has been sent successfully'
        ]);*/
    }
}
