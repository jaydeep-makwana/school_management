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

    protected $fillable = [
        'full_name',
        'address',
        'contact_no',
        'dob',
        'gender',
        'qualification',
        'occupation',
        'counselling_by',
        'cast',
        'course_id',
        'authorization',
        'fees',
        'start_date',
        'end_date',
        'discount',
        'start_batch_time',
        'end_batch_time',
        'net_fees',
        'discount_offer',
        'join_date',
        'parent_name',
        'parent_contact',
        'parent_occupation',
    ];

    public static array $rules = [
        'full_name' => 'required',
        'address' => 'required',
        'contact_no' => 'required|numeric|digits:10',
        'dob' => 'required|date',
        'gender' => 'required',
        'cast' => 'required',
        'qualification' => 'required',
        'occupation' => 'required',
        'counselling_by' => 'required',
        'course_id' => 'required',
        'authorization' => 'required',
        'fees' => 'required|numeric',
        'start_date' => 'required',
        'end_date' => 'required|after:start_date',
        'start_batch_time' => 'required|before:end_batch_time',
        'end_batch_time' => 'required|after:start_batch_time',
        'discount_offer' => 'required_with:discount',
        'discount' => 'required_with:discount_offer|nullable|numeric',
        'join_date' => 'required',
        "parent_name" => "required",
        "parent_contact" => "required|numeric|digits:10",
        "parent_occupation" => "required",
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
