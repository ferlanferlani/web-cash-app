<?php

session_start();
if ( !isset($_SESSION["admin"]) ) {
  header("Location: ../.");
  exit;

}

require '../functions.php';

    $id = $_GET ["id"]; {

      if( hapuskomentar($id) > 0 ) {
        echo"<script>
          alert ('komentar berhasil di bersihkan!');
          document.location.href = 'forum-disquse';
             </script>
             ";
            }else {
                echo"<script>
                alert ('komentar gagal di bersihkan!');
                document.location.href = 'forum-disquse';
              </script>
              ";
            }
    }



?>