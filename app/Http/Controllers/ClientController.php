<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Product;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        $sliders = Slider::where('status', 1)->get();
        $products = Product::where('status' , 1)->get();
        return view('client.home')->with('sliders', $sliders)->with('products', $products);
    }

    public function shop(){
        return view('client.shop');
    }

    public function cart(){
        return view('client.cart');
    }

    public function checkout(){
        return view('client.checkout');
    }

    public function client_login() {
        return view('client.login');
    }

    public function signup() {
        return view('client.signup');
    }

}
