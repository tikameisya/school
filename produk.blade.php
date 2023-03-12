<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>HOME PAGE</title>
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
                <h5><b>Halaman kelola data produk</b></h5>
                <a class="btn btn-primary" href="/create">Tambah Barang</a>
                <div class="col-10">
                    <table class="table table-primary">
                        <tr>
                            <td>Id Produk</td>
                            <td>Judul Produk</td>
                            <td>Deskripsi Produk</td>
                            <td>Harga</td>
                            <td>Gambar</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($produk as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->judulproduk}}</td>
                            <td>{{$p->deskripsiproduk}}</td>
                            <td>{{$p->harga}}</td>
                            <td>
                                <img width="50" src="{{ asset('storage/gambar/' . $p->gambar) }}" class="img-fluid" alt="" srcset="">
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-warning" href="/{{$p->id}}/edit">Edit</a>
                                    <form action="/produk/{{$p->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" name="" value="delete" class="btn btn-danger">
                                </div>
                            </td>
                        </tr>
                        @endforeach
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</body>

</html>
