@extends('layout.app')

@section('title')
    Add Course
@endsection

@section('content')
    <form action="{{ isset($course) ? url('update-course', $course->id) : url('add-course') }}" method="POST"
        class="border shadow-lg p-3 w-25 text-center mx-auto mt-5   ">
        <h1 class="text-center m-1">{{ isset($course) ? 'Edit Course' : 'Add Course' }}</h1>
        @csrf

        @if (isset($course))
            @method('PUT')
        @endif



        <div class="form-floating mb-3 mt-3">
            <input type="text" placeholder="Full Name" name="course_name" class="form-control"
                value="{{ isset($course) ? $course->course_name : old('course_name') }}">
            <label for="inputName" class="form-check-label">Course Name</label>
            <span class="text-danger">
                @error('course_name')
                    {{ $message }}
                @enderror
            </span>
        </div>

<button type="submit" class="btn btn-primary">Add Course</button>
<a href="{{ url('courses') }}" class="btn btn-secondary">Back</a>




        </div>

    </form>
@endsection
