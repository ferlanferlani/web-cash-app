<?php

session_start();
if ( !isset($_SESSION["admin"]) ) {
  header("Location: ../.");
  exit;

}

require '../functions.php';

$id = $_GET ["id"]; {

    if( hapustopik($id) > 0 ) {
        echo"<script>
          alert ('Topik berhasil di hapus');
          document.location.href = 'forum-disquse';
             </script>
             ";
            }else {
                echo"<script>
                alert ('Topik gagal di hapus');
                document.location.href = 'forum-disquse';
              </script>
              ";
            }
}


?>