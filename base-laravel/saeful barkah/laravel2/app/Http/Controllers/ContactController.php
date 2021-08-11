<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact.index');
    }

    public function postContact(Request $request)
    {
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message,
        );
        Mail::send('emails.contact', $data , function($message) use ($data){
            $message->from($data['email']);
            $message->to('barkahgaming00102@gmail.com');
            $message->subject($data['subject']);
        });

        return redirect()->back();
    }
}
