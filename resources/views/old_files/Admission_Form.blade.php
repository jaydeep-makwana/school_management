<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('CSS/admission.css')}}">
    <title>Admission_Form</title>

</head>

<body>
    @include('navbar')
    
    <div class="container-fluid  p-5 mb-2">
        <form action="" method="POST" enctype="multipart/form-data" class="border shadow-lg">
            @csrf
            <div class="row w-100">
                <div class="col-lg-6">
                    <div class="row w-100">
                        <h1 class="mr-auto ml-auto p-4">Personal Details</h1>
                    </div>
                    <div class="row w-100 p-4">
                        <div class="col-lg-6">
                            <div class="form-group  col-sm-12">
                                <label for="inputName" class="form-check-label">Full Name</label>
                                <input type="text" placeholder="Full Name" name="Full_Name" class="form-control" value="{{ old('Full_Name') }}">
                                <span class="text-danger">@error('Full_Name'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group  col-sm-12">
                                <label for="inputAddress" class="form-check-label">Address</label>
                                <textarea name="Address" id="" placeholder="Address" class="form-control">{{old('Address')}}</textarea>
                                <span class="text-danger">@error('Address'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group  col-sm-12 ">
                                <label for="inputContact" class="form-check-label">Contact No</label>
                                <input type="text" placeholder="Contact No" name="ContactNo" class="form-control" value="{{old('ContactNo')}}">
                                <span class="text-danger">@error('ContactNo'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group  col-sm-12">
                                <label for="inputDate" class="form-check-label">Date Of Birth</label>
                                <input type="date" placeholder="Date Of Birth" name="BOD" class="form-control" value="{{old('BOD')}}">
                                <span class="text-danger">@error('BOD'){{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Gender :</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="male" value="male" @if(old('gender')=='male' )checked @endif name="gender">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="female" value="female" @if(old('gender')=='female' )checked @endif name="gender">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <span class="text-danger">@error('gender'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for=""> Cast :</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cast" id="SC" value="SC" @if(old('cast')=='SC' )checked @endif>
                                    <label for="SC" class="form-check-label">SC</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cast" id="ST" value="ST" @if(old('cast')=='ST' )checked @endif>
                                    <label for="ST" class="form-check-label">ST</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cast" id="OBC" value="OBC" @if(old('cast')=='OBC' )checked @endif>
                                    <label for="OBC" class="form-check-label">OBC</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cast" id="Gen" value="Gen" @if(old('cast')=='Gen' )checked @endif>
                                    <label for="Gen" class="form-check-label">Gen</label>
                                </div>
                                <span class="text-danger">@error('cast'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="inputQualification" class="form-check-label">Qualification</label>
                                <input type="text" placeholder="Qualification" name="Qualification" class="form-control" value="{{old('Qualification')}}">
                                <span class="text-danger">@error('Qualification'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="inputOccupation" class="form-check-label">Occupation</label>
                                <input type="text" placeholder="Occupation" name="Occupation" class="form-control" value="{{old('Occupation')}}">
                                <span class="text-danger">@error('Occupation'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="inputCounselling_By" class="form-check-label">Counselling By</label>
                                <input type="text" placeholder="Counselling By" name="Counselling_By" class="form-control" value="{{old('Counselling_By')}}">
                                <span class="text-danger">@error('Counselling_By'){{$message}} @enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row w-100 ml-2">
                        <div class="row w-100">
                            <h1 class="mr-auto ml-auto p-4">Course Details</h1>
                        </div>
                        <div class="row w-100 p-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    
                                    <label for="Course" class="form-check-label">Course</label>
                                    <select name="Course" class="form-control" id="Course">
                                        <option value="" selected disabled>--Choose Courses--</option>
                                        @foreach($data as $info)
                                        <option value="{{$info->courseName}}" @if(old('Course')==$info->courseName) selected @endif>{{$info->courseName}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('Course'){{$message}} @enderror</span>

                                </div>
                                <div class="form-group">
                                    <label for="inputAuthorisation" class="form-check-label">Authorisation</label>
                                    <input type="text" placeholder="Authorisation" name="Authorisation" class="form-control" value="{{old('Authorisation')}}">
                                    <span class="text-danger">@error('Authorisation'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="inputFees" class="form-check-label">Fees</label>
                                    <input type="text" placeholder="Fees" name="Fees" class="form-control" value="{{old('Fees')}}">
                                    <span class="text-danger">@error('Fees'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="inputDuration" class="form-check-label">Duration</label>
                                    <input type="text" placeholder="Duration" name="Duration" class="form-control" value="{{old('Duration')}}">
                                    <span class="text-danger">@error('Duration'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="inputDiscount_Offer" class="form-check-label">Discount Offer</label>
                                    <input type="text" placeholder="Discount Offer (Optional)" name="Discount_Offer" class="form-control" value="{{old('Discount_Offer')}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="inputDiscount" class="form-check-label">Discount</label>
                                    <input type="text" placeholder="Discount (Optional)" name="Discount" class="form-control" value="{{old('Discount')}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputBatch" class="form-check-label">Start Batch Time</label>
                                    <input type="time" name="start_time" class="form-control" value="{{old('start_time')}}">
                                    <span class="text-danger">@error('start_time'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="inputBatch" class="form-check-label">End Batch Time</label>
                                    <input type="time" name="end_time" class="form-control" value="{{old('end_time')}}">
                                    <span class="text-danger">@error('end_time'){{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="inputNet_Fees" class="form-check-label">Net Fees</label>
                                    <input type="text" placeholder="Net Amount" name="Net_Fees" class="form-control" value="{{old('Net_Fees')}}">
                                    <span class="text-danger">@error('Net_Fees'){{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="inputJoin_Date" class="form-check-label">Join Date :</label>
                                    <input type="date" placeholder="Join_Date" name="Join_Date" class="form-control" value="{{old('Join_Date')}}">
                                    <span class="text-danger">@error('Join_Date'){{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- parents details -->

            <div class="row w-100 ml-2 mb-4">
                <div class="col-6">
                    <h1 class="ml-auto mr-auto text-center">Parents Details</h1>
                    <div class="form-group  ">
                        <label for="inputName" class="form-check-label">Full Name</label>
                        <input type="text" placeholder="Full Name" name="parent_name" class="form-control" value="{{old('parent_name')}}">
                        <span class="text-danger">@error('parent_name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="inputContact" class="form-check-label">Contact No</label>
                        <input type="text" placeholder="Contact No" name="parent_contact" class="form-control" value="{{old('parent_contact')}}">
                        <span class="text-danger">@error('parent_contact'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="inputOccupation" class="form-check-label">Occupation</label>
                        <input type="text" placeholder="Occupation" name="parent_occupation" class="form-control" value="{{old('parent_occupation')}}">
                        <span class="text-danger">@error('parent_occupation'){{$message}} @enderror</span>
                    </div>
                </div>
                <div class="col-6 text-center mb-4 " style="margin-top:15%;">
                    <input type="submit" value="Submit">
                    <a href="admission_form" class="reset ml-3 text-light">Reset</a>
                </div>
            </div>
        </form>
    </div>


</body>

</html>