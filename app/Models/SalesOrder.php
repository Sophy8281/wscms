<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\SalesOrderItem;
use App\Models\Product;

class SalesOrder extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function sales_order_items() {
        return $this->hasMany(SalesOrderItem::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
