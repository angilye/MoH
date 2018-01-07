<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        // regle de validation dans ContactRequest au niveau de APP
        $mailable = new ContactMessageCreated($request->name, $request->email, $request->raison, $request->importance, $request->url, $request->message);

        Mail::to('admin@moh.com')->send($mailable);

        flashy()->success('Votre rapport a bien été transmis, merci de votre aide.');

        return redirect()->route('root_path');
        
    }
}