<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = [
            [
                'name' => 'Laptop',
                'price' => 'Rp. 10.000.000'
            ],
            [
                'name' => "Handpone",
                'price' => 'Rp. 5.000.000'
            ]
            ];
    }
}
