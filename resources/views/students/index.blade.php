@extends('layout.app')

@section('title')
    Students
@endsection

@section('content')
    <a href="{{ route('students.create') }}" class="btn btn-primary" aria-current="true">AddStudent </a>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <th scope="row">{{ $student->Full_Name }}</th>
                        <th scope="row">{{ $student->courses->courseName }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
