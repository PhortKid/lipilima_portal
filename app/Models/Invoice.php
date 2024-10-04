<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
 
    use HasFactory;
    protected $fillable = [
        'invoice_number',
        'customer_id',
        'issue_date',
        'payment_info',
        'total_amount',
   
    ];

    public function invoiceItems()
    {
        return $this->hasMany(InvoiceItem::class, 'invoice_id');
    }

    public function customer()
    {
        return $this->belongsTo(Guest::class, 'customer_id'); // Invoice belongs to a Guest (customer)
    }
}
