<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AccountController;
use App\MailList;
use Illuminate\Support\Facades\Crypt;

class PagesController extends Controller
{
    public function homepage()
    {
        return view('home');
    }

    public function loginpage()
    {
        return view('auth.login');
    }

    public function testpage()
    {
//      USE MEEE!
    }

    public function userAccount()
    {
        if(!Auth::check()){return redirect('/');}
        $user = AccountController::getUser();
        return view('overview.user.account', compact('user'));
    }
}
