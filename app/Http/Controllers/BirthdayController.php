<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirthdayController extends Controller
{
    public function birthdays(Request $request)
    {
        if ($request->type == 'upcoming') {
            $request->session()->put('upcoming_birthdays', 1);
        }
        if ($request->type == 'todays') {
            $request->session()->forget('upcoming_birthdays');
        }

        return view('birthdays.index');
    }
}
