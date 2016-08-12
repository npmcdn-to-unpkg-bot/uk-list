<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;

class MailController extends Controller
{
    public static function sendVerificationEmail($id, $subject, $to)
    {
        $user = User::findOrFail($id);

        Mail::send('emails.verification', ['title' => 'Verification Required', 'user' => $user], function ($message) use ($subject, $to)
        {
            $message->from('mckenzie-95@hotmail.com', 'UK-List')->to($to)->subject($subject);
        });
    }

    public static function resendVerificationEmail()
    {
        $user = User::findOrFail(Auth::user()->id);

        $to      = $user->email;
        $subject = "We've resent your verification email";

        Mail::send('emails.resendVerification', ['title' => 'Verification Required', 'user' => $user], function ($message) use ($subject, $to)
        {
            $message->from('mckenzie-95@hotmail.com', 'UK-List')->to($to)->subject($subject);
        });

        return 'success';
    }

    public static function sendSuccessEmail($id, $subject, $to)
    {
        $user = User::findOrFail($id);

        Mail::send('emails.success', ['title' => 'Success', 'user' => $user], function ($message) use ($subject, $to)
        {
            $message->from('mckenzie-95@hotmail.com', 'UK-List')->to($to)->subject($subject);
        });
    }
}
