<?php

namespace App\Http\Controllers;

use App\MailList;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $fullname = $request->input('fullname');
        $email    = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');

        $email_check       = User::where('email', $email)->get();
        $username_check    = User::where('username', $username)->get();

        if(count($email_check) == 1)
        {
            return 'email_exists';
        }
        else if(count($username_check) == 1)
        {
            return 'username_exists';
        }
        else
        {
            User::create([
                'full_name' => $fullname,
                'username'  => $username,
                'email'     => $email,
                'password'  => bcrypt($password),
            ]);
        }

//      Authenticate the user after registering
        Auth::attempt(['email' => $email, 'password' => $password]);

        $userid = Auth::user()->id;


        if($request->input('r-offers') != null)
        {
            $MailList = new MailList();
            $MailList->user_id  = $userid;
            $MailList->email    = $email;
            $MailList->username = $username;
            $MailList->save();
        }

        return 'success';

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
