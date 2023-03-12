<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CREATE PAGE</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/home"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Dashboard</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="/produk" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Kelola Data
                                    Produk</span>
                            </a>
                            <a href="/home" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Log out</span>
                            </a>
                        </li>
                    </ul>

                    <div class="dropdown pb-4">

                    </div>
                </div>
            </div>
            <div class="col py-3">
                <center>
                    <h5><b>Halaman tambah produk</b></h5>
                </center>
                <form action="/creating" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <p class="text">Judul Produk</p>
                                    <input type="text" class="form-control" name="judulproduk">
                                </div>
                                <div class="mb-3">
                                    <p class="text">Deskripsi Produk</p>
                                    <input type="text" class="form-control" name="deskripsiproduk">
                                </div>
                                <div class="mb-3">
                                    <p class="text">Harga</p>
                                    <input type="text" class="form-control" name="harga"
                                    >
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" name="gambar" class="form-control" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" onclick="alert()" name="submit" value="update">
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function alert() {
      Swal.fire({
      title: 'Tambah Data Berhasil !',
      text: "Kembali ke Home ? ",
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Shappp!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "produk"
      }
    })
  }
</script>
</html>
