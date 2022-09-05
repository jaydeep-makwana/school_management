<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('CSS/dashboard.css')}}">

</head>

<body>

    <div id="mySidenav" class="sidenav">
        <span style="cursor:pointer;" class="closebtn" onclick="closeNav()"> &times;</span>
        <a class="nav-link nav" href="{{ url('/') }}">Home </a>
        <a href="#" id="batch">Batch</a>
        <a href="bDay">Birthday</a>
        <a href="#">Course Payment</a>
        <a class="nav-link nav" href="{{ url('/admin_dashboard') }}">Dashboard </a>
    </div>
    <div class="container-fluid p-0 text-center" id="main">
        <nav class="navbar navbar-expand-lg">
            <span style="font-size:25px;cursor:pointer;" class="mr-2" onclick="openNav()">&#9776;</span>
            <img src="{{asset('Images/angel.png')}}" alt="">

        </nav>
    </div>

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

</body>

</html>