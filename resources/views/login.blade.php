<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="icon" href="{!!asset('assets/gambar/logo qudang.png')!!}">
    <title>Qudang</title>
  </head>
  <body>
    @if (Session::has('message'))
        <script>
            alert("{!!Session::get('alert')!!}");
        </script>
    @endif
    <div class="container">

        <div class="card" style="width: max-content; margin-left: auto;margin-right: auto;position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);">
            <div class="card-body text-center">
              <h3>Login</h3>
              {!! Form::open(array('method'=>'POST','url'=>'/cekLogin')) !!}
              <div class="form-floating mb-3" style="width: 400px; margin: 30px">

                {!! Form::text('user_login','', ['placeholder'=>'Username','class'=>'form-control','id'=>'floatingInput','required','autofocus','autocomplete'=>'off']) !!}
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating" style="width: 400px; margin: 30px">
                {!! Form::password('user_password', ['placeholder'=>'Password','id'=>'floatingPassword','class'=>'form-control','required']) !!}
                <label for="floatingPassword">Password</label>
              </div>
              {!! Form::submit('Login', ['class'=>'btn btn-primary','style'=>"width: 400px; margin-bottom:30px"]) !!}
              {!! Form::close() !!}
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
