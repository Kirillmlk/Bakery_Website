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
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'quantity' => 'nullable|integer|min:1',
        ]);

        $cartItem = Cart::where('user_id', auth()->id())
            ->where('post_id', $request->post_id)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity', $request->quantity ?? 1);
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'post_id' => $request->post_id,
                'quantity' => $request->quantity ?? 1,
            ]);
        }

        return redirect()->route('cart.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate(['quantity' => 'required|integer|min:1']);

        $cartItem = Cart::where('user_id', auth()->id())->findOrFail($id);
        $cartItem->update(['quantity' => $request->quantity]);

        return redirect()->route('cart.index');
    }

    public function destroy($id)
    {
        $cartItem = Cart::where('user_id', auth()->id())->findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart.index');
    }
}
