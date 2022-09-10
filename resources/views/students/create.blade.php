@extends('layout.app')

@section('title')
    Add Student
@endsection

@section('content')
   

        <form action="{{ route('students.store') }}" method="POST" class="border shadow-lg">
            @csrf
            <div class="row w-100 p-2">
                <div class="col-lg-4">
                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Full Name" name="full_name" class="form-control"
                            value="{{ old('full_name') }}">
                        <label for="inputName" class="form-check-label">Full Name</label>
                        <span class="text-danger">
                            @error('full_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3 col-sm-12">
                        <textarea name="address" id="" placeholder="Address" class="form-control">{{ old('address') }}</textarea>
                        <label for="inputAddress" class="form-check-label">Address</label>
                        <span class="text-danger">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3 col-sm-12 ">
                        <input type="text" placeholder="Contact No" name="contact_no" class="form-control"
                            value="{{ old('contact_no') }}">
                        <label for="inputContact" class="form-check-label">Contact No</label>
                        <span class="text-danger">
                            @error('contact_no')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3 col-sm-12">
                        <input type="date" placeholder="Date Of Birth" name="dob" class="form-control"
                            value="{{ old('dob') }}">
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
                                @if (old('gender') == 'M') checked @endif name="gender">
                            <label class="form-check-label" for="male">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="female" value="F"
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
                            <input type="radio" class="form-check-input" name="cast" id="SC" value="SC"
                                @if (old('cast') == 'SC') checked @endif>
                            <label for="SC" class="form-check-label">SC</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="cast" id="ST" value="ST"
                                @if (old('cast') == 'ST') checked @endif>
                            <label for="ST" class="form-check-label">ST</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="cast" id="OBC" value="OBC"
                                @if (old('cast') == 'OBC') checked @endif>
                            <label for="OBC" class="form-check-label">OBC</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="cast" id="Gen" value="Gen"
                                @if (old('cast') == 'Gen') checked @endif>
                            <label for="Gen" class="form-check-label">Gen</label>
                        </div>
                        <span class="text-danger">
                            @error('cast')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Qualification" name="qualification" class="form-control"
                            value="{{ old('qualification') }}">
                        <label for="inputQualification" class="form-check-label">Qualification</label>
                        <span class="text-danger">
                            @error('qualification')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Occupation" name="occupation" class="form-control"
                            value="{{ old('occupation') }}">
                        <label for="inputOccupation" class="form-check-label">Occupation</label>
                        <span class="text-danger">
                            @error('occupation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Counselling By" name="counselling_by" class="form-control"
                            value="{{ old('counselling_by') }}">
                        <label for="inputCounselling_By" class="form-check-label">Counselling By</label>
                        <span class="text-danger">
                            @error('counselling_by')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="form-floating mb-3">

                        <select name="course_id" class="form-control" id="course">
                            <option value="" selected disabled>Course</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}" @if (old('course_id') == $course->id) selected @endif>
                                    {{ $course->courseName }}</option>
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
                        <input type="text" placeholder="Authorisation" name="authorisation" class="form-control"
                            value="{{ old('authorisation') }}">
                        <label for="inputAuthorisation" class="form-check-label">Authorisation</label>
                        <span class="text-danger">
                            @error('authorisation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Fees" name="fees" class="form-control"
                            value="{{ old('fees') }}">
                        <label for="inputFees" class="form-check-label">Fees</label>
                        <span class="text-danger">
                            @error('fees')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}">
                        <label for="inputStart" class="form-check-label">Start Date</label>
                        <span class="text-danger">
                            @error('start_date')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="date" name="end_date" class="form-control" value="{{ old('end_date') }}">
                        <label for="inputEnd" class="form-check-label">Finish Date</label>
                        <span class="text-danger">
                            @error('end_date')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Discount Offer (Optional)" name="discount_offer"
                            class="form-control" value="{{ old('discount_offer') }}">
                        <label for="inputDiscount_Offer" class="form-check-label">Discount Offer</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Discount (Optional)" name="discount" class="form-control"
                            value="{{ old('discount') }}">
                        <label for="inputDiscount" class="form-check-label">Discount</label>
                        <span class="text-danger">
                            @error('discount')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group mb-3">
                        <label for="inputBatch" class="form-check-label">Start Batch Time</label>
                        <input type="time" name="start_batch_time" class="form-control" value="{{ old('start_batch_time') }}">
                        <span class="text-danger">
                            @error('start_batch_time')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group mb-3">
                        <label for="inputBatch" class="form-check-label">End Batch Time</label>
                        <input type="time" name="end_batch_time" class="form-control" value="{{ old('end_batch_time') }}">
                        <span class="text-danger">
                            @error('end_batch_time')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Net Amount" name="net_fees" class="form-control"
                            value="{{ old('net_fees') }}">
                        <label for="inputNet_Fees" class="form-check-label">Net Fees</label>
                        <span class="text-danger">
                            @error('net_fees')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="date" placeholder="Join_Date" name="join_date" class="form-control"
                            value="{{ old('join_date') }}">
                        <label for="inputJoin_Date" class="form-check-label">Join Date :</label>
                        <span class="text-danger">
                            @error('join_date')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                </div>


                <div class="col-lg-4">
                    <!-- parents details -->


                    <div class="form-floating mb-3 mb-3">
                        <input type="text" placeholder="Full Name" name="parent_name" class="form-control"
                            value="{{ old('parent_name') }}">
                        <label for="inputName" class="form-check-label">Parent Name</label>
                        <span class="text-danger">
                            @error('parent_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Contact No" name="parent_contact" class="form-control"
                            value="{{ old('parent_contact') }}">
                        <label for="inputContact" class="form-check-label">Contact No</label>
                        <span class="text-danger">
                            @error('parent_contact')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" placeholder="Occupation" name="parent_occupation" class="form-control"
                            value="{{ old('parent_occupation') }}">
                        <label for="inputOccupation" class="form-check-label">Occupation</label>
                        <span class="text-danger">
                            @error('parent_occupation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="col-6 text-center mb-4 " style="margin-top:15%;">
                        <input type="submit" value="Submit" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-secondary">
                        <a href="{{ route('students.index') }}" class="btn btn-light" aria-current="true">Back</a>

                    </div>
                </div>


            </div>

        </form>
     
@endsection
