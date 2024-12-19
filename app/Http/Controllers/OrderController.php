<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'order_items' => 'required|array',
            'order_items.*.post_id' => 'required|exists:posts,id',
            'order_items.*.quantity' => 'required|integer|min:1',
            'order_items.*.total_price' => 'required|numeric',
        ]);

        // Создание нового заказа
        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => collect($request->order_items)->sum('total_price'),
        ]);

        // Создание элементов заказа
        foreach ($request->order_items as $item) {
            // Получаем товар по ID
            $post = Post::find($item['post_id']); // Здесь $item['post_id'] — это ID товара

            OrderItem::create([
                'order_id' => $order->id,
                'post_id' => $item['post_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'total_price' => $item['total_price'],
                'product_name' => $post->title, // Получаем название товара
            ]);
        }

        return inertia('Order/Confirmation', [
            'order' => $order,
        ]);
    }
}
