<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Computer', 'price' => 35000],
            ['name' => 'Printer', 'price' => 25000],
            ['name' => 'Smartphone', 'price' => 20000]
        ];

        return view('products', compact('products'));
    }
}
