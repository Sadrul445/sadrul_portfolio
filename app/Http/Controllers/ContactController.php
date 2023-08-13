<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        $contacts = Contact::all();
        return view('layouts.portfolio.master', compact('contacts'));
    }
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->reason = $request->input('reason');
        $contact->msg = $request->input('msg');
        $contact->save();

        Mail::to($contact->email)->send(new ContactMail(
            $contact->name,
            $contact->email,
            $contact->reason,
            $contact->msg,
        ));
        return redirect('/');
    }
}
