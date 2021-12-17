<?php
session_start();
if ( !isset($_SESSION["admin"]) ) {
  header("Location: ../.");
  exit;

}

require '../functions.php';

$id = $_GET ["id"]; {

    if( hapus9($id) > 0 ) {
        echo"<script>
          alert ('data berhasil di hapus');
          document.location.href = 'september';
             </script>
             ";
            }else {
                echo"<script>
                alert ('data gagal di hapus');
                document.location.href = 'september';
              </script>
              ";
            }
}


?>