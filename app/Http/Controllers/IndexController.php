<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class IndexController extends Controller
{

    public function index()
    {
        $contacts= Contact::all();
        return view('index',compact('contacts'));
    }

    public function contact(Request $request)
    {
        $request->validate([
         'name' => 'required',
         'email' => 'required|email',
         'subject' => 'required',
         'message' => 'required',
        ]);

       $contact= new Contact();
       $contact->name= $request->name;
       $contact->email= $request->email;
       $contact->subject= $request->subject;
       $contact->message= $request->message;
       $contact->save();

        return back()->with('success','We have received your message, Asanti kwa kutupea jibu yako');
    }
}
