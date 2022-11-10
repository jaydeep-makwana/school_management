@extends('layout.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <!--Section: Minimal statistics cards-->
    <section>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <a href="{{ route('courses.index') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-info">{{ count($courses) }}</h3>
                                    <p class="mb-0">Courses</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-book-open text-info fa-3x"></i>
                                </div>
                            </div>

                        </div>
                    </div>

                </a>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <a href="{{ route('students.index') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-warning">{{ count($students) }}</h3>
                                    <p class="mb-0">Students</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="bi bi-people-fill me-3 text-warning fa-3x"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!--Section: Statistics with subtitles-->
@endsection
