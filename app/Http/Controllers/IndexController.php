<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class IndexController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function products()
    {
        $products = new Products();
        return view('products', [
            'products' => $products->paginate(8)
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
