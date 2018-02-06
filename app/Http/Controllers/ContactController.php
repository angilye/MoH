<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
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

    public function createWarzone()
    {
        return view('pagesWarzone.contacts.createTicket');
    }

    public function store(ContactRequest $request)
    {
        $messageb = $request->all();
        
        if($messageb['url'] === null)
        {
            $messageb['url'] = 'Non fournie';
        }

        if($messageb['pseudo'] === null)
        {
            $messageb['pseudo'] = 'Non fournie';
        }
        if($messageb['email'] === null)
        {
            $messageb['email'] = 'Non fournie';
        }
        // regle de validation dans ContactRequest au niveau de APP
        
        $message = ContactMessage::create($messageb);

        
         $mailable = new ContactMessageCreated($message);

         Mail::to( config('moh.admin_support_email') )->send($mailable);

         flashy()->success('Votre rapport a bien été transmis, merci de votre aide.');

         return redirect()->route('root_path');
        
    }

    public function storeWarzone(ContactRequest $request)
    {
        $messageb = $request->all();
        
        if($messageb['url'] === null)
        {
            $messageb['url'] = 'Non fournie';
        }
        if($messageb['pseudo'] === null)
        {
            $messageb['pseudo'] = 'Non fournie';
        }
        if($messageb['email'] === null)
        {
            $messageb['email'] = 'Non fournie';
        }

        // regle de validation dans ContactRequest au niveau de APP
        
        $message = ContactMessage::create($messageb);

        
         $mailable = new ContactMessageCreated($message);

         Mail::to( config('moh.admin_support_email') )->send($mailable);

         flashy()->success('Votre rapport a bien été transmis, merci de votre aide.');

         return redirect()->route('warzonefr_path');
        
    }
}