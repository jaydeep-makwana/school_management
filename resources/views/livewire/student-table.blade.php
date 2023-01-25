<div>
    <div class="table-responsive container-fluid">
        @if ($search || ($startsAt && $endsAt) || $courseId || $gender)
            <div class="text-{{ $searchResult !== 0 ? 'success' : 'danger' }} fs-5 fw-bold" role="alert">
                Results: {{ $searchResult }}
            </div>
        @endif
        <div class="row">

            <div class="d-flex justify-content-start col-lg-6">
                <div class="m-2">
                    <input wire:model="search" class="form-control me-2" type="search" placeholder="Search By Name"
                        title="Search By Name">
                </div>

                <div class="m-2">
                    <input wire:model="startsAt" class="form-control me-2" type="time" title="From Start">
                </div>
                <div class="m-2">
                    <input wire:model="endsAt" class="form-control me-2" type="time" title="To Finish">
                </div>

                <div class="m-2">
                    <select wire:model="courseId" name="course_id" class="form-control" id="course"
                        title="Sort By Course">
                        <option value="" selected>Sort By Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}"
                                @isset($student){{ $student->course_id === $course->id ? 'selected' : '' }}@endisset
                                @if (old('course_id') == $course->id) selected @endif>
                                {{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="m-2">
                    <div class="btn-group" aria-label="Basic example">
                        <a type="button" class="m-1" wire:click="gender('M')">
                            <i class="bi bi-gender-male text-primary fs-5 
                            {{ $gender === App\Models\Student::MALE ? 'glow-male-icon' : '' }}">
                        </i>
                        </a>
                        <a type="button" class="m-1" wire:click="gender('F')">
                            <i class="bi bi-gender-female text-pink fs-5 
                            {{ $gender === App\Models\Student::FEMALE ? 'glow-female-icon' : '' }}">
                        </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end col-lg-6">
                <div class="m-2">
                    <a href="{{ route('students.create') }}" class="btn btn-primary" aria-current="true">Add
                        Student</a>
                </div>
            </div>
        </div>

        <table class="table text-center align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Batch Time</th>
                    <th>DOB</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody id="studentData">
                @forelse ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->full_name }}</td>
                        @if ($student->gender == 'M')
                            <td><i class="bi bi-gender-male text-primary"></i> Male</td>
                        @else
                            <td><i class="bi bi-gender-female text-pink"></i> Female</td>
                        @endif
                        <td>{{ $student->courses->name }}</td>
                        <td>{{ timeFormat($student->start_batch_time) }} <span> To </span>
                            {{ timeFormat($student->end_batch_time) }}</td>
                        <td>{{ $student->dob }}</td>
                        <td class="w-0"><a href="{{ route('students.show', $student->id) }}"><i
                                    class="bi bi-person-circle text-primary fs-5"></i></a></td>
                        <td class="w-0"><a href="{{ route('students.edit', $student->id) }}"><i
                                    class="bi bi-pencil-square text-success fs-5"></i></a></td>
                        <td class="w-0"><a type="button" wire:click="deleteConfirmation({{ $student->id }})"><i
                                    class="bi bi-trash3-fill text-danger fs-5"></i></a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">
                            <div class="alert alert-warning m-0" role="alert">
                                No Records Found
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
    <div class="mx-auto w-fit-content">
        {{ $students->links() }}
    </div>
</div>
