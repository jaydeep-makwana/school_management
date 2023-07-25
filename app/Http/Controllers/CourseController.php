<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

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
        $input = $request->validate([
            'name' => 'required|unique:courses,name',
        ]);
        Course::create($input);

        return redirect(route('courses.index'));
    }

    public function edit($id)
    {
        $course = course::find($id);

        return view('courses.create', compact('course'));
    }

    public function update($id, Request $request)
    {
        $input = $request->validate([
            'name' => 'required|unique:courses,name,' . $id,
        ]);
        Course::where('id', $id)->update($input);

        return  redirect(route('courses.index'));
    }
}
