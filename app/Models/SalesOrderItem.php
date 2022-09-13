<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SalesOrder;

class SalesOrderItem extends Model
{
    use HasFactory;

    public function sales_order() {
        return $this->belongsTo(SalesOrder::class);
    }
}
