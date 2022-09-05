<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admisssion_form extends Controller
{
    function operation(Request $data)
    {
        // $data->validate([
        //     'Full_Name' => 'required',
        //     'Address' => 'required',
        //     'ContactNo' => 'required|numeric|digits:10',
        //     'BOD' => 'required|date',
        //     'gender' => 'required',
        //     'cast' => 'required',
        //     'Qualification' => 'required',
        //     'Occupation' => 'required',
        //     'Counselling_By' => 'required',
        //     'Course' => 'required',
        //     'Authorisation' => 'required',
        //     'Fees' => 'required|numeric',
        //     'Duration' => 'required',
        //     'start_time' => 'required',
        //     'end_time' => 'required',
        //     'Net_Fees' => 'required|numeric',
        //     'Join_Date' => 'required',
        //     "parent_name" => "required",
        //     "parent_contact" => "required|digits:10|numeric",
        //     "parent_occupation" => "required",
        // ]);

 

        // DB::table('students')->insert([
        //     // personal detail
        //     'Full_Name' => $data->input('Full_Name'),
        //     'Address' => $data->input('Address'),
        //     'Contact_No' => $data->input('ContactNo'),
        //     'BOD' => $data->input('BOD'),
        //     'gender' => $data->input('gender'),
        //     'Qualification' => $data->input('Qualification'),
        //     'Occupation' => $data->input('Occupation'),
        //     'Counselling_By' => $data->input('Counselling_By'),
        //     //   course detail 
        //     'Course' => $data->input('Course'),
        //     'Authorisation' => $data->input('Authorisation'),
        //     'Fees' => $data->input('Fees'),
        //     'Duration' => $data->input('Duration'),
        //     'Discount' => $data->input('Discount'),
        //     'start_time' => $data->input('start_time'),
        //     'end_time' => $data->input('end_time'),
        //     'Net_Fees' => $data->input('Net_Fees'),
        //     'Discount_Offer' => $data->input('Discount_Offer'),
        //     'Join_Date' => $data->input('Join_Date'),
        //     //   parents detail 
        //     'parent_Name' => $data->input('parent_name'),
        //     'parent_Contact' => $data->input('parent_contact'),
        //     'parent_Occupation' => $data->input('parent_occupation'),
        // ]);
        return redirect('admin_dashboard');
    }
}
