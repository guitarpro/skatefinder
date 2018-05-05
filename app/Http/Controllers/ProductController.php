<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Cart;
use App\Http\Requests;
use Session;

class ProductController extends Controller
{

    public function getIndex(){
        $products = Product::all();
        return view('pages.products', ['products' => $products]);
    }
	
	public function getAddToCart(Request $request, $id) {
		$product = Product::find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		$cart->add($product, $product->id);
		
		$request->session()->put('cart', $cart);
		return redirect()->route('products');	
	}
    
    public function getCart() {
        if (!Session::has('cart')) {
            return view('pages.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    
    public function checkout(){
        if (!Session::has('cart')) {
            return view('pages.checkout');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
