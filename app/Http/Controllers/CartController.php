<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('post')->where('user_id', auth()->id())->get();

        return inertia('Cart/Index', [
            'cartItems' => $cartItems,
        ]);
    }
}
