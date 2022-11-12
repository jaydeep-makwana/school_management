<?php

use App\Models\Fees;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
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

function returnUpcomingBirthdays($pagination = null, $search = null)
{
    if (!empty($search)) {

        return Student::where('full_name', 'like', '%' . $search . '%')->whereBetween('dob', [addDays(1), addDays(5)])->orderBy('dob', 'asc')->paginate($pagination);
    } else {

    return Student::whereBetween('dob', [addDays(1), addDays(5)])->orderBy('dob', 'asc')->paginate($pagination);
    }
}

function returnBirthdays($pagination = null, $search = null)
{
    if (!empty($search)) {

        return Student::where('full_name', 'like', '%' . $search . '%')->where('dob', Date('Y-m-d'))->orderBy('dob', 'asc')
            ->paginate($pagination);
    } else {

    return Student::where('dob', Date('Y-m-d'))->orderBy('dob', 'asc')->paginate($pagination);
    }
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
