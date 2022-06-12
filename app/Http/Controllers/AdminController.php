<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    
    public function products()
    {
        return view('admin.products');
    }
    public function refunds()
    {
        return view('admin.refunds');
    }
    public function users()
    {
        return view('admin.users');
    }

}
