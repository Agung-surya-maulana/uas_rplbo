<?php
// ini_set('display_errors',1);
  include "koneksi.php";
  if(isset($_POST['simpan'])){
  $nama  = $_POST['nama'];
  $nik  = $_POST['nik'];
  $kewarganegaraan  = $_POST['kwn'];
  $nomor_hp  = $_POST['hp'];
  $jenis_kelamin  = $_POST['jenis_kelamin'];
  $tempat_lahir  = $_POST['tlahir'];
  $tanggal_lahir  = $_POST['talahir'];
  $tempat_tinggal  = $_POST['ttinggal'];
  $kecamatan  = $_POST['kecamatan'];
  $desa_kelurahan  = $_POST['desa'];
  $dusun  = $_POST['dusun'];
  $kode_pos  = $_POST['kpos'];
  $jarak_tinggal  = $_POST['jrumah'];
  $waktu_tempuh  = $_POST['wtempuh'];
  $jenis_transportasi  = $_POST['transportasi'];
  $anak_ke  = $_POST['anak'];
  $jumlah_saudara  = $_POST['saudara'];
  $tinggi_badan  = $_POST['tbadan'];
  $berat_badan  = $_POST['bbadan'];
  $jurusan  = $_POST['jurusan'];

  $asal_sekolah  = $_POST['sekolah'];
  $nisn  = $_POST['nisn'];
  $nis  = $_POST['nis'];
  $no_ijazah  = $_POST['ijazah'];
  $no_skhun  = $_POST['skhun'];
  $mysqli  = "INSERT INTO siswa (nama, nik, kewarganegaraan, nomor_hp, jenis_kelamin,tempat_lahir, tanggal_lahir, tempat_tinggal, kecamatan, desa_kelurahan, dusun, kode_pos, jarak_tinggal, waktu_tempuh, jenis_transportasi, anak_ke, jumlah_saudara, tinggi_badan, berat_badan, jurusan, asal_sekolah, nisn, nis, no_ijazah, no_skhun) VALUES 
  ('$nama', '$nik', '$kewarganegaraan', '$nomor_hp', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$tempat_tinggal', '$kecamatan', '$desa_kelurahan', '$dusun', '$kode_pos', '$jarak_tinggal', '$waktu_tempuh', '$jenis_transportasi', '$anak_ke', '$jumlah_saudara', '$tinggi_badan', '$berat_badan', '$jurusan', '$asal_sekolah', '$nisn', '$nis', '$no_ijazah', '$no_skhun')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo '<script> alert("Data Berhasil");</script>';
    header("Location:registrasi2.php");
    
  } else {
    echo '<script> alert("Data Gagal");</script>';
    header("Location:registrasi1.php");
  }
}
  mysqli_close($conn);
?>