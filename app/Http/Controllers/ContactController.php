<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'inquiry_type' => 'required|string|in:speaking,collaboration,media,other',
            'message' => 'required|string',
        ]);

        // Send email notification
        Mail::to('contact@kateonearth.com')->send(new ContactFormSubmission($validated));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Thank you for your message! I will get back to you soon.');
    }
} 