<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreOrderRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(StoreOrderRequest $request)
    {
        // Валидация уже выполнена через FormRequest

        // Создание нового заказа
        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => collect($request->order_items)->sum('total_price'),
        ]);

        // Создание элементов заказа
        foreach ($request->order_items as $item) {
            $post = Post::find($item['post_id']);

            OrderItem::create([
                'order_id' => $order->id,
                'post_id' => $item['post_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'total_price' => $item['total_price'],
                'product_name' => $post->title,
            ]);
        }

        // Очистка корзины после создания заказа
        $this->clearCart();

        // Возвращаем данные для отображения страницы подтверждения
        return inertia('Order/Confirmation', [
            'order' => $order,
        ]);
    }

    protected function clearCart()
    {
        // Удаление всех товаров в корзине текущего пользователя
        Cart::where('user_id', Auth::id())->delete();
    }
}
