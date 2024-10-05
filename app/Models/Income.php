<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $table = 'income';  // Table name
    protected $primaryKey = 'id';  // Primary key
    public $timestamps = true;      // Enable timestamps

    // Define the relationship with IncomeCategory
    public function incomecategory()
    {
        return $this->belongsTo(IncomeCategory::class, 'category_id'); // Adjusted to match the foreign key
    }
}
