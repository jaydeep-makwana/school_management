<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('CSS/style.css')}}">
    <script src="https://use.fontawesome.com/f59bcd8580.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Login</title>
    <style>
        .my-element {
            animation: backInDown;
            /* animation-iteration-count: infinite; */
            animation-duration: 2s;
        }
    </style>
</head>

<body>

    @include('navbar')

    <div class="col-lg-4 mx-auto">
        @if(session('status'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{session('status')}}
        </div>
        @endif
    </div>

    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;" />
            </div>
            <div class="col-md-6 bg-white p-5">
                <h3 class="pb-3">ADMIN</h3>
                <div class="form-style">
                    <form action="admin_login" method="post">
                        @csrf
                        <div class="form-group pb-3">
                            <input type="text" name="email" placeholder="Email" class="form-control">
                            <span class="text-danger">@error('email'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group pb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                            <span class="text-danger">@error('password'){{$message}} @enderror</span>
                        </div>
                        <!-- <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center"><input name="" type="checkbox" value="" /> <span class="pl-2 font-weight-bold">Remember Me</span></div>
                            <div><a href="#">Forget Password?</a></div>
                        </div> -->
                        <div class="pb-2">
                            <button class="btn btn-primary w-100 font-weight-bold mt-2">Sign In</button>
                        </div>
                    </form>
                    <div class="sideline">OR</div>
                    <div class="form-group  ">
                        <p class="text-muted">Don't have an account?<br><a href="signup" class="text-primary">Sign up</a></p>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>