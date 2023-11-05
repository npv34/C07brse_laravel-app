<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'orderNumber';

    protected $fillable = ['orderNumber', 'orderDate', 'requiredDate', 'shippedDate', 'status', 'customerNumber'];

    function customer() {
        return $this->belongsTo(Customer::class, 'customerNumber');
    }
}
