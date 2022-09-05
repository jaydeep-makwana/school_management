 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ url('CSS/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{ url('CSS/style.css')}}">
     <title>Admin Signup</title>
 </head>

 <body>
     @include('navbar')
     <div class="container">
         <div class="row m-5 no-gutters shadow-lg">
             <div class="col-md-6 d-none d-md-block">
                 <img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;" />
             </div>
             <div class="col-md-6 bg-white p-5">
                 <h3 class="pb-3 font-weight-bold">ADMIN</h3>
                 <div class="form-style">
                     <form action="admin_signup" method="post">
                         @csrf

                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="First name" name="fname">
                             <span class="text-danger">@error('fname'){{$message}} @enderror</span>
                         </div>

                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Last name" name="lname">
                             <span class="text-danger">@error('lname'){{$message}} @enderror</span>
                         </div>

                         <div class="form-group">
                             <input type="text" class="form-control jk" placeholder="mobile" name="mobile">
                             <span class="text-danger">@error('mobile'){{$message}} @enderror</span>
                         </div>

                         <div class="form-group">
                             <input type="email" class="form-control lm" placeholder="Example@gmail.com" name="email">
                             <span class="text-danger">@error('email'){{$message}} @enderror</span>
                         </div>

                         <div class="form-group">
                             <input type="password" class="form-control" placeholder="Password" name="password">
                             <span class="text-danger">@error('password'){{$message}} @enderror</span>
                         </div>

                         <div class="form-group">
                             <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                             <span class="text-danger">@error('confirm_password'){{$message}} @enderror</span>
                         </div>

                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Approval Code" name="code">
                             <span class="text-danger">@error('code'){{$message}} @enderror</span>
                         </div>

                         <div class="form-group">
                             <button type="submit" class="btn btn-primary"><span>Create account</span></button>
                         </div>

                     </form>
                     <div class="sideline">OR</div>
                     <div class="form-group">
                         <p class="text-muted">Already have an account?<br><a href="login" class="text-primary">Sign in</a></p>

                     </div>

                 </div>

             </div>
         </div>
     </div>
 </body>

 </html>