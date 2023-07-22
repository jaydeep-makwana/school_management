<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    # we have use enum data type for gender column, so its consider as index array(check migration file for more details)
    public const MALE = 1;
    public const FEMALE = 2;

    public const GENDER = [
        self::MALE => 'M',
        self::FEMALE => 'F',
    ];

    public function courses()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }

    public function studentFees()
    {
        return $this->hasMany(Fees::class);
    }
}
