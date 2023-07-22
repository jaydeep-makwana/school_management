@extends('layout.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <section>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <a href="{{ route('students.index') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-info">{{ count($students) }}</h3>
                                    <p class="mb-0 fw-bold fs-5 text-info">Students</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas bi-people-fill text-info fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <a href="{{ route('courses.index') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-warning">{{ count($courses) }}</h3>
                                    <p class="mb-0 fw-bold fs-5 text-warning">Courses</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-book-open text-warning fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <a href="{{ route('fees.index') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-primary">{{ number_format($totalFees) }}</h3>
                                    <p class="mb-0 fw-bold fs-5 text-primary">Total Fees</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="bi bi-cash-stack text-primary fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <a href="{{ route('fees.index') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-success">{{ number_format($paidFees) }}</h3>
                                    <p class="mb-0 fw-bold fs-5 text-success">Paid Fees</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="bi bi-cash-stack text-success fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <a href="{{ route('fees.index') }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-danger">{{ number_format($dueFees) }}</h3>
                                    <p class="mb-0 fw-bold fs-5 text-danger">Due Fees</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="bi bi-cash-stack text-danger fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <a href="{{ route('birthdays', ['type' => 'todays']) }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-success">{{ count(returnBirthdays()) }}</h3>
                                    <p class="mb-0 fw-bold fs-5 text-success">Today's Birthdays</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fa fa-birthday-cake fa-3x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <a href="{{ route('birthdays', ['type' => 'upcoming']) }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-warning">{{ count(returnUpcomingBirthdays()) }}</h3>
                                    <p class="mb-0 fw-bold fs-5 text-warning">Upcoming Birthdays</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fa fa-birthday-cake fa-3x text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>
@endsection
