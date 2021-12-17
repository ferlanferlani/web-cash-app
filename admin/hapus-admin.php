<?php

session_start();
if ( !isset($_SESSION["admin"]) ) {
  header("Location: ../.");
  exit;

}

require '../functions.php';

$id = $_GET ["id"]; {

    if( hapusadmin($id) > 0 ) {
        echo"<script>
          alert ('Akun anda berhasil di hapus');
          document.location.href = 'logout.php';
             </script>
             ";
            }else {
                echo"<script>
                alert ('Akun anda gagal di hapus LAPORKAN!');
                document.location.href = '.';
              </script>
              ";
            }
}


?>