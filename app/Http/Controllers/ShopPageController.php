<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();

        return view('shop')->with('products',$products);
    }
    public function show($slug){

        $product = Product::where('slug', $slug)->firstOrFail();
        $moreProducts = Product::where('slug', '!=', $slug)->inRandomOrder()->take(4)->get();
        return view('product')->with([
            'product' => $product,
            'moreProducts' => $moreProducts,
        ]);
    }
}
