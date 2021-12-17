<?php

session_start();
if ( !isset($_SESSION["admin"]) ) {
  header("Location: ../.");
  exit;

}

require '../functions.php';

    if( hapusmei() > 0 ) {
        echo"<script>
          alert ('Semua data dalam tabel berhasil di bersihkan');
          document.location.href = 'mei';
             </script>
             ";
            }else {
                echo"<script>
                alert ('Semua data dalam tabel gagal di bersihkan');
                document.location.href = 'mei';
              </script>
              ";
            }



?>