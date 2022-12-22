<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function productCategory()
    {
        return $this->hasMany(ProductCategory::class);
    }

    public function productInventory()
    {
        return $this->belongsTo(ProductInventory::class);
    }

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }
}
