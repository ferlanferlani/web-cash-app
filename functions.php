<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "cashapp");


// function query pengambilan data dari database
function query ($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
  }
  return $rows;
}

// tambah data akasmi
function tambahakamsi ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  
  $query = "INSERT INTO data VALUES (NULL,'$nama')";
  
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}

//   hapus data pemuda akamsi
// function hapus
function hapusdataakamsi ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM data WHERE id = $id");
  return mysqli_affected_rows($conn);
}

// ubah data akamsi
// function ubah/edit
function ubahdataakamsi($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);

  $query ="UPDATE data SET 
  nama = '$nama'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}




  // tambah bayar bulan januari
  // tambah
function tambah1 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO januari VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
  // tambah bayar bulan februari
  // tambah
function tambah2 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO februari VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
  // tambah bayar bulan maret
  // tambah
function tambah3 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO maret VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
  // tambah bayar bulan april
  // tambah
function tambah4 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO april VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
  // tambah bayar bulan mei
  // tambah
function tambah5 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO mei VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
  // tambah bayar bulan juni
  // tambah
function tambah6 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO juni VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
  // tambah bayar bulan juli
  // tambah
function tambah7 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO juli VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
  // tambah bayar bulan agustus
  // tambah
function tambah8 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO agustus VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
  // tambah bayar bulan september
  // tambah
function tambah9 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO september VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
  // tambah bayar bulan oktober
  // tambah
function tambah10 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO oktober VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
  // tambah bayar bulan november
  // tambah
function tambah11 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO november VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
  // tambah bayar bulan desember
  // tambah
function tambah12 ($data) {
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);

  $query = "INSERT INTO desember VALUES (NULL,'$nama', '$tunai')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
// akhir tambah tagihan bulanan


//   hapus data dalam tabel
// function hapus
function hapusjanuari() {
  global $conn;
  mysqli_query($conn,"DELETE FROM januari");
  return mysqli_affected_rows($conn);
}
// function hapus
function hapusfebruari() {
  global $conn;
  mysqli_query($conn,"DELETE FROM februari");
  return mysqli_affected_rows($conn);
}
// function hapus
function hapusmaret() {
  global $conn;
  mysqli_query($conn,"DELETE FROM maret");
  return mysqli_affected_rows($conn);
}
// function hapus
function hapusapril() {
  global $conn;
  mysqli_query($conn,"DELETE FROM april");
  return mysqli_affected_rows($conn);
}
// function hapus
function hapusmei() {
  global $conn;
  mysqli_query($conn,"DELETE FROM mei");
  return mysqli_affected_rows($conn);
}
// function hapus
function hapusjuni() {
  global $conn;
  mysqli_query($conn,"DELETE FROM juni");
  return mysqli_affected_rows($conn);
}
// function hapus
function hapusjuli() {
  global $conn;
  mysqli_query($conn,"DELETE FROM juli");
  return mysqli_affected_rows($conn);
}
// function hapus
function hapusagustus() {
  global $conn;
  mysqli_query($conn,"DELETE FROM agustus");
  return mysqli_affected_rows($conn);
}
// function hapus
function hapusseptember() {
  global $conn;
  mysqli_query($conn,"DELETE FROM september");
  return mysqli_affected_rows($conn);
}
// function hapus
function hapusoktober() {
  global $conn;
  mysqli_query($conn,"DELETE FROM oktober");
  return mysqli_affected_rows($conn);
}
// function hapus
function hapusnovember() {
  global $conn;
  mysqli_query($conn,"DELETE FROM november");
  return mysqli_affected_rows($conn);
}
// function hapus
function hapusdesember() {
  global $conn;
  mysqli_query($conn,"DELETE FROM desember");
  return mysqli_affected_rows($conn);
}
// akhir hapus semua data

// ubah data akamsi

// akhir ubah data tagihan bulanan


// hapus data yang sudah membayar cash
//   hapus data pemuda akamsi
// function hapus
function hapusadmin ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM admin WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapususers ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM users WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus1 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM januari WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function hapus2 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM februari WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function hapus3 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM maret WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function hapus4 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM april WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function hapus5 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM mei WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function hapus6 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM juni WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function hapus7 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM juli WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function hapus8 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM agustus WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function hapus9 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM september WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function hapus10 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM oktober WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function hapus11 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM november WHERE id = $id");
  return mysqli_affected_rows($conn);
}
function hapus12 ($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM desember WHERE id = $id");
  return mysqli_affected_rows($conn);
}


function jiwa($data) {
  global $conn;
  $id = $data["id"];
  $jiwa = htmlspecialchars($data["jiwa"]);
  
  $query ="UPDATE jiwa SET 
  jiwa = '$jiwa'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}


function pemasukan($data) {
  global $conn;
  $id = $data["id"];
  $pemasukan = htmlspecialchars($data["pemasukan"]);
  $waktu = htmlspecialchars($data["waktu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  
  $query ="UPDATE pemasukan SET 
  pemasukan = '$pemasukan',
  waktu = '$waktu',
  keterangan = '$keterangan'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}



function pengeluaran($data) {
  global $conn;
  $id = $data["id"];
  $pengeluaran = htmlspecialchars($data["pengeluaran"]);
  $waktu = htmlspecialchars($data["waktu"]);
  $keterangan = htmlspecialchars($data["keterangan"]);
  
  $query ="UPDATE pengeluaran SET 
  pengeluaran = '$pengeluaran',
  waktu = '$waktu',
  keterangan = '$keterangan'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}



// buat pesan/ diskusi
function topik ($data) {
  global $conn;

  $nama = htmlspecialchars($data["nama"]);
  $judul = htmlspecialchars($data["judul"]);
  $tanggal = htmlspecialchars($data["tanggal"]);

  $query = "INSERT INTO artikel VALUES (NULL,'$nama', '$judul', '$tanggal')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}



// function hapus
function hapustopik($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM artikel WHERE id = $id");
  return mysqli_affected_rows($conn);
}

// function hapus
function hapuskomentar($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM komentar WHERE id = $id");
  return mysqli_affected_rows($conn);
}


// function hapus
function hapusingat() {
  global $conn;
  mysqli_query($conn,"DELETE FROM pengingat");
  return mysqli_affected_rows($conn);
}


// buat pesan/ diskusi
function ingat ($data) {
  global $conn;

  $nama = htmlspecialchars($data["nama"]);
  $judul = htmlspecialchars($data["judul"]);
  $waktu = htmlspecialchars($data["waktu"]);
  $query = "INSERT INTO pengingat VALUES (NULL,'$nama','$judul', '$waktu')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}


// function ubah/edit
function ubahprofileadmin($data) {
  global $conn;
  $id = $data["id"];
  $username = htmlspecialchars($data["username"]);
  $nama_panggilan = htmlspecialchars($data["nama_panggilan"]);
  $email = htmlspecialchars($data["email"]);
  $password = htmlspecialchars($data["password"]);
  
  $password = password_hash($password, PASSWORD_DEFAULT);

  $query ="UPDATE admin SET 
  username = '$username',
  nama_panggilan = '$nama_panggilan',
  email = '$email',
  password = '$password'
  WHERE id = $id
  ";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}


// function ubah/edit
function ubahprofileusers($data) {
  global $conn;
  $id = $data["id"];
  $username = htmlspecialchars($data["username"]);
  $nama_panggilan = htmlspecialchars($data["nama_panggilan"]);
  $email = htmlspecialchars($data["email"]);
  $password = htmlspecialchars($data["password"]);
  
  $password = password_hash($password, PASSWORD_DEFAULT);

  $query ="UPDATE users SET 
  username = '$username',
  nama_panggilan = '$nama_panggilan',
  email = '$email',
  password = '$password'
  WHERE id = $id
  ";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}




// function ubah/edit
function ubah1($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE januari SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}

// function ubah/edit
function ubah2($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE februari SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
// function ubah/edit
function ubah3($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE maret SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
// function ubah/edit
function ubah4($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE april SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
// function ubah/edit
function ubah5($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE mei SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
// function ubah/edit
function ubah6($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE juni SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
// function ubah/edit
function ubah7($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE juli SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
// function ubah/edit
function ubah8($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE agustus SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
// function ubah/edit
function ubah9($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE september SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
// function ubah/edit
function ubah10($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE oktober SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}
// function ubah/edit
function ubah11($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE november SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}

// function ubah/edit
function ubah12($data) {
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $tunai = htmlspecialchars($data["tunai"]);
  
  $query ="UPDATE desember SET 
  nama = '$nama',
  tunai = '$tunai'
  WHERE id = $id
  ";
  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}

// function registrasi admin
// function regisadmin($data) {
//   global $conn;

//   $username = strtolower(stripslashes($data["username"]));
//   $email = strtolower(stripslashes($data["email"]));
//   $password = mysqli_real_escape_string($conn, $data["password"]);
//   $password2 = mysqli_real_escape_string($conn, $data["password2"]);


//   $admin = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username' ");

//   if( mysqli_fetch_assoc($admin) ) {

//     echo "<script>
//     alert ('Username ini sudah terdaftar, Silahkan pilih username lain!') 
//     </script>";

//     return false;
//   }

//   // cek pasword
//   if( $password !== $password2) {
//     echo"<script>
//     alert('konfirmasi password tidak sesuai');
//     </script>";
//     return false;
//   }

//   // enkripsi password
//   $password = password_hash($password, PASSWORD_DEFAULT);

//   // tambah user
//   mysqli_query($conn, "INSERT INTO admin VALUES(NULL, '$username', '$email', '$password')");

//   return mysqli_affected_rows($conn);

// }




// function registrasi users
// function regisusers($data) {
//   global $conn;

//   $username = strtolower(stripslashes($data["username"]));
//   $nama_panggilan = strtolower(stripslashes($data["nama_panggilan"]));
//   $email = strtolower(stripslashes($data["email"]));
//   $password = mysqli_real_escape_string($conn, $data["password"]);
//   $password2 = mysqli_real_escape_string($conn, $data["password2"]);


//   $admin = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' ");

//   if( mysqli_fetch_assoc($admin) ) {

//     echo "<script>
//     alert ('Username ini sudah terdaftar, Silahkan pilih username lain!') 
//     </script>";

//     return false;
//   }

//   // cek pasword
//   if( $password !== $password2) {
//     echo"<script>
//     alert('Konfirmasi password anda tidak sesuai, Mohon cek kembali!');
//     </script>";
//     return false;
//   }

//   // enkripsi password
//   $password = password_hash($password, PASSWORD_DEFAULT);

//   // tambah user
//   mysqli_query($conn, "INSERT INTO users VALUES(NULL, '$username', '$nama_panggilan', '$email', '$password')");

//   return mysqli_affected_rows($conn);

// }



// buat pesan/ diskusi
function komentar($data) {
  global $conn;

  $nama = htmlspecialchars($data["nama"]);
  $waktu = htmlspecialchars($data["waktu"]);
  $komen = htmlspecialchars($data["komen"]);

  $query = "INSERT INTO komentar VALUES (NULL,'$nama', '$waktu', '$komen')";

  mysqli_query($conn,$query);
  return mysqli_affected_rows($conn);
}




