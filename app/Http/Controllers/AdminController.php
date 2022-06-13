<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        $is_admin = auth()->user()->admin;

        if ($is_admin == 1) {
            return view('admin.index');
        }

        return view('user.dashboard');
    }

    public function products()
    {
        $is_admin = auth()->user()->admin;

        if ($is_admin == 1) {
            return view('admin.products');
        }

        return view('user.dashboard');
    }

    public function refunds()
    {
        $is_admin = auth()->user()->admin;

        if ($is_admin == 1) {
            return view('admin.refunds');
        }

        return view('user.dashboard');
    }

    public function users()
    {
        $is_admin = auth()->user()->admin;

        if ($is_admin == 1) {
            return view('admin.users');
        }

        return view('user.dashboard');
    }

}
