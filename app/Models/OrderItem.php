<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'post_id',
        'quantity',
        'price',
        'total_price',
    ];

    // Связь с заказом (Order)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Связь с товаром (Post)
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
