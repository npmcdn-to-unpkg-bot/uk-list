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
        $offers   = $request->input('offers');

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


//      Add users to the mailing list if they chose to be
        if($offers != null)
        {
            $mailist = new MailList();
            $mailist->user_id  = $userid;
            $mailist->email    = $email;
            $mailist->username = $username;
            $mailist->save();
        }

//      Send a confirmation email to the user
        MailController::send($userid, 'Verification Required', $email);

        return 'success';

    }

    public function login(Request $request)
    {

        $username    = $request->input('l-username');
        $password    = $request->input('l-password');

        if(Auth::attempt(['email' => $username, 'password' => $password]))
        {
            return 'auth!';
        }
        else if(Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return 'auth!';
        }
        else
        {
            return 'error';
        }

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
