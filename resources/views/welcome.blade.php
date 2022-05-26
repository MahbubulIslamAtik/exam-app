<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card my-5">
                    <div class="card-header text-center"><h4>Go to Login Page</h4></div>
                    <div class="card-body">
                        <div class="flex text-center">
                            <a href="{{ route('login') }}" class="btn btn-outline-primary fw-bold m-3">Student Login</a>
                            <a href="{{ route('register') }}" class="btn btn-outline-primary fw-bold m-3">Student Register</a>
                            <a href="{{ route('admin.login') }}" class="btn btn-outline-success fw-bold m-3">Teacher Login</a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>