<?php

session_start();
if ( !isset($_SESSION["users"]) ) {
  header("Location: ../.");
  exit;

}


require '../functions.php';
$pengingat = mysqli_query($conn, "SELECT * FROM pengingat");
$ingat = mysqli_num_rows($pengingat);

$pengeluaran = query("SELECT * FROM pengeluaran");

$id = $_GET["id"];
$pemasukan  = query("SELECT * FROM pemasukan WHERE id = $id")[0];

$topi = mysqli_query($conn, "SELECT * FROM artikel");
$topik = mysqli_num_rows($topi);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CashApp - Detail Demasukan Dana</title>

        <!-- favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="../favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="../favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="../favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="../favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

 

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">user</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href=".">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Cash
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-credit-card"></i>
                    <span>Tagihan Cash</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Bulan</h6>
                        <a class="collapse-item" href="januari">Januari</a>
                        <a class="collapse-item" href="februari">Februari</a>
                        <a class="collapse-item" href="maret">Maret</a>
                        <a class="collapse-item" href="april">April</a>
                        <a class="collapse-item" href="mei">Mei</a>
                        <a class="collapse-item" href="juni">Juni</a>
                        <a class="collapse-item" href="juli">Juli</a>
                        <a class="collapse-item" href="agustus">Agustus</a>
                        <a class="collapse-item" href="september">September</a>
                        <a class="collapse-item" href="oktober">Oktober</a>
                        <a class="collapse-item" href="november">November</a>
                        <a class="collapse-item" href="desember">Desember</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Komunitas
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="daftar-admin">
                <i class="fas fa-user-cog"></i>
                    <span>Admin</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="jiwa">
                <i class="fas fa-users"></i>
                    <span>Nama Komunitas</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="anggota-aktif">
                <i class="fas fa-registered"></i>
                    <span>Anggota Aktif</span></a>
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

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="text-gray-800" style="font-size: 25px">Menu</div>
                    

                   

                   <!-- Topbar Navbar -->
                   <ul class="navbar-nav ml-auto">
                        <!-- pengingat -->
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link "href="pengingat" role="button">
                            <i class="fas fa-bullhorn fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter"><?= $ingat; ?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            </li>
                        <!-- akhir pengingat -->

                        <!-- diskusi -->
                         <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link " href="forum-disquse" target="_blank" role="button">
                            <i class="fas fa-comments"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter"><?= $topik; ?></span>
                            </a>
                        </li>
                        <!-- akhir diskusi -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-md-inline text-gray-600 small"></span>
                                <i class="fas fa-user-circle" style="font-size: 35px;"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               <a class="dropdown-item" href="buat-pengingat">
                                    <i class="fas fa-bullhorn fa-sm fa-fw mr-2 text-info"></i>
                                    Buat Pengumuman
                                </a>
                               <a class="dropdown-item" href="bug">
                                    <i class="fas fa-bug fa-sm fa-fw mr-2 text-danger"></i>
                                    Laporkan bug
                                </a>
                               <a class="dropdown-item" href="tentang">
                                    <i class="fas fa-info-circle fa-sm fa-fw mr-2 text-primary"></i>
                                    Tentang
                                </a>
                               <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <!-- tambah data -->
                <!-- Dropdown Card Example -->
              <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
            </div>
            <a href="." class="btn btn-info btn-sm shadow-sm">Kembali</a>

            <div class="container">
                <div class="row">
                    <div class="col">
                    <div class="btn-group  mt-5">
                <a href="#" class="btn btn-primary btn-sm shadow-sm active" aria-current="page">Detail Pemasukan</a>

                <?php foreach($pengeluaran as $row) : ?>
                <a href="detail-pengeluaran.php?id= <?= $row ["id"]; ?>" class="btn btn-primary btn-sm shadow-sm">Detail Pengeluaran</a>
                <?php endforeach; ?>
            </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="container">
              <div class="row justify-content-center mt-3">
                <div class="col-md-6">
                    <!-- Dropdown Card Example -->
                    <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">DETAIL</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="container">
                                  <div class="row mt-3">
                                    <div class="col">
                                    <form action="" method="post">
                                                <input type="hidden" name="id" value="<?= $pemasukan["id"]; ?>">
                                                <label for="">NOMINAL PEMASUKAN</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                    </div>
                                                    <input type="number" name="pemasukan" class="form-control" placeholder="Nominal" required value="<?= $pemasukan["pemasukan"]; ?>" disabled >
                                                    <div class="input-group-append">
                                                    <span class="input-group-text">,00.</span>
                                                    </div>
                                                </div>

                                                <label for="">WAKTU</label>
                                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                <input type="text" name="waktu" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?= $pemasukan["waktu"]; ?>" disabled />
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>

                                                <div class="form-group mt-2">
                                                    <label for="keterangan">KETERANGAN</label>
                                                    <p><?= $pemasukan["keterangan"]; ?></p>
                                                </div>
                                            </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            </div>
                </div>
              </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                                    <div class="container my-auto">
                                        <div class="copyright text-center my-auto">
                                            <h6> &copy; Copyright <b>CashApp</b>. All Right reserved</h6>
                                            <p>Developed by <a href="https://ferlanferlani.rf.gd"><b>Ferlan Ferlani</b></a></p>
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
                    <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin ingin benar keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                    <a class="btn btn-primary" href="logout.php">Ya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>