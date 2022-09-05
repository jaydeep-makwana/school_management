<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today's Birthday</title>
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('CSS/dashboard.css')}}">
    <link rel="stylesheet" href="{{ url('CSS/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body>




    <div class="container-fluid text-center">
        @include('navbar')
        <div class="row">
            <div class="col-lg-2">
                @include('Dashboard.sidebar')

            </div>
            <div class="col-lg-10 mt-5">

                @if(count($birthdays) != 0)
                @foreach($birthdays as $student)
                <div class="alert alert-success w-50 mx-auto" role="alert">
                    <h3>Today is <span class="text-success ">{{$student->Full_Name}}'s</span> Birthday </h3>
                </div>
                @endforeach
                @else
                <div class="alert alert-warning" role="alert">
                    Today is not a student's birthday
                </div>
                @endif
            </div>
        </div>


    </div>
</body>

</html>