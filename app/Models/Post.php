<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = false;
    protected $table = 'posts';
    protected $fillable = ['title', 'description', 'price', 'image'];
}
