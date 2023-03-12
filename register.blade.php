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
    <link rel="stylesheet" href="assest/regist.css">

    <title>Daftar</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-6">
                <form class="register" method="post" action="/registeruser">
                    @csrf
                    <div>
                        <a class="btn text-light inline-block" href="/"><i class="bi bi-arrow-left-circle"></i></a>
                        <h4 class="text-center mb-2">Daftar</h4>
                    </div>
                    <hr>
                    <!--input-->
                    <div class="mb-3">
                        <input type="text" class="form-control borderinput" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control borderinput" placeholder="Username" name="username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control borderinput" placeholder="password" name="password">
                    </div>
                    <div class="mb-3">
                        <input type="hidden" value="user" class="form-control borderinput" name="role">
                    </div>
                    <!--akhir input-->
                    <div class="d-grid gap-2 justify-content-md-end">
                        <button type="submit" class="btn btn-outline-light btn-r" >Daftar</button>
                    </div>
                        <div id="emailHelp" class="form-text text-center mt-4">
                            <a href="/login" class="text-decoration-none">Sudah memiliki akun?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>