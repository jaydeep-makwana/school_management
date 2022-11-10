<?php

use App\Models\Fees;
use App\Models\Student;
use Carbon\Carbon;
use SebastianBergmann\Type\NullType;

function paidAmount($id)
{
    return Fees::where('student_id', $id)->sum('amount');
}

function dueAmount($id)
{
    $student = Student::find($id);
    return $student->net_fees - paidAmount($id);
}

function returnUpcomingBirthdays($pagination = null)
{
    return Student::whereBetween('dob', [addDays(1), addDays(5)])->orderBy('dob', 'asc')->paginate($pagination);
}

function returnBirthdays($pagination = null)
{
    return Student::where('dob', Date('Y-m-d'))->paginate($pagination);
}

function addDays($addDays)
{
    return Carbon::now()->addDays($addDays)->toDateString();
}

function daysToGo($dob)
{
    if ($dob == addDays(1)) {
        return '1 day to go';
    } elseif ($dob == addDays(2)) {
        return '2 days to go';
    } elseif ($dob == addDays(3)) {
        return '3 days to go';
    } elseif ($dob == addDays(4)) {
        return '4 days to go';
    } else {
        return '5 days to go';
    }
}
