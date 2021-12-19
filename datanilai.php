<?php
// ini_set('display_errors',1);
  include "koneksi.php";
  if(isset($_POST['simpan'])){
  $nama  = $_POST['nama'];
  $no_peserta  = $_POST['no_peserta'];
  $nilai  = $_POST['nilai'];
  $status  = $_POST['status'];
 
  
  $mysqli  = "INSERT INTO nilai (nama, no_peserta, nilai, status) VALUES 
  ('$nama', '$no_peserta', '$nilai','status')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo '<script> alert("input berhasil");</script>';
    header("Location:nilai.php");
    
  } else {
    echo '<script> alert("input gagal");</script>';
    header("Location:inputnilai.php");
  }
}
  mysqli_close($conn);
?>