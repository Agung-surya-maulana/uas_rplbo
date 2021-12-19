<?php
// ini_set('display_errors',1);
  include "koneksi.php";
  if(isset($_POST['simpan'])){
  $nama  = $_POST['nama'];
  $no_peserta  = $_POST['no_peserta'];
  $status  = $_POST['status'];
 
  
  $mysqli  = "INSERT INTO administrasi (nama, no_peserta, status) VALUES 
  ('$nama', '$no_peserta', 'status')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo '<script> alert("input berhasil");</script>';
    header("Location:administrasi.php");
    
  } else {
    echo '<script> alert("input gagal");</script>';
    header("Location:inputadministrasi.php");
  }
}
  mysqli_close($conn);
?>