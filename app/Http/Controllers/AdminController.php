<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Requests;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
        $is_admin = auth()->user()->admin;

        if ($is_admin == 1) {

            return view('admin.index');
        }

        return redirect()->route('user.dashboard')->with('error', 'Area restrita para administradores do sistema');
    }

    public function products()
    {
        $is_admin = auth()->user()->admin;

        if ($is_admin == 1) {

            $products = new Products();

            return view('admin.products', [
                'products' => $products->all()
            ]);
        }

        return redirect()->route('user.dashboard')->with('error', 'Area restrita para administradores do sistema');
    }

    public function refunds()
    {
        $is_admin = auth()->user()->admin;

        if ($is_admin == 1) {

            $refunds = new Requests();

            return view('admin.refunds', [
                'refunds' => $refunds->all()
            ]);
        }

        return redirect()->route('user.dashboard')->with('error', 'Area restrita para administradores do sistema');
    }

    public function users()
    {
        $is_admin = auth()->user()->admin;

        if ($is_admin == 1) {

            $users = new User();

            return view('admin.users', [
                'users' => $users->all()
            ]);
        }

        return redirect()->route('user.dashboard')->with('error', 'Area restrita para administradores do sistema');
    }

}
