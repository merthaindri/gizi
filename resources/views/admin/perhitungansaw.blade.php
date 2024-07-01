<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perhitungan SAW</title>

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
                <div class="sidebar-brand-text mx-3">SPK REKOMENDASI</div>
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
            <li class="nav-item">
                <a class="nav-link" href="makanan">
                    <span>Data Makanan</span></a>
            </li>

            <!-- Nav Item - Perhitungan SAW -->
            <li class="nav-item active">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-light">Hi, Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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

                    <!-- DataTales Example -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Perhitungan SAW</h6>
                        </div>
                        <div class="card-body">
                            <form method="GET" action="{{ url('perhitungansaw') }}">
                                <div class="form-group">
                                    <label for="jenis_makanan">Jenis Makanan</label>
                                    <select name="jenis_makanan" id="jenis_makanan" class="form-control">
                                        <option value="">Pilih Jenis Makanan</option>
                                        <option value="Masakan" {{ $jenisMakanan == 'Masakan' ? 'selected' : '' }}>Masakan</option>
                                        <option value="Karbohidrat" {{ $jenisMakanan == 'Karbohidrat' ? 'selected' : '' }}>Karbohidrat</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </form>

                            @if($jenisMakanan)
                            <div class="table-responsive">
                                <!-- Tabel Matriks Keputusan -->
                                <h6 class="mt-4 font-weight-bold text-primary">Matriks Keputusan</h6>
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Makanan</th>
                                            @foreach ($kriteria as $criterion)
                                            <th>{{ $criterion->nama }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($decisionMatrix as $foodId => $values)
                                        <tr>
                                            <td>{{ $values['nama_makanan'] }}</td>
                                            @foreach ($kriteria as $criterion)
                                            <td>{{ $values[$criterion->nama] ?? 0 }}</td>
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Tabel Normalisasi Data -->
                                <h6 class="mt-4 font-weight-bold text-primary">Normalisasi Data</h6>
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Makanan</th>
                                            @foreach ($kriteria as $criterion)
                                            <th>{{ $criterion->nama }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($makanan as $food)
                                        <tr>
                                            <td>{{ $food->nama_makanan }}</td>
                                            @foreach ($kriteria as $criterion)
                                            <td>{{ number_format($normalizedMatrix[$food->id][$criterion->nama] ?? 0, 2) }}</td>
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Tabel Nilai Preferensi -->
                                <h6 class="mt-4 font-weight-bold text-primary">Nilai Preferensi</h6>
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Makanan</th>
                                            <th>Nilai Preferensi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($preferences as $foodId => $preference)
                                        <tr>
                                            <td>{{ $makanan->find($foodId)->nama_makanan }}</td>
                                            <td>{{ number_format($preference, 2) }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endif
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

    <!-- Page level custom scripts -->
    <!-- <script src="{{ asset('../js/demo/datatables-demo.js') }}"></script> -->

</body>

</html>
