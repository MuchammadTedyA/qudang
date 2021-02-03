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
    <!-- Image and text -->
    {{-- <div class="container"> --}}


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="font-size: 20px; font-family:Geneva">
          <a class="navbar-brand" href="beranda" style="font-size: 30px; font-family:Geneva">
            <img src="{!!asset('assets/gambar/logo qudang.png')!!}" alt="" width="50" height="50" class="d-inline-block align-top" style="margin-left: 20px">
            Qudang
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dataBarang">Data Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="departemen">Departemen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="supplier">Supplier</a>
                </li>
            </ul>
            <form class="d-flex" style="margin-right: 20px">
                <p style="margin-left: 20px; margin-top: 20px">{{session()->get('name')}}</p>
                <img src="{!!asset('assets/gambar/akun.png')!!}" alt="" width="50" height="50" class="d-inline-block align-top" style="margin-left: 20px; margin-top: 15px">
                <a class="btn btn-danger" href="logout" role="button" style="height: fit-content; margin: 20px">Keluar</a>
            </form>
          </div>
        </div>
      </nav>

      <div class="container">
        <h1 style="font-family:Geneva; text-align: center">@yield('judul')</h1>
        <hr>
        @yield('section')
      </div>


    {{-- </div> --}}



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
