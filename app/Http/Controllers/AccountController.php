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

    public function __contruct()
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

//      If user is in mailing list then do this also
//        if(MailList::where('email', Crypt::decrypt($key))->get())

//        MailList::where('email', Crypt::decrypt($key))->update(['confirmed' => 1]);

        return redirect('/user/me');

    }
}
