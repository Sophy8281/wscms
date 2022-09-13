<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PurchaseOrder;

class PurchaseOrderItem extends Model
{
    use HasFactory;

    public function purchase_order() {
        return $this->belongsTo(PurchaseOrder::class);
    }
}
