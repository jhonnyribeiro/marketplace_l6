<?php

namespace App\Http\Controllers;

use App\Product;

class HomeController extends Controller
{

    private $prouct;

    public function __construct(Product $product)
    {
        $this->prouct = $product;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = $this->prouct->limit(8)->orderBy('id', 'DESC')->get();

        return view('welcome', compact('products'));
    }
}
