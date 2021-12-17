<?php

session_start();
if ( !isset($_SESSION["admin"]) ) {
  header("Location: ../.");
  exit;

}
require '../functions.php';

    if( hapusingat() > 0 ) {
        echo"<script>
          alert ('Semua pengumuman dalam mading berhasil di bersihkan');
          document.location.href = 'pengingat';
             </script>
             ";
            }else {
                echo"<script>
                alert ('Pengumuman gagal di bersihkan LAPORKAN!');
                document.location.href = 'pengingat';
              </script>
              ";
            }



?>