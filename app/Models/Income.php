<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $table='income';
    public $primarykey='id';
    public $timestamp =true;

    public function incomecategory()
    {
        return $this->belongsTo(IncomeCategory::class, 'categories_id'); // Invoice belongs to a Guest (customer)
    }
}
