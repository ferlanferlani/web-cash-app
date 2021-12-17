<?php


session_start();
if ( !isset($_SESSION["admin"]) ) {
  header("Location: ../.");
  exit;

}

require '../functions.php';

$id = $_GET ["id"]; {

    if( hapus11($id) > 0 ) {
        echo"<script>
          alert ('data berhasil di hapus');
          document.location.href = 'november';
             </script>
             ";
            }else {
                echo"<script>
                alert ('data gagal di hapus');
                document.location.href = 'november';
              </script>
              ";
            }
}


?>