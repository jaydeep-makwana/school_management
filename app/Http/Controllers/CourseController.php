<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(){
         $courses = Course::all();

        return view('courses.index',compact('courses'));
     }

    public function create(){
        return view('courses.create');
     }
    public function store(Request $request){

        $request->validate([
            'course_name' => 'required',
        ]);

        DB::table('courses')->insert([
          
            'courseName' => $request->course_name,
           
        ]);

        return redirect(url('courses'));
     
     }
}
