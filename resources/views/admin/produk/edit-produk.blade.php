<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Produk</title>
    <link rel="icon" href="{{ asset('assets/images/shops.png') }}" type="image/png">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store rotate-n-15"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin E-Commerce</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Produk & Transaksi
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - katalog Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('produk') }}">
                    <i class="fas fa-fw fa-desktop"></i>
                    <span>Produk</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('kategori') }}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Kategori</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('order') }}">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span>Transaksi</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Akun
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('akun') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User Admin</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('assets/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Ubah Data Produk
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('ubah-produk',$dtProduk->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Pilih Gambar</label>
                                <input type="file" id="gambar" name="gambar" class="form-control" style="height: 45px">
                            </div>
                            <img src="{{ asset('images/produk/'.$dtProduk->gambar ) }}" width="95px" height="80px" alt="img">
                            <div class="form-group mt-3">
                                <label for="kategori_id" class="form-label">Kategori</label>
                                <select class="form-control" name="kategori_id" id="kategori_id">
                                    <option value="{{ $dtProduk->kategori_id }}">{{ $dtProduk->kategori->nama_kategori }}</option>
                                    @foreach($dtKategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kd_produk" class="form-label">Kode Produk</label>
                                <input type="text" id="kd_produk" name="kd_produk" value="{{ $dtProduk->kd_produk }}" class="form-control" placeholder="Masukan Kode Produk" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_produk" class="form-label">Nama Produk</label>
                                <input type="text" id="nama_produk" name="nama_produk" value="{{ $dtProduk->nama_produk }}" class="form-control" placeholder="Masukan Nama Produk" required>
                            </div>
                            <div class="form-group">
                                <label for="kuantitas" class="form-label">Kuantitas Produk</label>
                                <input type="number" id="kuantitas" name="kuantitas" min="0" value="{{ $dtProduk->kuantitas }}" class="form-control" placeholder="Masukan Harga Produk" required>
                            </div>
                            <div class="form-group">
                                <label for="harga" class="form-label">Harga Produk</label>
                                <input type="number" id="harga" name="harga" min="0" value="{{ $dtProduk->harga }}" class="form-control" placeholder="Masukan Harga Produk" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                                <textarea type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Masukan Deskripsi Produk" required>{{ $dtProduk->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-submit">Ubah</button>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik logout untuk keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'deskripsi' );
    </script>

</body>

</html>