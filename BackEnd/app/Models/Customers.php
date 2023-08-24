<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = ["name", "mobile", "customer_type", "monthly_bill", "additional_charge", "discount", "advance", "active", "connection_date", "bill_genarate_status", "note", "bill_collector", "number_of_connection"];
    //Bisnu Start
    function customer_address()
    {
        return $this->hasMany(Customer_address::class, 'customer_id');
    }

    function customer_history()
    {
        return $this->hasMany(Customer_history::class, 'customer_id');
    }
    //Bisnu End
    // Nafiz Start
    public function billings()
    {
        return $this->hasMany(Billing::class, 'customer_id');
    }
    // get last bill for payment
    public function lastBill()
    {
        return $this->hasMany(Billing::class, 'customer_id')->latest()->take(1)->get();
    }
    // Nafiz End
    public function diposit()
    {
        return $this->Hasmany(Diposit::class, 'customer_id');
    }
}
