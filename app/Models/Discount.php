<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getRouteKeyName()
    {
        return 'id';
    }


    public function product()
    {
        return $this->hasMany(Product::class);
    }


    
}
