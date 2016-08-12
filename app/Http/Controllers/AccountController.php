<?php

namespace App\Http\Controllers;

use App\MailList;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class AccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public static function getUser()
    {
        return Auth::user();
    }

    public static function verifyUser($key)
    {

        User::where('email', Crypt::decrypt($key))->update(['confirmed' => 1]);
        MailList::where('email', Crypt::decrypt($key))->update(['confirmed' => 1]);

        return redirect('auth/verification/success');
    }

    public function showVerificationSuccess()
    {
        if(!Auth::check()){return redirect('/');}

        $message = 'Thank you for signing up!';

        MailController::sendSuccessEmail(Auth::user()->id, $message, Auth::user()->email);

        return view('auth.verificationSuccess');

    }
}
