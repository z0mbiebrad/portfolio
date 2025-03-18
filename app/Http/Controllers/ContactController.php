<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'phone-number' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Send an email (you can customize the email mailable)
        Mail::to('bradleyt.evans@gmail.com')->send(new \App\Mail\ContactFormMail($validated));

        // Return a response
        return redirect()->route('home', ['#contact'])->with('success', 'Thank you for your message!');
    }
}