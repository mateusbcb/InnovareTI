<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;
use App\Models\User;
use App\Models\Products;

class UserController extends Controller
{

    public function dashboard()
    {
        $requests = new Requests();
        $products = new Products();
        $users = new User();

        return view('user.dashboard', [
            'products' => $products,
            'requests' => $requests,
            'users'    => $users,
        ]);
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function requests()
    {
        $requests = new Requests();

        $user_id = auth()->user()->id;

        return view('user.requests', [
            'requests' => $requests->where('user_id', $user_id)->get()
        ]);
    }

    public function refund_request()
    {
        $requests = new Requests();

        $user_id = auth()->user()->id;

        return view('user.refund-request', [
            'requests' => $requests->where('user_id', $user_id)->get()
        ]);
    }

    public function send_refund_request(Request $request)
    {
        $requests = new Requests();

        $products = count($request->products);

        $user_id = auth()->user()->id;

        for ($i=0; $i < $products; $i++) {
            $requests->create([
                'product_id' => $request->products[$i],
                'user_id' => $user_id,
                'price' => $request->prices[$i],
                'status' => 2
            ]);
        }

        return redirect()->route('user.requests')->with('success', 'Reembolso enviado com sucesso, Aguardando Análise');
    }
}
