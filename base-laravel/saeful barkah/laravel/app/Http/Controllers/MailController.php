<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = [
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'content' => $request->content,
        ];
        Mail::send('email_template', $data, function ($message) use ($data) {
            $message->to($data['email'])
            ->subject($data['subject']);
        });
        return back();
    }
}
