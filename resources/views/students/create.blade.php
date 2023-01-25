@extends('layout.app')

@section('title')
    Add Student
@endsection

@section('content')
    <form action="{{ isset($student) ? route('students.update', $student->id) : route('students.store') }}" method="POST">
        <h1 class="text-center m-1">{{ isset($student) ? 'Edit Student' : 'Add Student' }}</h1>
        @csrf
        @if (isset($student))
            @method('PUT')
        @endif
        <div class="row w-100 p-2">
            <div class="col-lg-4">
                <h3 class="text-center">Personal Details</h3>
                <div class="form-floating mb-3">
                    <input type="text" placeholder="Full Name" name="full_name" class="form-control"
                        value="{{ old('full_name') ?? ($student->full_name ?? old('full_name')) }}">
                    <label for="inputName" class="form-check-label">Full Name</label>
                    <span class="text-danger">
                        @error('full_name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3 col-sm-12">
                    <textarea name="address" id="" placeholder="Address" class="form-control">{{ old('address') ?? ($student->address ?? old('address')) }}</textarea>
                    <label for="inputAddress" class="form-check-label">Address</label>
                    <span class="text-danger">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3 col-sm-12 ">
                    <input type="number" placeholder="Contact No" name="contact_no" class="form-control"
                        value="{{ old('contact_no') ?? ($student->contact_no ?? old('contact_no')) }}">
                    <label for="inputContact" class="form-check-label">Contact No</label>
                    <span class="text-danger">
                        @error('contact_no')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3 col-sm-12">
                    <input type="date" placeholder="Date Of Birth" name="dob" class="form-control"
                        value="{{ old('dob') ?? ($student->dob ?? old('dob')) }}">
                    <label for="inputDate" class="form-check-label">Date Of Birth</label>
                    <span class="text-danger">
                        @error('dob')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label for="">Gender :</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="male" value="M"
                            @isset($student){{ $student->gender === 'M' ? 'checked' : '' }}@endisset
                            @if (old('gender') == 'M') checked @endif name="gender">
                        <label class="form-check-label" for="male">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="female" value="F"
                            @isset($student){{ $student->gender === 'F' ? 'checked' : '' }}@endisset
                            @if (old('gender') == 'F') checked @endif name="gender">
                        <label class="form-check-label" for="female">Female</label>
                    </div>

                    <span class="text-danger">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group mb-3">
                    <label for=""> Cast :</label>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="cast" id="sc" value="sc"
                            @isset($student){{ $student->cast === 'sc' ? 'checked' : '' }}@endisset
                            @if (old('cast') == 'sc') checked @endif>
                        <label for="sc" class="form-check-label">SC</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="cast" id="st" value="st"
                            @isset($student){{ $student->cast === 'st' ? 'checked' : '' }}@endisset
                            @if (old('cast') == 'st') checked @endif>
                        <label for="st" class="form-check-label">ST</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="cast" id="obc" value="obc"
                            @isset($student){{ $student->cast === 'obc' ? 'checked' : '' }}@endisset
                            @if (old('cast') == 'obc') checked @endif>
                        <label for="obc" class="form-check-label">OBC</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="cast" id="general" value="general"
                            @isset($student){{ $student->cast === 'general' ? 'checked' : '' }}@endisset
                            @if (old('cast') == 'general') checked @endif>
                        <label for="general" class="form-check-label">GENERAL</label>
                    </div>
                    <span class="text-danger">
                        @error('cast')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" placeholder="Qualification" name="qualification" class="form-control"
                        value="{{ old('qualification') ?? ($student->qualification ?? old('qualification')) }}">
                    <label for="inputQualification" class="form-check-label">Qualification</label>
                    <span class="text-danger">
                        @error('qualification')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" placeholder="Occupation" name="occupation" class="form-control"
                        value="{{ old('occupation') ?? ($student->occupation ?? old('occupation')) }}">
                    <label for="inputOccupation" class="form-check-label">Occupation</label>
                    <span class="text-danger">
                        @error('occupation')
                            {{ $message }}
                        @enderror
                    </span>
                </div>



                <div class="form-floating mb-3">
                    <input type="text" placeholder="Counselling By" name="counselling_by" class="form-control"
                        value="{{ old('counselling_by') ?? ($student->counselling_by ?? old('counselling_by')) }}">
                    <label for="inputCounselling_By" class="form-check-label">Counselling By</label>
                    <span class="text-danger">
                        @error('counselling_by')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

            </div>


            <div class="col-lg-4">

                <h3 class="text-center">Course Details</h3>

                <div class="form-floating mb-3">

                    <select name="course_id" class="form-control" id="course">
                        <option value="" selected disabled>Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}"
                                @isset($student){{ $student->course_id === $course->id ? 'selected' : '' }}@endisset
                                @if (old('course_id') == $course->id) selected @endif>
                                {{ $course->name }}</option>
                        @endforeach
                    </select>

                    <label for="course" class="form-check-label">Select Course From Here</label>
                    <span class="text-danger">
                        @error('course_id')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

                <div class="form-floating mb-3">
                    <input type="text" placeholder="Authorization" name="authorization" class="form-control"
                        value="{{ old('authorization') ?? ($student->authorization ?? old('authorization')) }}">
                    <label for="inputauthorization" class="form-check-label">Authorization</label>
                    <span class="text-danger">
                        @error('authorization')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" placeholder="Fees" name="fees" class="form-control fees"
                        value="{{ old('fees') ?? ($student->fees ?? old('fees')) }}" id="inputFees">
                    <label for="inputFees" class="form-check-label">Fees</label>
                    <span class="text-danger">
                        @error('fees')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <h6>Duration :</h6>
                <div class="form-floating mb-3">
                    <input type="date" name="start_date" class="form-control"
                        value="{{ old('start_date') ?? ($student->start_date ?? old('start_date')) }}">
                    <label for="inputStart" class="form-check-label">Start Date</label>
                    <span class="text-danger">
                        @error('start_date')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" name="end_date" class="form-control"
                        value="{{ old('end_date') ?? ($student->end_date ?? old('end_date')) }}">
                    <label for="inputEnd" class="form-check-label">End Date</label>
                    <span class="text-danger">
                        @error('end_date')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" placeholder="Discount Offer (Optional)" name="discount_offer"
                        class="form-control"
                        value="{{ old('discount_offer') ?? ($student->discount_offer ?? old('discount_offer')) }}">
                    <label for="inputDiscount_Offer" class="form-check-label">Discount Offer</label>
                    <span class="text-danger">
                        @error('discount_offer')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" placeholder="Discount (Optional)" name="discount"
                        class="form-control discount"
                        value="{{ old('discount') ?? ($student->discount ?? old('discount')) }}" id="inputDiscount">
                    <label for="inputDiscount" class="form-check-label">Discount</label>
                    <span class="text-danger">
                        @error('discount')
                            {{ $message }}
                        @enderror
                    </span>
                </div>


            </div>


            <div class="col-lg-4">

                <div class="form-group mb-3">
                    <label for="inputBatch" class="form-check-label">Start Batch Time</label>
                    <input type="time" name="start_batch_time" class="form-control"
                        value="{{ old('start_batch_time') ?? ($student->start_batch_time ?? old('start_batch_time')) }}">
                    <span class="text-danger">
                        @error('start_batch_time')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group mb-3">
                    <label for="inputBatch" class="form-check-label">End Batch Time</label>
                    <input type="time" name="end_batch_time" class="form-control"
                        value="{{ old('end_batch_time') ?? ($student->end_batch_time ?? old('end_batch_time')) }}">
                    <span class="text-danger">
                        @error('end_batch_time')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" readonly placeholder="Net Fees" name="net_fees" class="form-control net-fees"
                        value="{{ old('net_fees') ?? ($student->net_fees ?? old('net_fees')) }}">
                    <label for="inputNet_Fees" class="form-check-label">Net Fees</label>
                    <span class="text-danger">
                        @error('net_fees')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" placeholder="Join_Date" name="join_date" class="form-control"
                        value="{{ old('join_date') ?? ($student->join_date ?? old('join_date')) }}">
                    <label for="inputJoin_Date" class="form-check-label">Join Date :</label>
                    <span class="text-danger">
                        @error('join_date')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

                <h3 class="text-center">Parents Details</h3>
                <!-- parents details -->
                <div class="form-floating mb-3 mb-3">
                    <input type="text" placeholder="Full Name" name="parent_name" class="form-control"
                        value="{{ old('parent_name') ?? ($student->parent_name ?? old('parent_name')) }}">
                    <label for="inputName" class="form-check-label">Parent Name</label>
                    <span class="text-danger">
                        @error('parent_name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" placeholder="Contact No" name="parent_contact" class="form-control"
                        value="{{ old('parent_contact') ?? ($student->parent_contact ?? old('parent_contact')) }}">
                    <label for="inputContact" class="form-check-label">Contact No</label>
                    <span class="text-danger">
                        @error('parent_contact')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" placeholder="Occupation" name="parent_occupation" class="form-control"
                        value="{{ old('parent_occupation') ?? ($student->parent_occupation ?? old('parent_occupation')) }}">
                    <label for="inputOccupation" class="form-check-label">Occupation</label>
                    <span class="text-danger">
                        @error('parent_occupation')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="text-center mb-4 mt-5">

                    <input type="submit" value="{{ isset($student) ? 'Update Student' : 'Add Student' }}"
                        class="btn btn-primary">

                    @if (!isset($student))
                        <input type="reset" value="Reset" class="btn btn-warning">
                    @endif

                    <a href="{{ route('students.index') }}" class="btn btn-secondary" aria-current="true">Back</a>

                </div>
            </div>


        </div>

    </form>
@endsection
