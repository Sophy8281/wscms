<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PurchaseOrder;

class Supplier extends Model
{
    use HasFactory;

    public function purchase_orders() {
        return $this->hasMany(PurchaseOrder::class);
    }
}
