<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'amount', 'date'];

    public static array $rules = [
        'amount' => 'required|lte:payable_fees',
        'confirm_amount' => 'required|same:amount',
    ];
}
