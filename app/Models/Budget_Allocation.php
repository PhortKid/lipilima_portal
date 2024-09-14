<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget_Allocation extends Model
{
    use HasFactory;
    protected $table='budget_allocations';
    public $primarykey='id';
    public $timestamp =true;

}
