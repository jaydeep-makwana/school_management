<div>

    <div class="contaier">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex justify-content-start col-lg-6">
                    <div class="m-2">
                        <input wire:model="search" class="form-control me-2" type="search" placeholder="Search By Name">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex justify-content-end">
                    <div class="m-2">
                        <a href="{{ route('courses.create') }}" class="btn btn-primary"
                            aria-current="true">Add
                            Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-2">
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="image">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <h3 class="text-primary">{{ $course->name }}</h3>
                                        <p class="mb-0"></p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-book-open text-primary fa-3x"></i>
                                    </div>
                                </div>

                            </div>

                        </div> 
                        <div class="overlay">
                            <div class="w-fit-content ms-auto me-auto mt-4">
                                <a href="{{ route('courses.edit', $course->id) }}"><i
                                        class="bi bi-pencil-square text-success fs-4 fw-bold" title="Edit"></i></a>
                                <a type="button" wire:click="deleteConfirmation({{ $course->id }})"><i
                                        class="bi bi-trash3-fill text-danger fs-4 fw-bold" title="Delete"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>

    <div class="mx-auto w-fit-content">
        {{ $courses->links() }}
    </div>

</div>
