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

            $requests = new Requests();
            $products = new Products();
            $users = new User();

            return view('admin.index', [
                'products' => $products,
                'requests' => $requests,
                'users'    => $users,
            ]);
        }

        return redirect()->route('user.dashboard')->with('error', 'Area restrita para administradores do sistema');
    }

    public function products()
    {
        $is_admin = auth()->user()->admin;

        if ($is_admin == 1) {

            $products = new Products();

            return view('admin.products', [
                'products' => $products->paginate(10)
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
                'refunds' => $refunds->paginate(10)
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
                'users' => $users->paginate(10)
            ]);
        }

        return redirect()->route('user.dashboard')->with('error', 'Area restrita para administradores do sistema');
    }

    public function refund_approve($id)
    {
        $is_admin = auth()->user()->admin;

        if ($is_admin == 1) {

            $requests = new Requests();

            $requests->find($id)->update(['status' => 4]);

            return redirect()->back()->with('success', 'Reembolso Aprovado com sucesso');
        }
    }

    public function refund_deny($id)
    {
        $is_admin = auth()->user()->admin;

        if ($is_admin == 1) {

            $requests = new Requests();

            $requests->find($id)->update(['status' => 3]);

            return redirect()->back()->with('success', 'Reembolso Negado com sucesso');
        }
    }

}
