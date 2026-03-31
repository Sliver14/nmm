<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // In a real application, you might send an email here
        // Mail::to('contact@networkformedicalmissions.org')->send(new ContactFormMail($validated));

        return back()->with('success', 'Thank you for contacting us! We have received your message and will get back to you shortly.');
    }
}
