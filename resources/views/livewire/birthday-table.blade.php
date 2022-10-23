<div>
    <div class="container">

        <div class="d-flex justify-content-end">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <button type="button" wire:click="todays()" class="btn btn-success position-relative">
                        Today's Birthdays
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ count(returnBirthdays()) }}</span>
                    </button>
                </li>
                <li class="nav-item ">
                    <button type="button" wire:click="upcoming()" class="btn btn-warning position-relative ml-2">
                        Upcoming Birthdays
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ count(returnUpcomingBirthdays()) }}</span>
                    </button>
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
