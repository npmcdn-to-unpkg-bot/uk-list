<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
}
