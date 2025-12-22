<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'amount',
        'expenses_date',
        'note',
        'created_by',
    ];
}
