<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getRouteKeyName()
    {
        return 'id';
    }


    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function shoppingSession()
    {
        return $this->belongsTo(ShoppingSession::class);
    }
}
