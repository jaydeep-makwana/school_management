@extends('layout.app')

@section('title')
    Students
@endsection

@section('content')
    <div class="table-responsive  container">
        <div class="contaier">
            <div class="d-flex justify-content-end">
                <div class="m-2">
                    <a href="{{ route('students.create') }}" class="btn btn-primary" aria-current="true">Add Student</a>
                </div>
            </div>
        </div>
        <table class="table text-center align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th><a href=""></a>Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Batch Time</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr id="studentRow{{ $student->id }}">
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->full_name }}</td>
                        @if ($student->gender == "M")
                        
                        <td><i class="bi bi-gender-male text-primary"></i> Male</td>
                        @else
                        <td><i class="bi bi-gender-female text-pink"></i> Female</td>
                            
                        @endif
                        <td>{{ $student->courses->courseName }}</td>
                        <td>{{ $student->start_batch_time }} <span> To </span> {{ $student->end_batch_time }}</td>
                        <td class="w-0"><a href="{{ route('students.show', $student->id) }}"><i
                                    class="bi bi-person-circle text-primary fs-5"></i></a></td>
                        <td class="w-0"><a href="{{ route('students.edit', $student->id) }}"><i
                                    class="bi bi-pencil-square text-success fs-5"></i></a></td>
                        <td class="w-0"><button data-id="{{ $student->id }}" class="delete-student"><i
                                    class="bi bi-trash3-fill text-danger fs-5"></i></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
