<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::send('emails.send', ['title' => 'Test Title', 'content' => 'Hey! This is a test mail kenzie!'], function ($message)
        {

            $message->from('mckenzie-95@hotmail.com', 'UKLIST!');

            $message->to('mckenzie-95@hotmail.com');

        });
    }
}
