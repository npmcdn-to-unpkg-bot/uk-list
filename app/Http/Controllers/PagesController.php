<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AccountController;

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
        return view('emails.verification');
    }

    public function userAccount()
    {
        $user = AccountController::getUser();
        return view('overview.user.account', compact('user'));
    }
}
