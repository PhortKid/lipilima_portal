<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeCategory extends Model
{
    use HasFactory;
    protected $table='income_category';
    public $primarykey='id';
    public $timestamp =true;
}
