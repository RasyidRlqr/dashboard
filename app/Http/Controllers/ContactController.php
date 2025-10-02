<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('rsyid@rl.anomalihitam.my.id')
                    ->subject('New Contact Form Message from ' . $request->name)
                    ->from($request->email, $request->name);
        });

        return back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}