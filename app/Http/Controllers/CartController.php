<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('cart');
    }

    public function store(Request $request){
      Cart::add($request->id, $request->name, 1, $request->price)
      ->associate('App\Product');
      return redirect()->route('cart.index')->with('success_message','Item was added to cart');
    }
    public function destroy($id){
      Cart::remove($id);
      return back()->with('success_message','Item has been removed');
    }
}
