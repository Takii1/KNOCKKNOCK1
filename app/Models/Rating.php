<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable=[
        'user_id',
        'product_id',
        'order_id',
        'rating',
        'comment'
      ];
}
