<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course_category</title>
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('CSS/dashboard.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div id="mySidenav" class="sidenav">
        <span style="cursor:pointer;" class="closebtn" onclick="closeNav()">&times;</span>
        <!-- Button trigger modal -->
        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add course</a>
        <a href="#" id="batch">Batch</a>
        <a href="{{url('bDay')}}">Birthday</a>
        <a href="#">Course Payment</a>
        <a href="course">Course category</a>
        <a class="nav-link nav" href="{{ url('/') }}">Home </a>
        <a class="nav-link nav" href="{{ url('/admin_dashboard') }}">Dashboard </a>
        <a class="nav-link nav" href="{{ url('admin_logout') }}">Logout</a>

    </div>

    <div class="container-fluid p-0 text-center" id="main">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <span style="font-size:25px;cursor:pointer;" class="mr-2" onclick="openNav()">&#9776;</span>
            <img src="{{asset('Images/angel.png')}}" alt="">


            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ml-2 mt-1">
                        <a class="nav-link nav" href="{{ url('admin_logout') }}">Logout</a>
                    </li>
                </ul>

            </div> -->

            










        </nav>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>