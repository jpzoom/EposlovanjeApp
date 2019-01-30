<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class Order extends Model
{
    protected $fillable=['total', 'delivered'];

    public function orderItems() {
        return $this->belongsToMany(Product::class)->withPivot('qty', 'total');
    }

}
