<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'course_name' => 'required|unique:courses,name',
        ]);

        DB::table('courses')->insert([
            'name' => $request->course_name,
        ]);

        return redirect(route('courses.index'));
    }

    public function edit($id)
    {
        $course = course::find($id);
     
        return view('courses.create', compact( 'course'));
    }
}
