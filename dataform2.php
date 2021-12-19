<?php
// ini_set('display_errors',1);
  include "koneksi.php";
  if(isset($_POST['simpan'])){
  $nama_wali  = $_POST['nama_wali'];
  $nik_wali  = $_POST['nik_wali'];
  $nohp_wali  = $_POST['nohp_wali'];
  $tempat_lahirwali  = $_POST['tlahir_wali'];
  $tanggal_lahirwali  = $_POST['talahir_wali'];
  $pendidikan_wali  = $_POST['pendidikan_wali'];
  $pekerjaan_wali  = $_POST['pekerjaan_wali'];
  $penghasilan_wali  = $_POST['penghasilan_wali'];
  $kebutuhan_khusus  = $_POST['berkebutuhan_wali'];
 

  $mysqli  = "INSERT INTO wali (nama_wali, nik_wali, nohp_wali, tempat_lahirwali, tanggal_lahirwali, pendidikan_wali, pekerjaan_wali, penghasilan_wali, kebutuhan_khusus) VALUES 
  ('$nama_wali', '$nik_wali', '$nohp_wali', '$tempat_lahirwali', '$tanggal_lahirwali', '$pendidikan_wali', '$pekerjaan_wali', '$penghasilan_wali', '$kebutuhan_khusus')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo '<script> alert("Data Berhasil");</script>';
    header("Location:pembayaran.php");
    
  } else {
    echo "Input gagal";
  }
}
  mysqli_close($conn);
?>