<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body style="background-image: url(./img/bg1.jpg); background-repeat:no-repeat; background-size:cover;  height:100vh;">
    <h1 class="text-center text-white my-5">Online Examination System</h1>

    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="card mt-5">
            <div class="card-header">
              Your Result Shown below by details
            </div>
            <div class="card-body">
             <h4><strong> Your Currect Answer is : {{ Session::get('currectans') }} <br/></strong></h4>
             <h4><strong>Your Wrong Answer is : {{ Session::get('wrongans') }}<br/></strong></h4>
             <h4><strong>Your Total Score is : {{ Session::get('currectans') }} Out of {{ Session::get('currectans') + Session::get('wrongans')  }}</strong></h4>
            </div>
            <div class="m-3">
              <a href="{{ route('dashboard') }}" class="btn btn-primary" style="float: right">GO DASHBOARD</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>