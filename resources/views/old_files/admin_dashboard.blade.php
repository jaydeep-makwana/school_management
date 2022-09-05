<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('CSS/dashboard.css')}}">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
<script type="text/javascript">
    $(document).ready(function() {
        $("#click").click(function(){
        swal({
            title: "User created!",
            text: "Suceess message sent!!",
            icon: "success",
            button: "Ok",
            timer: 2000
        });
    });
    });
</script>
<!-- <button id="click" type="submit">alert</button> -->
    <div class="container-fluid p-0 text-center" id="main">
        <div class="row">
            <div class="col-lg-12">

                @include('Dashboard.navbar')
            </div>

        </div>
        <div class="row">
            <div class="col-lg-2">

                @include('Dashboard.sidebar')
            </div>
            <div class="col-lg-10 table-responsive table-container">
                <!-- student table -->

                <table class="table">
                    <thead>
                        <tr class="text-light  bg-dark">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Course</th>
                            <th>Contact No.</th>
                            <th>Duration</th>
                            <th>View</th>
                            <th>Batch Time</th>
                            <th>Fees Pay</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $info)
                        <tr>
                            <td>{{$info->id}}</td>
                            <td>{{$info->Full_Name}}</td>
                            <td>{{$info->gender}}</td>
                            <td>{{$info->Course}}</td>
                            <td>{{$info->Contact_No}}</td>
                            <td>{{$info->Duration}}</td>
                            <!-- Button trigger modal -->
                            <td><a data-toggle="modal" data-target="#id-{{$info->id}}" class="btn text-light" style="background-color:darkcyan;">View</a></td>

                            <td><a href="#" class="btn text-light" data-toggle="modal" data-target="#batch-{{$info->id}}" style="background-color:lightcoral">Batch</a></td>

                            <td><a data-toggle="modal" data-target="#fees-{{$info->id}}" class="btn text-light" style="background-color:darkcyan;">fees</a></td>

                            <td><a href="{{ url('edit', $info->id)}}"><i class="fa-solid fa-pen-to-square text-success"></i></a></td>

                            <td><a href="{{ url('delete', $info->id)}}"><i class="fa-solid fa-trash-can text-danger"></i></a></td>


                        </tr>
                        <!-- Modal for student details -->
                        <div class="modal fade" id="id-{{$info->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="container-fluid row p-0">
                                            <div class="col-lg-2">
                                                <h5 class="modal-title" id="exampleModalLabel"><span class="font-weight-bold"> ID : </span>{{$info->id}}</h5>
                                            </div>
                                            <div class="col-lg-9">
                                                <h5 class="modal-title" id="exampleModalLabel"><span class="font-weight-bold"> Full Name : </span>{{$info->Full_Name}}</h5>
                                            </div>
                                            <div class="col-lg-1 p-0">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span id="close-modal" aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <h4 class="font-weight-bold">Personal Details</h4>
                                                <hr>
                                                <p><span class="font-weight-bold"> DOB : </span>{{$info->BOD}}</p>
                                                <p><span class="font-weight-bold"> Gender : </span>{{$info->gender}}</p>
                                                <p><span class="font-weight-bold"> Cast : </span>{{$info->cast}}</p>
                                                <p><span class="font-weight-bold"> Qualification : </span>{{$info->Qualification}}</p>
                                                <p><span class="font-weight-bold"> Occupation : </span>{{$info->Occupation}}</p>
                                                <p><span class="font-weight-bold"> Counselling By : </span>{{$info->Counselling_By}}</p>
                                                <p><span class="font-weight-bold"> Address : </span>{{$info->Address}}</p>
                                                <p><span class="font-weight-bold"> Contact No : </span>{{$info->Contact_No}}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <h4 class="font-weight-bold">Course Details</h4>
                                                <hr>
                                                <p><span class="font-weight-bold"> Course : </span>{{$info->Course}}</p>
                                                <p><span class="font-weight-bold"> Authorisation : </span>{{$info->Authorisation}}</p>
                                                <p><span class="font-weight-bold"> Fees : </span>{{$info->Fees}}</p>
                                                <p><span class="font-weight-bold"> Duration : </span>{{$info->Duration}}</p>
                                                <p><span class="font-weight-bold"> Discount : </span>{{$info->Discount}}</p>
                                                <p><span class="font-weight-bold"> Batch Time : </span>{{$info->Batch_Time}}</p>
                                                <p><span class="font-weight-bold"> Net Fees : </span>{{$info->Net_Fees}}</p>
                                                <p><span class="font-weight-bold"> Discount Offer : </span>{{$info->Discount_Offer}}</p>
                                                <p><span class="font-weight-bold"> Joining Date : </span>{{$info->Join_Date}}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <h4 class="font-weight-bold">Parents Details</h4>
                                                <hr>
                                                <p><span class="font-weight-bold"> Full Name : </span>{{$info->parent_Name}}</p>
                                                <p><span class="font-weight-bold"> Contact No : </span>{{$info->parent_Contact}}</p>
                                                <p><span class="font-weight-bold"> Occupation : </span>{{$info->parent_Occupation}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end modal for student datails -->

                        <!-- modal for fees payment -->
                        <div class="modal fade" id="fees-{{$info->id}}" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-l">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add Payment</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container text-left">
                                            <h4>
                                                <p> Student Id : {{$info->id}}</p>
                                                <p>Name : {{$info->Full_Name}}</p>
                                                <p class="mb-4">Course : {{$info->Course}}
                                                </p>
                                            </h4>
                                            <form action="add_payment" method="POST">
                                                @csrf
                                                <label for="" style="font-size:large;">Date :</label>
                                                <input type="date" name="date_of_payment" placeholder="Date" class="form-control mb-4">
                                                <label for="" style="font-size:large ;">Payment :</label>
                                                <input type="text" name="fees" placeholder="Fess" class="form-control">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ends Modal for fees payment -->

                        <!-- modal for batch time -->
                        <div class="modal fade" id="batch-{{$info->id}}" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-l">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">{{$info->id}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h1>hello</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </tbody>
                </table>
                <div class="container pagination">
                    {{$data->links()}}
                </div>

            </div>
        </div>
    </div>
    <!-- end modal for batch time -->

    <!-- start Course modsal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_course" method="POST">
                        @csrf
                        <div class="form-group text-left">
                            <label for="courseName" class="col-form-label">Course Name:</label>
                            <input type="text" class="form-control" id="courseName" name="courseName">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--  Finish Add Course Modal -->

    <!-- <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>

</html>