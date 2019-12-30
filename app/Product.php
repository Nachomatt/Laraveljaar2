<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
    ];
    public function shoppingCart()
    {
        return $this->hasMany('App\Shoppingcart');
    }
    public function wishList()
    {
        return $this->hasMany('App\Wishlist');
    }
}
