@extends('layout.app')

@section('title')
    Add Course
@endsection

@section('content')
    <form action="{{ isset($course) ? route('courses.update', $course->id) : route('courses.store') }}" method="POST"
        class="border shadow-lg p-3 w-25 text-center mx-auto mt-5   ">
        <h1 class="text-center m-1">{{ isset($course) ? 'Edit Course' : 'Add Course' }}</h1>
        @csrf

        @if (isset($course))
            @method('PUT')
        @endif

        <div class="form-floating mb-3 mt-3">
            <input type="text" placeholder="Full Name" name="name" class="form-control"
                value="{{ old('name') ?? ($course->name ?? old('name')) }}">
            <label for="inputName" class="form-check-label">Course Name</label>
            <span class="text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($course) ? 'Update Course' : 'Add Courses' }}</button>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>



    </form>
@endsection
