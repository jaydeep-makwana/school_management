<div>
    <div class="container">
        <div class="row">

            <div class="d-flex justify-content-start col-lg-6">
                <div class="m-2">
                    <input wire:model="search" class="form-control me-2" type="search" placeholder="Search By Name">
                </div>
            </div>

            <div class="d-flex justify-content-end col-lg-6">
                <ul class="nav">
                    <li
                        class="nav-item m-2 {{ !session('upcoming_birthdays') ? 'border-5 border-bottom border-success' : '' }}">
                        <a type="button" wire:click="todays()" class="btn btn-success position-relative mb-1">
                            Today's Birthdays
                            <span
                                class="position-absolute border border-2  border-success  top-0 start-100 translate-middle badge rounded-pill bg-white text-success">{{ count(returnBirthdays()) }}</span>
                        </a>
                    </li>
                    <li
                        class="nav-item m-2 {{ session('upcoming_birthdays') ? 'border-5 border-bottom border-warning' : '' }}">
                        <a type="button" wire:click="upcoming()" class="btn btn-warning position-relative mb-1">
                            Upcoming Birthdays
                            <span
                                class="position-absolute border border-2  border-warning top-0 start-100 translate-middle badge rounded-pill bg-dark text-warning">{{ count(returnUpcomingBirthdays()) }}</span>
                        </a>
                    </li>

                </ul>

            </div>
        </div>


        <div class="row text-center">

            @forelse ($students as $student)
                <a href="{{ route('students.show', $student->id) }}"
                    class="border border-dark rounded col-lg-2 m-2 p-2 nav-link" style="width:fit-content;">
                    @if ($student->gender === 'M')
                        <img src="{{ asset('assets/images/male.png') }}" class="img-thumbnail" width="100px">
                    @else
                        <img src="{{ asset('assets/images/female.png') }}" class="img-thumbnail" width="100px">
                    @endif

                    <div>
                        <h5 class="m-0 mt-1 text-dark">{{ $student->full_name }}</h5>
                      {{  $student->dob}}
                    </div>
                    @if (session('upcoming_birthdays'))
                        <div class="text-dark bg-upcoming fw-bold p-1 mt-1">
                            {{ daysToGo($student->dob) }}
                        </div>
                    @endif
                </a>
            @empty
                <div class="alert alert-warning m-0" role="alert">
                    No Records Found
                </div>
            @endforelse

        </div>


    </div>

    <div class="mx-auto w-fit-content">
        {{ $students->links() }}
    </div>

</div>
