<div>
    <div class="container">

        <div class="d-flex justify-content-end">
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
