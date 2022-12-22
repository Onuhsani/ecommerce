<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getRouteKeyName()
    {
        return 'id';
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function paymentDetail()
    {
        return $this->hasOne(PaymentDetail::class);
    }


    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }
}