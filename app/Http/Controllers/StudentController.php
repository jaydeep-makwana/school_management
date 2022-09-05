<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Full_Name' => 'required',
            'Address' => 'required',
            'ContactNo' => 'required|numeric|digits:10',
            'BOD' => 'required|date',
            'gender' => 'required',
            'cast' => 'required',
            'Qualification' => 'required',
            'Occupation' => 'required',
            'Counselling_By' => 'required',
            'Course' => 'required',
            'Authorisation' => 'required',
            'Fees' => 'required|numeric',
            'Duration' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'Net_Fees' => 'required|numeric',
            'Join_Date' => 'required',
            "parent_name" => "required",
            "parent_contact" => "required|digits:10|numeric",
            "parent_occupation" => "required",
        ]);

        DB::table('students')->insert([
            // personal detail
            'Full_Name' => $request->input('Full_Name'),
            'Address' => $request->input('Address'),
            'Contact_No' => $request->input('ContactNo'),
            'BOD' => $request->input('BOD'),
            'gender' => $request->input('gender'),
            'Qualification' => $request->input('Qualification'),
            'Occupation' => $request->input('Occupation'),
            'Counselling_By' => $request->input('Counselling_By'),
            //   course detail 
            'Course' => $request->input('Course'),
            'Authorisation' => $request->input('Authorisation'),
            'Fees' => $request->input('Fees'),
            'Duration' => $request->input('Duration'),
            'Discount' => $request->input('Discount'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'Net_Fees' => $request->input('Net_Fees'),
            'Discount_Offer' => $request->input('Discount_Offer'),
            'Join_Date' => $request->input('Join_Date'),
            //   parents detail 
            'parent_Name' => $request->input('parent_name'),
            'parent_Contact' => $request->input('parent_contact'),
            'parent_Occupation' => $request->input('parent_occupation'),
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
