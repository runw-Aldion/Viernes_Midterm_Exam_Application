<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $theme = "Gadgets (Phones)";

        $products = [
            [
                'brand' => 'Apple',
                'model' => 'iPhone 15 Pro',
                'storage' => '256GB',
                'price' => 84990
            ],
            [
                'brand' => 'Samsung',
                'model' => 'Galaxy S24 Ultra',
                'storage' => '256GB',
                'price' => 78990
            ],
            [
                'brand' => 'Huawei',
                'model' => 'P60 Pro',
                'storage' => '256GB',
                'price' => 69990
            ],
            [
                'brand' => 'Apple',
                'model' => 'iPhone 13',
                'storage' => '128GB',
                'price' => 34990
            ],
            [
                'brand' => 'Samsung',
                'model' => 'Galaxy A55',
                'storage' => '128GB',
                'price' => 24990
            ],
        ];

        return view('products', compact('theme', 'products'));
    }
}