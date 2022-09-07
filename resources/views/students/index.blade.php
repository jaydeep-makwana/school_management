@extends('layout.app')

@section('title')
    Students
@endsection

@section('content')
    <a href="{{ route('students.create') }}" class="btn btn-primary" aria-current="true">AddStudent </a>
    <div class="table-responsive  container">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th><a href=""></a>Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th colspan="2">Batch Time</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->Full_Name }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->courses->courseName }}</td>
                        <td>{{ $student->start_time }}</td>
                        <td>{{ $student->end_time }}</td>
                        <td><a href="{{ route('students.show',$student->id) }}"><i class="bi bi-person-circle text-success"></i></a></td>
                        <td><a href=""></a><i class="bi bi-trash3-fill text-danger"></i></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
