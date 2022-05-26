<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background-image: url(./img/bg1.jpg); background-repeat:no-repeat; background-size:cover;  height:100vh;">
    <h1 class="text-center text-white my-5">Online Examination System</h1>

    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <p id="countdown" class="text-center fs-3 fw-bold text-white mb-0">10:00</p>
          <div class="card mt-2">
            <div class="card-body">
              <form action="{{ route('submitans') }}" method="POST">
                @csrf
                <h4>Q: {{ Session::get('nextq') }}. &nbsp;{{ $question->question }}</h4>
                <div class="m-3">
                  <input style="cursor: pointer" type="radio" name="ans" value="a" checked="true">&nbsp;<span>{{ $question->a }}</span><br/>
                  <input style="cursor: pointer" type="radio" name="ans" value="b">&nbsp;<span>{{ $question->b }}</span><br/>
                  <input style="cursor: pointer" type="radio" name="ans" value="c">&nbsp;<span>{{ $question->c }}</span><br/>
                  <input style="cursor: pointer" type="radio" name="ans" value="d">&nbsp;<span>{{ $question->d }}</span>
                  <input style="cursor: pointer; visibility:hidden" name="db_ans" value="{{ $question->ans }}">
                </div>
                  <button type="submit" class="btn btn-primary mt-3" style="float: right">Next</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const startingMinutes = 10;
      let startingTime = startingMinutes * 60;
      const countDownEl = document.getElementById('countdown');
      setInterval(updateTime, 1000);
      function updateTime(){
        const minutes = Math.floor(startingTime / 60);
        const seconds = startingTime % 60;
        --startingTime;
        countDownEl.innerHTML = `${minutes} : ${seconds}`;
        
      }

    </script>
  </body>
</html>