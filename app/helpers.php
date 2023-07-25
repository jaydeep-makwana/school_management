<?php

use App\Models\Fees;
use App\Models\Setting;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Arr;

function paidAmount($id)
{
    return Fees::where('student_id', $id)->sum('amount');
}

function dueAmount($id)
{
    $student = Student::find($id);

    return $student->net_fees - paidAmount($id);
}

function returnUpcomingBirthdays($search = null)
{
    for ($i = 1; $i <= 5; $i++) {
        $students[] = returnBirthdays($search, $i);
    }

    return  Arr::collapse($students);
}

function returnBirthdays($search = null, $upcoming = 0)
{
    return Student::where('full_name', 'like', '%' . $search . '%')->whereDay('dob', day($upcoming))->whereMonth('dob', month($upcoming))->get();
}

function day($days = 0)
{
    return Carbon::now()->addDays($days)->format('d');
}

function month($days = 0)
{
    return Carbon::now()->addDays($days)->format('m');
}

function timeFormat($time)
{
    return Carbon::parse($time)->format('g:i A');
}

function manageOperator($searchData)
{
    return $searchData ? '=' : '!=';
}

function daysToGo($dob)
{
    $dob = Carbon::parse($dob)->format('d');
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

function imageUrl($key)
{
    $value = Setting::where('key', $key)->first()->value;
    if (empty($value)) {
        return asset('assets/images/' . $key . '.png');
    }

    return $value;
}

function getSettingValue($key)
{
    return Setting::where('key', $key)->first()->value;
}
