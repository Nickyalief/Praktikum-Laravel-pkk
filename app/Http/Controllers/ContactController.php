<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail; // Import the Mailable class
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // ContactController.php
public function showForm()
{
    return view('contact');
}


    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'number' => 'required|numeric|min:0|max:9999999999',
            'email' => 'required|email|max:50',
            'msg' => 'required|string|max:500',
        ]);

        // Send email
        $details = [
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'msg' => $request->msg,
        ];

        Mail::to('nickyalief7@email.com')->send(new ContactMail($details));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}