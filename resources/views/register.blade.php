<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Test</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image/x-icon" href="assets/image/logo.png">
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>

</head>

<body style="background-color:#2272FF">
<div style="padding: 20%; padding-top:5%; padding-bottom: 5%">
    <div class="card shadow" style="background-color: rgba(255,255,255,0.5)">
        <div class="card-body">
            <section class="vh-100">
            <div class="container py-5 h-100">
                <h1 style="text-align: center">Register</h1>
                @if(Session::has('successmsg')) <span>{{Session::get('successmsg')}}</span>@endif
                <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="assets/image/register.png"
                    class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="post" action="/register-user">
                    {{@csrf_field()}}
                    <!-- Full Name -->
                    <div class="form-outline mb-4">
                        <input type="text" name="name" id="form" class="form-control form-control-lg" required />
                        <label class="form-label" for="form">Full Name</label>
                    </div>
                    <span class="text-danger">@error('name'){{$message}} @enderror</span>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="form1Example13" required class="form-control form-control-lg" />
                        <label class="form-label" for="form1Example13">Email address</label>
                    </div>
                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
                        <label class="form-label" for="form1Example23">Password</label>
                    </div>
                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    <div class="d-flex justify-content-around align-items-center mb-4">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                    <label for="login"><a class="btn btn-block btn-lg btn-success" href="/">Login</a></label> 
                    
                </div>


                    </form>
                </div>
                </div>
            </div>
            </section>
        </div>
    </div>
<div>
</body>
</html>
