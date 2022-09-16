@extends('layout.app')

@section('title')
    Courses
@endsection

@section('content')
    <div class="table-responsive  container">
        <div class="contaier">
            <div class="d-flex justify-content-end">
                <div class="m-2">
                    <a href="{{ route('courses.create') }}" class="btn btn-primary" aria-current="true">Add Course</a>
                </div>
            </div>
        </div>
        <table class="table text-center align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Name</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr id="courseRow{{ $course->id }}">
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->courseName }}</td>

                        <td class="w-0"><a href="{{ route('courses.edit', $course->id) }}" data-id="{{ $course->id }}"><i
                                    class="bi bi-pencil-square text-success fs-5"></i></a></td>
                        <td class="w-0"><a type="button" data-id="{{ $course->id }}"><i
                                    class="bi bi-trash3-fill text-danger fs-5"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
