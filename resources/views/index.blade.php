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
<body style="background-color:#00FFFF">
<div style="padding: 20%; padding-top:5%; padding-bottom: 5%">
    <div class="card shadow" style="background-color: rgba(255,255,255,0.5)">
        <div class="card-body">
    <section class="vh-100">
            <div class="container py-5 h-100">
            <h1 style="text-align: center">Login</h1>
                <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="assets/image/login.png"
                    class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="/login-user" method="post">
                    {{@csrf_field()}} 
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" />
                        <label class="form-label" for="form1Example13" required>Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
                        <label class="form-label" for="form1Example23" required >Password</label>
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <a href="#!">Forgot password?</a>
                        <a href="register">Create Account</a>

                    </div>

                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                    </form>
                </div>
                </div>
            </div>
    </section>
</div>
    </div>
</div>
</body>
</html>