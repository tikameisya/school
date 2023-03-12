<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assest/login.css">

    <title>login</title>
  </head>
  <body>
    <center>
        <img src="assest/logoo.jpg" width="100px" class="mt-5">
        <h5 class="mt-5" ><b>Selamat Datang Di Admin Technopark Gallery</b></h5>
        <h5><b>SMKN 2 Banjarmasin</b></h5>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form class="login" method="post" action="/proseslogin">
                    @csrf
                    <h4 class="text-center mb-2">Login</h4>
                    <hr>
                    <!--Alert-->
                    @if(session()->has('berhasil'))
                        <div class="alert1 alert-success alert-dismissible fade show" role="alert">
                            <div>
                                {{ session('berhasil') }}
                            </div>
                        </div>
                    @endif
                    @if(session()->has('gagallogin'))
                        <div class="alert1 alert-danger alert-dismissible fade show" role="alert">
                            <div>
                                {{ session('gagallogin') }}
                            </div>
                        </div>
                    @endif
                    <div class="mb-4">
                      <!--input-->
                    <input type="text" class="form-control borderinput" placeholder="email" name="email">
                    </div>
                    <div class="mb-3">
                    <input type="password" class="form-control borderinput" placeholder="Password" name="password">
                    </div>
                    <!--akhir input-->
                    <div class="d-grid gap-2 justify-content-md-end">
                        <button type="submit" class="btn btn-outline-light">login</button>
                    </div>
                    <div id="emailHelp" class="form-text">Belum punya akun? <a href="/register" class="text-decoration-none">daftar sekarang</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>