<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>HOME PAGE</title>
</head>

<body>
    <form action="" method="POST">
    @csrf
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
                            <a href="/logout" class="nav-link align-middle px-0">
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
                    <h4><b>Selamat datang dihalaman dashboard School Gallery SMKN 2 Banjarmasin</b></h4>
                </center>
                <div class="global-container">
                    <h5>Jumlah data produk</h5>
                    <div class="card" style="width: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$produk}}</h5>
                            <p class="card-text">produk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
