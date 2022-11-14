<?php

use App\Models\Fees;
use App\Models\Student;
use Carbon\Carbon;

function paidAmount($id)
{
    return Fees::where('student_id', $id)->sum('amount');
}

function dueAmount($id)
{
    $student = Student::find($id);
    return $student->net_fees - paidAmount($id);
}

function returnUpcomingBirthdays($pagination = null, $search = null)
{
    if (!empty($search)) {

        return Student::where('full_name', 'like', '%' . $search . '%')->whereMonth('dob', '>=',month(1))->whereMonth('dob', '<=',month(5))->whereDay('dob', '>=', day(1))->whereDay('dob', '<=', day(5))->orderBy('dob', 'asc')->paginate($pagination);
    } else {

    return Student::whereMonth('dob', '>=',month(1))->whereMonth('dob', '<=',month(5))->whereDay('dob', '>=', day(1))->whereDay('dob', '<=', day(5))->orderBy('dob', 'asc')->paginate($pagination);
    }
}

function returnBirthdays($pagination = null, $search = null)
{
    if (!empty($search)) {

        return Student::where('full_name', 'like', '%' . $search . '%')->whereDay('dob', day())->whereMonth('dob', month())->orderBy('dob', 'asc')
            ->paginate($pagination);
    } else {

    return Student::whereDay('dob', day())->whereMonth('dob', month())->orderBy('dob', 'asc')->paginate($pagination);
    }
}

function day($days = 0)
{
    return Carbon::now()->addDays($days)->format('d');
}

function month($days = 0)
{
    return Carbon::now()->addDays($days)->format('m');
}

function daysToGo($dob)
{
    if ($dob == day(1)) {
        return '1 day to go';
    } elseif ($dob == day(2)) {
        return '2 days to go';
    } elseif ($dob == day(3)) {
        return '3 days to go';
    } elseif ($dob == day(4)) {
        return '4 days to go';
    } else {
        return '5 days to go';
    }
}
