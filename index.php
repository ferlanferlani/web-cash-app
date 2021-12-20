<?php
session_start();

if (isset($_SESSION["users"])) {
  header("Location: users/.");
  exit;
}

if (isset($_SESSION["admin"])) {
  header("Location: admin/.");
  exit;
}
require 'functions.php';

$welcome = '<div class="container">
              <div aria-live="polite" aria-atomic="true" style="position: relative;">
                  <div class="toast position-fixed mt-2" data-animation="true" data-delay="1000" data-autohide="false" style="position: absolute; top: 0; right: 0; z-index: 11; ">
                      <div class="toast-header">
                          <span class="mr-2 text-primary"><i class="fas fa-robot"></i></span>
                          <strong class="mr-auto">CABot</strong>
                          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="toast-body">
                          <?php

                          $pagi = ", selamat datang dan selamat pagi, perkenalkan nama saya adalah <b>AkamsiBot</b>, saya di buat dan di program guna menemani aktivitas anda disini.";

                          $siang = ", selamat datang dan selamat siang, perkenalkan nama saya adalah <b>AkamsiBot</b>, saya di buat dan di program guna menemani aktivitas anda disini.";

                          $sore = ", selamat datang dan selamat sore, perkenalkan nama saya adalah <b>AkamsiBot</b>, saya di buat dan di program guna menemani aktivitas anda disini.";

                          $malam = ", selamat datang dan selamat malam, perkenalkan nama saya adalah <b>AkamsiBot</b>, saya di buat dan di program guna menemani aktivitas anda disini.";

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
              </div>';


$tentang = ' <div aria-live="polite" aria-atomic="true" style="position: relative;">
              <div class="toast position-fixed mt-2" data-animation="true" data-delay="5000" data-autohide="true" style="position: absolute; top: 0; right: 0; z-index: 11; ">
              <div class="toast-header">
                <span class="mr-2 text-primary"><i class="fas fa-robot"></i></span>
                <strong class="mr-auto">AkamsiBot</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="toast-body">
              <p>Hai <b><?= $data["username"] ;?></b>, Apakah anda sudah tahu apa itu Akamsi Cash? baca selengkapnya di sini!</p>
              </div>
              </div>
              </div>';

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM multi_user WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1 ) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {

      if( $row['level'] == 'admin') {
        // set session
        $_SESSION['admin'] = $row['id'];
        $_SESSION["tentang"] = $tentang; 
        $_SESSION["welcome"] = $welcome;
        header("Location: admin/.");
        exit;

      } else if( $row['level'] == 'user') {
         // set session
         $_SESSION['users'] = $row['id'];
         $_SESSION["tentang"] = $tentang; 
         $_SESSION["welcome"] = $welcome;
         header("Location: users/.");
         exit;
      }
    }
  }
  $error = true;
}


?>


<?php if (isset($error)) : ?>
  <div aria-live="polite" aria-atomic="true" style="position: relative;">
    <div class="toast position-fixed mt-2" data-animation="true" data-delay="1000" data-autohide="false" style="position: absolute; top: 0; right: 7px; z-index: 11; margin-right: 5px; ">
    <div class="toast-header">
    <span class="mr-2 text-primary"><i class="fas fa-robot"></i></span>
                            <strong class="me-auto">CABOT</strong>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
      <div class="toast-body">
        <p><b class="text-danger">Gagal Masuk!</b> Password atau username yang Anda masukkan salah, silahkan cek dan ulang kembali.</p>
        <a href="." class="btn btn-outline-primary btn-sm">Ok</a>
      </div>
    </div>     
  </div>
<?php endif; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Cash App</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="./favicon/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="./favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="./favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="./favicon/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="./favicon/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />



  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet" />
</head>

  <body class="bg-gradient-light">
  <div class="container" style="margin-top: 5rem;">
    <div class="row">
    </div>
      <div class="row justify-content-center">
        <div class="col-xl-4 col-md-4 col-md-4">
        <div class="text-center">
        <img src="img/cashapp.png" height="150" alt="CashApp">
        </div>
        <div class="card">
          <div class="card-body">
          <form method="post" action="" class="user">
          <h6 class="mb-3 fw-normal text-center" style="font-weight: 300;">Selamat datang, Silahkan login!</h6>

          <div class="col-md mt-3">
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>
           </div>

          <div class="col-md mt-3">
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
            </div>


          <button class="w-100 btn btn-primary btn-sm mt-3" name="login" type="submit">Masuk</button>
          <div class="text-center mt-3">
          <small>Belum punya akun? silahakan <a href="./registrasi/.">Daftar</small></a>
          </div>
         </form>
        </div> 
      </div>
    </div>
   </div>
  </div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
  $('.toast').toast('show');
</script>
</body>

</html>