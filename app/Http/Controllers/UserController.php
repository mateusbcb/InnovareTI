<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.dashboard');
    }

    public function requests()
    {
        return view('user.requests');
    }
}
