<?php

session_start();
if ( !isset($_SESSION["admin"]) ) {
  header("Location: ../.");
  exit;

}

require '../functions.php';

$id = $_GET ["id"]; {

    if( hapusdataakamsi($id) > 0 ) {
        echo"<script>
          alert ('Data berhasil di hapus');
          document.location.href = 'jiwa';
             </script>
             ";
            }else {
                echo"<script>
                alert ('Data gagal di hapus');
                document.location.href = 'jiwa';
              </script>
              ";
            }
}


?>