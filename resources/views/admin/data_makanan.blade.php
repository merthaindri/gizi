<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Makanan</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('../../vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('../css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('../vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3"> SPK REKOMENDASI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="home">
                    <span>Beranda</span></a>
            </li>

            <!-- Nav Item - Data Kriteria -->
            <li class="nav-item">
                <a class="nav-link" href="kriteria">
                    <span>Data Kriteria</span></a>
            </li>

            <!-- Nav Item - Data Sub Kriteria -->
            <li class="nav-item">
                <a class="nav-link" href="subkriteria">
                    <span>Data Sub Kriteria</span></a>
            </li>

            <!-- Nav Item - Data Makanan -->
            <li class="nav-item active">
                <a class="nav-link" href="makanan">
                    <span>Data Makanan</span></a>
            </li>

            <!-- Nav Item - Perhitungan SAW -->
            <li class="nav-item">
                <a class="nav-link" href="perhitungansaw">
                    <span>Perhitungan SAW</span></a>
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
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-light">Hi, Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <form method="post" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class='dropdown-item'>
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Makanan</h6>
                        </div>
                        <div class="card-body">
                        <form method="GET" class="form-inline">
                            <div class="form-group mr-3">
                                <label for="jenis_makanan" class="mr-2">Jenis Makanan</label>
                                <select name="jenis_makanan" id="jenis_makanan" class="form-control">
                                    <option value="">Filter</option>
                                    @foreach ($jenisMakananOptions as $option)
                                        <option value="{{ $option }}" {{ $jenisMakanan == $option ? 'selected' : '' }}>{{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </form>
                            <br>
                            <a href="/tambahmakanan" class="btn btn-secondary">Tambah Data</a>
                            <br><br>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Jenis Makanan</th>
                                            <th class="text-center">Nama Makanan</th>
                                            <th class="text-center">Natrium</th>
                                            <th class="text-center">Kalium</th>
                                            <th class="text-center">Protein</th>
                                            <th class="text-center">Indeks Glikemik</th>
                                            <th class="text-center">Cara Pengolahan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $row)
                                            <tr>
                                                <th scope="row" class="row-number text-center">{{ $loop->iteration }}</th>
                                                <td class="text-center">{{ $row->jenis_makanan }}</td>
                                                <td class="text-center">{{ $row->nama_makanan }}</td>
                                                <td class="text-center">{{ $row->natriumInfo->rentang_nilai ?? "-"}}</td>
                                                <td class="text-center">{{ $row->kaliumInfo->rentang_nilai?? "-" }}</td>
                                                <td class="text-center">{{ $row->proteinInfo->rentang_nilai ?? "-"}}</td>
                                                <td class="text-center">{{ $row->indeksGlikemik->rentang_nilai ?? "-"}}</td>
                                                <td class="text-center">{{ $row->caraPengolahan->rentang_nilai ?? "-"}}</td>
                                                <td class="text-center">
                                                    <a href="/tampilmakanan/{{ $row->id }}" class="btn btn-secondary">Edit</a>
                                                    <br><br>
                                                    <a href="/hapusmakanan/{{ $row->id }}" class="btn btn-secondary">Hapus</a>
                                                </td>  
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
    <script src="{{ asset('../vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('../vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('../vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('../js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('../vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('../vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

</body>

</html>
