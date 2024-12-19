<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
class MenuController
{
    public function index()
    {
        $orders = Order::with('user')->get();

        return inertia('Admin/Orders/Index', [
            'orders' => $orders,
        ]);
    }
}
