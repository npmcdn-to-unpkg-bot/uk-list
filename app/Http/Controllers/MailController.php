<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use App\User;

class MailController extends Controller
{
    public static function send($id, $subject, $to)
    {
        $user = User::findOrFail($id);

        Mail::send('emails.verification', ['title' => 'Verification Required', 'user' => $user], function ($message) use ($user, $subject, $to)
        {
            $message->from('mckenzie-95@hotmail.com', 'UK-List');

            $message->to($to)->subject($subject);

        });
    }
}
