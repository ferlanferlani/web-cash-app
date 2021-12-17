<?php

session_start();
if ( !isset($_SESSION["admin"]) ) {
  header("Location: ../.");
  exit;

}
require '../functions.php';

$id = $_GET ["id"]; {

    if( hapus5($id) > 0 ) {
        echo"<script>
          alert ('data berhasil di hapus');
          document.location.href = 'mei';
             </script>
             ";
            }else {
                echo"<script>
                alert ('data gagal di hapus');
                document.location.href = 'mei';
              </script>
              ";
            }
}


?>