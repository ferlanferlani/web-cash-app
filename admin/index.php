<?php

session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: ../.");
    exit;
}

// if (isset($_SESSION["admin"])) {
//     echo "<script>
//     alert('Berhasil login');
//          </script>";
//     exit;
// }

require '../functions.php';

$pengingat = mysqli_query($conn, "SELECT * FROM pengingat");
$ingat = mysqli_num_rows($pengingat);

$jiwa = mysqli_query($conn, "SELECT * FROM data");

$pemasukan = query("SELECT * FROM pemasukan");
$pengeluaran = query("SELECT * FROM pengeluaran");

$topi = mysqli_query($conn, "SELECT * FROM artikel");
$topik = mysqli_num_rows($topi);

$jumlah_jiwa = mysqli_num_rows($jiwa);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CashApp - Dashboard</title>

    <!-- favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../favicon/apple-touch-icon-152x152.png" />
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-fixed sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-cog"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
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

                <?php foreach ($pemasukan as $row) : ?>
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="pemasukan.php?id= <?= $row["id"]; ?>">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Kelola Dana Masuk</span></a>
                        </li>
                    <?php endforeach; ?>

                    <?php foreach ($pengeluaran as $row) : ?>
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link" href="pengeluaran.php?id= <?= $row["id"]; ?>">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Kelola Dana Keluar</span></a>
                            </li>
                        <?php endforeach; ?>


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
                                    <a class="collapse-item"
                                    href="maret">Maret</a>
                                    <a class="collapse-item"
                                    href="april">April</a>
                                    <a class="collapse-item" 
                                    href="mei">Mei</a>
                                    <a class="collapse-item" 
                                    href="juni">Juni</a>
                                    <a class="collapse-item" 
                                    href="juli">Juli</a>
                                    <a class="collapse-item" href="agustus">Agustus</a>
                                    <a class="collapse-item" href="september">September</a>
                                    <a class="collapse-item" href="oktober">Oktober</a>
                                    <a class="collapse-item" href="november">November</a>
                                    <a class="collapse-item" href="desember">Desember</a>
                                </div>
                            </div>
                        </li>

                        <!-- Nav Item - Utilities Collapse Menu -->
                        <li class="nav-item ">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                                <i class="fas fa-fw fa-chart-bar"></i>
                                <span>Cash Masuk & Keluar</span>
                            </a>
                            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Pemasukan & Pengeluaran</h6>

                                    <?php foreach ($pemasukan as $row) : ?>
                                        <a class="collapse-item" href="detail-pemasukan.php?id= <?= $row["id"]; ?>">Pemasukan</a>
                                    <?php endforeach; ?>

                                    <?php foreach ($pengeluaran as $row) : ?>
                                        <a class="collapse-item" href="detail-pengeluaran.php?id= <?= $row["id"]; ?>">Pengeluaran</a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Heading -->
                        <div class="sidebar-heading">
                            KOMUNITAS
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
                                <a class="nav-link" href="jiwa">
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
                                                    <a class="dropdown-item" href="profile">
                                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-dark"></i>
                                                        Profile
                                                    </a>
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
                                        <?php

                                        if( $_SESSION["admin"] ) {
                                            $login = $_SESSION["admin"];
                                        }

                                        $result = mysqli_query($conn, "SELECT * FROM admin WHERE id = '$login'");
                                        $data = mysqli_fetch_assoc($result);

                        //   Set Waktu sekarang
                                        $tanggal = mktime(date("m"), date("d"), date("y"));
                        // echo date("l, d-m-y", $tanggal);
                                        date_default_timezone_set("Asia/jakarta");
                                        $jam = date("h-i-s");
                        // echo" pukul : ". "$jam";
                                        $a = date("H");

                                        date_default_timezone_set("Asia/jakarta");
                                        $tanggal = date("l, d-m-y");
                                        $jm = date("h:i");

                                        ?>

                                        <!-- toast -->
                                            <?php if( isset($_SESSION["welcome"])) : ?>
                                            <div aria-live="polite" aria-atomic="true" style="position: relative;">
                                                <div class="toast position-fixed mt-2" data-animation="true" data-delay="1000" data-autohide="false" style="position: absolute; top: 0; right: 0; z-index: 11; ">
                                                    <div class="toast-header">
                                                        <span class="mr-2 text-primary"><i class="fas fa-robot"></i></span>
                                                        <strong class="mr-auto">CABOT</strong>
                                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="toast-body">
                                                        <?php

                                                        $pagi = ", selamat datang dan selamat pagi, perkenalkan nama saya adalah <b>CABOT</b> (Cash App Bot), saya di buat dan di program guna menemani aktivitas anda disini.";

                                                        $siang = ", selamat datang dan selamat siang, perkenalkan nama saya adalah <b>CABOT</b> (Cash App Bot), saya di buat dan di program guna menemani aktivitas anda disini.";

                                                        $sore = ", selamat datang dan selamat sore, perkenalkan nama saya adalah <b>CABOT</b> (Cash App Bot), saya di buat dan di program guna menemani aktivitas anda disini.";

                                                        $malam = ", selamat datang dan selamat malam, perkenalkan nama saya adalah <b>CABOT</b> (Cash App Bot), saya di buat dan di program guna menemani aktivitas anda disini.";

                                                        if( ($a >= 6) && ($a <= 10)) {
                                                            echo"Hai " . "<b>" . $data["username"] . "</b>" . $pagi;

                                                        } elseif (($a >= 10) && ($a <= 15)) {
                                                            echo"Hai " . "<b>" . $data["username"] . "</b>" . $siang;

                                                        } elseif (($a >= 16) && ($a <= 18)) {
                                                            echo"Hai " . "<b>" . $data["username"] . "</b>" . $sore;

                                                        } elseif (($a >= 19) && ($a <= 24)) {
                                                            echo"Hai " . "<b>" . $data["username"] . "</b>" . $malam;

                                                        } else {
                                                            echo"Hai " . "<b>" . $data["username"] . "</b>" . $pagi;
                                                        }
                                                        ?>
                                                    </div>
                                                </div>     
                                            </div>
                                        <?php endif;
                                         unset($_SESSION["welcome"] );
                                         ?>
                                        <!-- akhir toast -->

                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                            <div class="tbl">
                                                <button type="button" class="btn btn-primary mt-2 btn-sm shadow" data-toggle="modal" data-target="#modalscrollable" style="margin-right: 15rem;"><i class="fas fa-info-circle"></i> Tips</button>
                                            </div>

                                            <div class="modal fade" id="modalscrollable" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Tips!</h4>
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <p>Sedikit Tips! Mungkin sebagian dari kalian sudah mengetahui atau mungkin juga ada yang belum. Supaya aplikasi web ini lebih mudah di akses, flexsible dan lebih mudah di gunakan, Buat <i>shorcut</i> yang ada pada aplikasi web browser anda masing-masing rekomendasi (google chrome) dengan cara sebagai berikut.</p>
                                                            <ul>
                                                                <li>
                                                                    Pastikan web browser yang anda gunakan saat ini adalah google chrome (cara ini tidak jauh berbeda dengan web browser lain).
                                                                </li>
                                                                <li>
                                                                    Klik tanda <i class="fas fa-ellipsis-v fa-sm fa-fw"></i> di sebelah kanan atas, setelah anda klik scroll sidebar sedikit ke bawah dan klik pada menu <b>Tambahkan ke layar utama</b> perhatikan gambar di bawah!
                                                                </li>
                                                                <img src="../img/tips.jpg" height="400" alt="Tips" style="padding: 1rem;">
                                                                <img src="../img/tips2.png" height="400" alt="Tips" style="padding: 1rem;">
                                                                <li>Setelah itu rename dengan nama <b>Akamsi Cash</b> dan klik tambahkan maka secara otomatis <i>shorctut</i> atau aplikasi ini berada tampil di layar utama smartphone anda, Sekarang coba cek di layar utama smartphone anda. Belum berhasil? tanya di <a href="forum-disquse" target="_blank">disini</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card border-left-primary shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-1">
                                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                Jumlah Jiwa Komunitas</div>


                                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_jiwa; ?> Jiwa</div>

                                                                <a href="jiwa"><button type="button" class="btn btn-primary mt-3 btn-sm shadow-sm"><i class="fas fa-info-circle"></i> Detail</button></a>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-users fa-2x text-primary"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Earnings (Monthly) Card Example -->

                                            <?php foreach ($pemasukan as $row) : ?>

                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-1">
                                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                                    Pemasukan Bulan Ini</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp<?= $row["pemasukan"]; ?>,00.</div>
                                                                    <a href="detail-pemasukan.php?id= <?= $row["id"]; ?>"><button type="button" class="btn btn-success mt-3 btn-sm shadow-sm"><i class="fas fa-info-circle"></i> Detail</button></a>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-fw fa-chart-bar fa-2x text-success"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                            <!-- Earnings (Monthly) Card Example -->

                                            <?php foreach ($pengeluaran as $row) : ?>

                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-1">
                                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengeluaran Bulan Ini
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp<?= $row["pengeluaran"]; ?>,00.</div>
                                                                            <a href="detail-pengeluaran.php?id= <?= $row["id"]; ?>"><button type="button" class="btn btn-info mt-3 btn-sm shadow-sm"><i class="fas fa-info-circle"></i> Detail</button></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-fw fa-chart-bar fa-2x text-info"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                            <!-- Pending Requests Card Example -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card border-left-danger shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                                Diskusi</div>
                                                                <div class="mt-3"> <a href="forum-disquse" target="_blank"><button class=" btn btn-danger btn-sm"> <i class="fas fa-comments"></i> Live Diskusi</button></a></div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fas fa-comments fa-2x text-danger"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Content Row -->

                                        <div class="row">

                                            <!-- Area Chart -->
                                            <div class="col-xl-8 col-md-7">
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                        <h6 class="m-0 font-weight-bold text-primary"><i>Statistik Pemasukan Dana Setiap Tahun</i></h6>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <div class="chart-area">
                                                            <canvas id="myAreaChart"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Pie Chart -->
                                            <div class="col-xl-4 col-md-5">
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                        <h6 class="m-0 font-weight-bold text-primary">KETERANGAN</h6>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <p>"Nama komunitas, kelompok, atau kelas untuk sekolah dll." diwajibkan membayar cash bulanan dengan biaya sebesar <b>Rp10.000,00/bulan</b>.</p>
                                                        <p class="mb-0">Tagihan ini berjalan setiap memasuki bulan baru atau pergantian bulan/tanggal muda.</p>
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

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


                        <script>
                          $('.toast').toast('show');
                      </script>

                  </body>

                  </html>