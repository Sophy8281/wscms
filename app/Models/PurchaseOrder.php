<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\PurchaseOrderItem;
use App\Models\Product;

class PurchaseOrder extends Model
{
    use HasFactory;

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function purchase_order_items() {
        return $this->hasMany(PurchaseOrderItem::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
