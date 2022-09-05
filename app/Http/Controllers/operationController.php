<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class operationController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $detail = student::paginate(8);
        return view('Dashboard.admin_dashboard', ['data' => $detail]);
    } 
    public function course_show()
    {
        $course = course::all();
        return view('Admission_Form', ['data' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = course::all();
        $stud = DB::table('students')->where('id', $id)->get();
        return view('update', ['student' => $stud],['course_Data'=>$course]);
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id)
    {
        DB::table('students')->where('id', $id)->update([
            // personal detail
            'Full_Name' => $data->input('Full_Name'),
            'Address' => $data->input('Address'),
            'Contact_No' => $data->input('ContactNo'),
            'BOD' => $data->input('BOD'),
            'gender' => $data->input('gender'),
            'Qualification' => $data->input('Qualification'),
            'Occupation' => $data->input('Occupation'),
            'Counselling_By' => $data->input('Counselling_By'),
            //   course detail 
            'Course' => $data->input('Course'),
            'Authorisation' => $data->input('Authorisation'),
            'Fees' => $data->input('Fees'),
            'Duration' => $data->input('Duration'),
            'Discount' => $data->input('Discount'),
            'start_time' => $data->input('start_time'),
            'end_time' => $data->input('end_time'),
            'Net_Fees' => $data->input('Net_Fees'),
            'Discount_Offer' => $data->input('Discount_Offer'),
            'Join_Date' => $data->input('Join_Date'),
            //   parents detail 
            'parent_Name' => $data->input('parent_name'),
            'parent_Contact' => $data->input('parent_contact'),
            'parent_Occupation' => $data->input('parent_occupation'),
        ]);
        return redirect('admin_dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect('admin_dashboard');
    }
    

    public function find_bDay()
    {
        $birthday = DB::table('students')->where('BOD', date('Y-m-d'))->get();

        return view('Dashboard.birthday', ['birthdays' => $birthday]);
    }
    //course table
    public function course(Request $display)
    {
        $display->validate([
            'courseName'=>'required'
        ]);
        DB::table('courses')->insert([
            'courseName'=>$display->input('courseName')
        ]);
        return redirect('admin_dashboard');
        
    }
    public function payment(Request $pay){
        
    }
    
    public function admin_signup(){
        return 'admin';
    }
}
