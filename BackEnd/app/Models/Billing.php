<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = ["bill_amount", "addtional_charge",     "discount","vat ","advance", "billing_month","dues",     "customer_id"];

    public function payments()
    {
        $this->hasMany(Payment::class);
    }

    public function customer()
    {
        $this->belongsTo(Customer::class);
    }
}
