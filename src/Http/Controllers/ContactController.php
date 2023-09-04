<?php

namespace Gepe\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Gepe\Contact\Mail\ContactMailable;
use Gepe\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        try {
            Contact::create($request->all());
            Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
            return redirect()->back()->with('success','Thank you for contacting us');
        }catch (Exception $err){
            dd($err);
        }
    }
}
