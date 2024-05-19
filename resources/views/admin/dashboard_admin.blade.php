<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPK Rekomendasi</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('../../vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('../css/sb-admin-2.css') }}" rel="stylesheet" type="text/css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3"> SPK REKOMENDASI </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Nav Item - Data Makanan -->
            <li class="nav-item">
                <a class="nav-link" href="data_makanan.blade.php">
                    <i class="fa-solid fa-utensils"></i>
                    <span>Data Makanan</span></a>
            </li>

            <!-- Nav Item - Data Kriteria -->
            <li class="nav-item">
                <a class="nav-link" href="kriteria">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Kriteria</span></a>
            </li>

            <!-- Nav Item - Data Kriteria -->
            <li class="nav-item">
                <a class="nav-link" href="subkriteria">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Sub Kriteria</span></a>
            </li>

            <!-- Nav Item - Hasil Rekomendasi -->
            <li class="nav-item">
                <a class="nav-link" href="rekomendasi.blade.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Hasil Rekomendasi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-secondary topbar mb-4 static-top">
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Data Makanan -->
                        <div class="col-xl-3 mb-5">
                            <div class="card border shadow h-100 py-2 bg-secondary">
                                <div class="card-body">
                                    <div class="align-items-center">
                                        <div class="col mr-2">
                                            <div class="h7 mb-0 font-weight-bold text-uppercase text-light text-center">
                                                Data Makanan</div>     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Data Kriteria -->
                        <div class="col-xl-3 mb-5">
                            <div class="card border shadow h-100 py-2 bg-secondary">
                                <div class="card-body">
                                    <div class="align-items-center">
                                        <div class="col mr-2">
                                            <div class="h7 mb-0 font-weight-bold text-uppercase text-light text-center">
                                                Data Kriteria</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Data Kriteria -->
                        <div class="col-xl-3 mb-5">
                            <div class="card border shadow h-100 py-2 bg-secondary">
                                <div class="card-body">
                                    <div class="align-items-center">
                                        <div class="col mr-2">
                                            <div class="h7 mb-0 font-weight-bold text-uppercase text-light text-center">
                                                Data Sub Kriteria</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hasil Rekomendasi -->
                        <div class="col-xl-3 mb-5">
                            <div class="card border shadow h-100 py-2 bg-secondary">
                                <div class="card-body">
                                    <div class="align-items-center">
                                        <div class="col mr-2">
                                            <div class="h7 mb-0 font-weight-bold text-uppercase text-light text-center">
                                                Hasil Rekomendasi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SPK Rekomendasi 2024</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>