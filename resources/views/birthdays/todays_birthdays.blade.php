@extends('layout.app')

@section('title')
    Birth Days
@endsection

@section('content')
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link {{ last(request()->segments()) === 'birthdays' ? 'active' : '' }}" aria-current="page"
                href="{{ route('birthdays') }}">Today's Birthdays</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ last(request()->segments()) === 'upcoming-birthdays' ? 'active' : '' }}"
                href="{{ url('birthdays/upcoming-birthdays') }}">Upcoming Birthdays</a>
        </li>
    </ul>
    {{ last(request()->segments() ) === 'birthdays' ? todayBirthdays() : upcomingBirthdays() }}
    <?php function todayBirthdays() { ?>
    <div class="row mt-2">
 
    
<div class="col-xl-3 col-sm-6 col-12 mb-4">
    <a href="" class="text-decoration-none text-dark">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 class="text-warning">100</h3>
                                <p class="mb-0">Students</p>
                            </div>
                            <div class="align-self-center">
                                <i class="far fa-user text-warning fa-3x"></i>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </a>
        </div>
     
    </div>
    <?php  } ?>

    <?php function upcomingBirthdays() { ?>
    <div class="row mt-2">
     
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <a href="" class="text-decoration-none text-dark">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 class="text-warning"></h3>
                                <p class="mb-0">Students</p>
                            </div>
                            <div class="align-self-center">
                                <i class="far fa-user text-warning fa-3x"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php  } ?>

@endsection
