<?php

session_start();
if ( !isset($_SESSION["admin"]) ) {
  header("Location: ../.");
  exit;

}

require '../functions.php';

$pemasukan = query("SELECT * FROM pemasukan");
$pengeluaran = query("SELECT * FROM pengeluaran");

$pengingat = mysqli_query($conn, "SELECT * FROM pengingat");
$ingat = mysqli_num_rows($pengingat);

$komentar = mysqli_query($conn, "SELECT * FROM komentar");
$komen = mysqli_num_rows($komentar);

$topi = mysqli_query($conn, "SELECT * FROM artikel");
$topik = mysqli_num_rows($topi);

$data = query("SELECT * FROM komentar");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>CashApp - Forum Disquse</title>

  <style>
  .card .scroll {
    display: block;
    padding: 5px;
    margin-top: 5px;
    width: auto;
    height: 300px;
    overflow: scroll;
  }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

<link rel="stylesheet" href="style.css" />

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

<!-- Custom fonts for this template-->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

<!-- Custom styles for this template-->
<link href="../css/sb-admin-2.min.css" rel="stylesheet" />

<!-- Custom styles for this page -->
<link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href=".">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Cash</div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Cash Masuk & Keluar</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Pemasukan & Pengeluaran</h6>
              <?php foreach($pemasukan as $row) : ?>
               <a class="collapse-item" href="detail-pemasukan.php?id= <?= $row ["id"]; ?>">Pemasukan</a>
             <?php endforeach; ?>

             <?php foreach($pengeluaran as $row) : ?>
              <a class="collapse-item" href="detail-pengeluaran.php?id= <?= $row ["id"]; ?>">Pengeluaran</a>
            <?php endforeach;?>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider" />

      <!-- Heading -->
      <div class="sidebar-heading">komunitas</div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item"></li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="daftar-admin">
          <i class="fas fa-user-cog"></i>
          <span>Admin</span></a
          >
        </li>

        <li class="nav-item">
          <a class="nav-link" href="jiwa">
            <i class="fas fa-users"></i>
            <span>Nama Komunitas</span></a
            >
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block" />
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
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <a href="forum-disquse" class="mb-2 btn btn-info btn-sm shadow-sm">Kembali</a>
            <div class="row">
              <!-- DataTales Example -->
              <div class="col-md-6"> 
                <div class="topik" style="
                display: block;
                padding: 20px;
                margin-top: 5px;
                width: auto;
                height: 500px;
                overflow: scroll;
                ">
                <?php
                $id = $_GET['komentar'];
                if (isset($_GET['komentar'])) { 
                  $sql = "SELECT * FROM artikel WHERE id = '$id' ";
                  $query = mysqli_query($conn, $sql);
                  while ($res=mysqli_fetch_array($query)) { 
                    ?>
                    <h4 class="text-primary">Judul Topik</h4>
                    <h5 class="pb-3"><?php echo $res['judul']; ?></h5>
                    <h6>Topik Dari <b class="text-primary"><?= $res["nama"] ;?></b></h6>
                    <hr>

                    <h5 class="mb-4" style="font-weight: 300;">Daftar komentar</h5>

                    <?php
            // Ambil data id artikel
                    $id  = $_GET['komentar'];
          // Query untuk mengambil data komentar sesuai id artikel
                    $sql = "SELECT * FROM komentar WHERE id_art = '$id' ";

                    if($komen > 0) {
                      echo"";
                    } else {
                      echo"<h3 style='text-align:center; padding-top: 7rem;'><i class='fas fa-robot text-primary'></i> Belum ada komentar</h3>";
                    }

                    $que = mysqli_query($conn,$sql);
          // Tampilkan komentar
                    while ($res = mysqli_fetch_array($que)) { ?>
                      <h6 class="text-primary" style="font-weight: bold;" ><i class="fas fa-user text-gray-500"></i> <?php echo $res['nama']; ?></h6>
                      <small><?php echo $res['tanggal']; ?></small>
                      <h6><?php echo $res['isi_komentar']; ?></h6>

                    <?php } ?>
                  <?php } } ?> 
                </div> 
              </div>

              <div class="col-md-6 mt-5">
                <form action="" method="post">
                  <div class="row">
                    <div class="col-md form-group">
                      <?php

                      if( $_SESSION["admin"] ) {
                        $login = $_SESSION["admin"];
                      }

                      $result = mysqli_query($conn, "SELECT * FROM multi_user WHERE id = '$login'");
                      $data = mysqli_fetch_assoc($result);

                      ?>

                      <div class="col-md form-group">
                        <input type="hidden" name="nama" class="form-control col-md-6" value="<?=$data ["username"]; ?>"/>
                      </div>
                    </div>
                    <input type="hidden" name="tanggal" id="tanggal" value="<?php date_default_timezone_set('Asia/jakarta');
                    $date = date('l, d/m/y h:i'); echo $date . " PM"; ?>">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="isi_komentar" rows="7" required placeholder="Komentar..."></textarea>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary shadow btn-sm mb-5">Kirim</button>
                </form>
                <?php
	// Jika tombol submit di klik
                if (isset($_POST['submit'])) {
		// Ambil data nama dari input yang ber-name 'nama'
                  $nama = $_POST['nama'];
		// Ambil data isi dari yang ber-name 'isi'
                  $isi  = $_POST['isi_komentar'];
		// Tanggal sekarang (Sesuai tanggal di komputer)
                  $tgl  = date("d-m-Y");

		// Simpan data ke database
                  $sql  = "INSERT INTO komentar VALUES (NULL, '$id', '$nama', '$tgl', '$isi')";
                  $que  = mysqli_query($conn,$sql);
		// Refresh halaman dengan durasi 1 detik
                  echo "<meta http-equiv='refresh' content='0;url=komentar.php?komentar=".$id."'>";
                }
                ?>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Apakah anda yakin ingin keluar?</div>
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

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  </html>
