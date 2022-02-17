<?php

namespace Codepia\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Codepia\Contact\Mail\ContactMailable;
use Codepia\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request){
        //dd($request->name);
         Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name, $request->email));
         Contact::create($request->all());

         return back();
    }
}
