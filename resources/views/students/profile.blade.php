@extends('layout.app')

@section('title')
    Student Profile
@endsection

@section('content')
    <section>
        <div class="container">

            <div class="contaier">

                <div class="d-flex justify-content-end">
                    <div class="m-2">
                        <a href="{{ route('students.edit',$student->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            
                            @if ($student->gender === 'M')
                            <img src="{{ asset('assets/images/male.png') }}" style="width: 150px;">
                            <h5 class="my-3"> {{ $student->full_name }} </h5>
                            <p><i class="bi bi-gender-male text-primary"></i> <span class="mb-1">Male</span></p>
                            @else
                            <img src="{{ asset('assets/images/female.png') }}" style="width: 150px;">
                            <h5 class="my-3"> {{ $student->full_name }} </h5>
                                <p><i class="bi bi-gender-female text-pink"></i> <span class="mb-1">Female</span></p>
                            @endif

                            <p>Date Of Birth : <span class="text-muted mb-1">{{ $student->dob }}</span></p>
                            <p>Contect Number : <span class="text-muted mb-1">{{ $student->contact_no }}</span></p>
                        </div>
                    </div>

                    <div class=" mb-4 mb-lg-0">
                        <div class="card mb-1">
                            <div class="card-body">
                                <h3 class="text-center m-0">Parent Details</h3>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Name :</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $student->parent_name }}</p>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Occupation :</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $student->parent_occupation }}</p>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Contact Number :</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $student->parent_contact }}</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-8">
                    <div class="card mb-1">
                        <div class="card-body">
                            <h3 class="text-center m-0">Course Details</h3>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Qualification :</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $student->qualification }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Course :</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $student->courses->courseName }}</p>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Joining Date :</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $student->join_date }}</p>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Start Batch Time :</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $student->start_batch_time }}</p>
                                        </div>
                                    </div>
                                    <hr>


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">End Batch Time :</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $student->end_batch_time }}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Start Date :</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $student->start_date }}</p>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">End Date :</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $student->end_date }}</p>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Counselling By :</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $student->counselling_by }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Authorisation :</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="text-muted mb-0">{{ $student->authorisation }}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-4">
                        <div class="card mb-1">
                            <div class="card-body">
                                <h3 class="text-center m-0">Additional Student Details</h3>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Cast :</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $student->cast }}</p>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Occupation :</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $student->occupation }}</p>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Address :</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0">{{ $student->address }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
