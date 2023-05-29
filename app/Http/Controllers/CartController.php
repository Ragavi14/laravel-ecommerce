<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{      
    public function cart ($id){ 
        
    //
    $product = Product::where('id','=',$id)->get();
    // 
    // $qty = $products->quantity;
    // $price = $products->price;
    // $products->total_price = $quantity * $price;
    
    $cart = Cart::where('id','=',$id)->get();
    return view('cart',['product'=> $product], ['cart'=> $cart]);
}

public function store (Request $request) {
       
        // $cart = new Cart();
        // $cart->product_id = $request->product_id;
        // $cart->price =  $request->price;
        // $cart->quantity = $request->quantity;
        // $cart->save();
        // $carts = Cart::with('product')->get();
        // echo '<pre>';
        // print_r($carts);
        // exit();
        return view('checkout');
}
public function checkout(){
    return view('checkout');
}
}