<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $table = 'expenses';
    public $primaryKey = 'id';
    public $timestamps = true;

    // Define the relationship with ExpenseType
    public function expensetype()
    {
        return $this->belongsTo(ExpenseType::class, 'category_id');
    }
}
