<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Informasi Apotek</title>
        <!-- Favicon-->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id = "sidebar-wrapper" style="width: 250px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-4">Sistem Informasi Apotek</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link text-white">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/Obat" class="nav-link text-white">
                        Data Obat
                        </a>
                    </li>
                    <li>
                        <a href="/Satuan" class="nav-link text-white">
                        Satuan Obat
                        </a>
                    </li>
                    <li>
                        <a href="/Jenis" class="nav-link text-white">
                        Jenis Obat
                        </a>
                    </li>
                    <li>
                        <a href="/Supplier" class="nav-link text-white">
                        Data Supplier
                        </a>
                    </li>
                    <li>
                        <a href="/Beli" class="nav-link text-white">
                        Obat Masuk
                        </a>
                    </li>
                    <li>
                        <a href="/Jual" class="nav-link text-white">
                        Obat Keluar
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="nav-link text-white">
                        Logout
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>{{auth()->user()->name}}</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="/Obat/create">Tambah Data Obat</a></li>
                        <li><a class="dropdown-item" href="/Satuan/create">Tambah Satuan Obat</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/login">Logout</a></li>
                    </ul>
                </div>
            </div>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">{{auth()->user()->name}}</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarsExample01">
                            <ul class="navbar-nav me-auto mb-2">
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="/register">Register with another account</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/About">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                @yield('content')

            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>