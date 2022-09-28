<?php

use App\Models\Fees;
use App\Models\Student;

function paidAmount($id)
{
    return Fees::where('student_id', $id)->sum('amount');
}

function dueAmount($id)
{
    $student = Student::find($id);
    return $student->net_fees - paidAmount($id);
}