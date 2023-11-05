<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customers";

    protected $fillable = [
        'customerNumber',
        'customerName',
        'contactLastName',
        'contactFirstName',
        'phone',
        'addressLine1',
        'addressLine2',
        'city',
        'state',
        'postalCode', 'country', 'salesRepEmployeeNumber','creditLimit'];
    public $timestamps = false;

    protected $primaryKey = 'customerNumber';
    function getAllAddress() {
        return $this->addressLine1 ." " . $this->addressLine2;
    }

    function orders() {
        return $this->hasMany(Order::class, 'customerNumber');
    }

}
