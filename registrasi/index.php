<?php
require '../functions.php';


function regisadmin($data) {
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);


  $admin = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username' ");

  if( mysqli_fetch_assoc($admin) ) {

    echo"<div aria-live='polite' aria-atomic='true' style='position: relative;'>
    <div class='toast position-fixed mt-2' data-animation='true' data-delay='1000' data-autohide='false' style='position: absolute; top: 0; right: 0; z-index: 11; margin-right: 5px; '>
    <div class='toast-header'>
    <span class='mr-2 text-primary'><i class='fas fa-robot'></i></span>
    <strong class='mr-auto'>CABOT</strong>
    <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>
    <div class='toast-body'>
    <p><b class='text-danger'>Gagal Membuat Akun!</b> Username yang anda pilih saat ini sudah digunakan, Silahkan untuk pilih username lain dan registrasi kembali.</p>
    <a href='admin-akamsi' class='btn btn-outline-primary btn-sm'>Ok</a>
    </div>
    </div>     
    </div>";
    return false;
  }

  // cek pasword
  if( $password !== $password2) {

    echo"<div aria-live='polite' aria-atomic='true' style='position: relative;'>
    <div class='toast position-fixed mt-2' data-animation='true' data-delay='1000' data-autohide='false' style='position: absolute; top: 0; right: 0; z-index: 11; margin-right: 5px; '>
    <div class='toast-header'>
    <span class='mr-2 text-primary'><i class='fas fa-robot'></i></span>
    <strong class='mr-auto'>CABOT</strong>
    <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>
    <div class='toast-body'>
    <p><b class='text-danger'>Gagal Membuat Akun!</b> Konfirmasi password anda tidak sesuai, silahkan cek dan ulang kembali.</p>
    <a href='.' class='btn btn-outline-primary btn-sm'>Ok</a>
    </div>
    </div>     
    </div>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambah user
  mysqli_query($conn, "INSERT INTO admin VALUES(NULL, '$username', '$password')");

  return mysqli_affected_rows($conn);

}



if( isset($_POST["register"]) ) {

  if( regisadmin($_POST) > 0 ) {

    echo"<div aria-live='polite' aria-atomic='true' style='position: relative;'>
    <div class='toast position-fixed mt-2' data-animation='true' data-delay='1000' data-autohide='false' style='position: absolute; top: 0; right: 0; z-index: 11; margin-right: 5px; '>
    <div class='toast-header'>
    <span class='mr-2 text-primary'><i class='fas fa-robot'></i></span>
    <strong class='mr-auto'>CABOT</strong>
    <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
    </div>
    <div class='toast-body'>
    <p><span class='text-success'>Berhasil Membuat Akun!</span> Akun Anda berhasil dibuat, sekarang silahkan Anda login!.</p>
    <a href='../.' class='btn btn-outline-primary btn-sm'>Login</a>
    </div>
    </div>     
    </div>";
  } else {
    echo mysqli_error($conn);
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Registrasi - Cash App</title>

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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body class="bg-gradient-light">
  <div class="container" style="margin-top: 5rem;">
    <div class="row justify-content-center">
    <div class="col-xl-4 col-md-4 col-md-4">
        <div class="text-center">
        <img src="../img/cashapp.png" height="150" alt="CashApp">
        </div>
        <div class="card">
          <div class="card-body">
          <form method="post" action="" class="user">
          <h6 class="mb-3 fw-normal text-center" style="font-weight: 300;">Selamat datang, Silahkan buat akun!</h6>

          <div class="col-md mt-3">
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
           </div>

          <div class="col-md mt-3">
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              <input type="text" class="form-control" name="password" placeholder="Password">
              </div>
            </div>

          <div class="col-md mt-3">
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              <input type="text" class="form-control" name="password2" placeholder="Konfirmasi Password">
              </div>
            </div>


          <button class="w-100 btn btn-primary btn-sm mt-3" name="register" type="submit">Masuk</button>
          <div class="text-center mt-3">
          <small>Sudah punya akun? silahkan <a href="../.">Login</small></a>
          </div>
         </form>
        </div> 
      </div>
    </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script>
  $('.toast').toast('show');
</script>

</body>
</html>
