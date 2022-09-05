<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class payment extends Controller
{
    function add_fees(Request $fees)
    {

        $fees->validate([

            "id" => 'required',
            "Full_Name" => 'required',
            "Course" => 'required',
            "date_of_payment" => 'required',
            "fees" => 'required'

        ]);

        DB::table('fees')->insert([

            "id" =>$fees->input('id'),
            "Full_Name" =>$fees->input('Full_Name'),
            "Course" =>$fees->input('Course'),
            "date_of_payment" =>$fees->input('date_of_payment'),
            "fees" =>$fees->input('fees'),

        ]);
        return redirect('admin_dashboard');

    }
}
