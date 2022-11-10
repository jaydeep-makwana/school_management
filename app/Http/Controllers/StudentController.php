<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\Fees;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\BitwiseOr;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('students.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = course::all();

        return view('students.create', compact('courses'));
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
            'full_name' => 'required',
            'address' => 'required',
            'contact_no' => 'required|numeric|digits:10',
            'dob' => 'required|date',
            'gender' => 'required',
            'cast' => 'required',
            'qualification' => 'required',
            'occupation' => 'required',
            'counselling_by' => 'required',
            'course_id' => 'required',
            'authorization' => 'required',
            'fees' => 'required|numeric',
            'start_date' => 'required',
            'end_date' => 'required|after:start_date',
            'start_batch_time' => 'required|before:end_batch_time',
            'end_batch_time' => 'required|after:start_batch_time',
            'discount_offer' => 'required_with:discount',
            'discount' => 'required_with:discount_offer|nullable|numeric',
            'join_date' => 'required',
            "parent_name" => "required",
            "parent_contact" => "required|numeric|digits:10",
            "parent_occupation" => "required",
        ]);

        DB::table('students')->insert([
            // personal detail
            'full_name' => $request->input('full_name'),
            'address' => $request->input('address'),
            'contact_no' => $request->input('contact_no'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'qualification' => $request->input('qualification'),
            'occupation' => $request->input('occupation'),
            'counselling_by' => $request->input('counselling_by'),
            'cast' => $request->input('cast'),
            //   course detail 
            'course_id' => $request->input('course_id'),
            'authorization' => $request->input('authorization'),
            'fees' => $request->input('fees'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'discount' => $request->input('discount'),
            'start_batch_time' => $request->input('start_batch_time'),
            'end_batch_time' => $request->input('end_batch_time'),
            'net_fees' => $request->input('net_fees'),
            'discount_offer' => $request->input('discount_offer'),
            'join_date' => $request->input('join_date'),
            //   parents detail 
            'parent_Name' => $request->input('parent_name'),
            'parent_contact' => $request->input('parent_contact'),
            'parent_occupation' => $request->input('parent_occupation'),
        ]);

        return redirect(route('students.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::with('courses')->find($id);

        return view('students.profile', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = course::all();
        $student = Student::findOrFail($id);
        return view('students.create', compact('student', 'courses'));
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
        $request->validate([
            'full_name' => 'required',
            'address' => 'required',
            'contact_no' => 'required|numeric|digits:10',
            'dob' => 'required|date',
            'gender' => 'required',
            'cast' => 'required',
            'qualification' => 'required',
            'occupation' => 'required',
            'counselling_by' => 'required',
            'course_id' => 'required',
            'authorization' => 'required',
            'fees' => 'required|numeric',
            'start_date' => 'required',
            'end_date' => 'required|after:start_date',
            'start_batch_time' => 'required|before:end_batch_time',
            'end_batch_time' => 'required|after:start_batch_time',
            'discount' => 'nullable|numeric',
            'join_date' => 'required',
            "parent_name" => "required",
            "parent_contact" => "required|numeric|digits:10",
            "parent_occupation" => "required",
        ]);

        DB::table('students')->where('id', $id)->update([
            // personal detail
            'full_name' => $request->input('full_name'),
            'address' => $request->input('address'),
            'contact_no' => $request->input('contact_no'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'qualification' => $request->input('qualification'),
            'occupation' => $request->input('occupation'),
            'counselling_by' => $request->input('counselling_by'),
            'cast' => $request->input('cast'),
            //   course detail 
            'course_id' => $request->input('course_id'),
            'authorization' => $request->input('authorization'),
            'fees' => $request->input('fees'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'discount' => $request->input('discount'),
            'start_batch_time' => $request->input('start_batch_time'),
            'end_batch_time' => $request->input('end_batch_time'),
            'net_fees' => $request->input('net_fees'),
            'discount_offer' => $request->input('discount_offer'),
            'join_date' => $request->input('join_date'),
            //   parents detail 
            'parent_Name' => $request->input('parent_name'),
            'parent_contact' => $request->input('parent_contact'),
            'parent_occupation' => $request->input('parent_occupation'),
        ]);

        return redirect(route('students.index'));
    }

}
