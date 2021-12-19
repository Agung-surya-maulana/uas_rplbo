<?php

require_once 'koneksi.php';


    $id = $_POST['id'];
    $informasi = $_POST['informasi'];
    $waktu = $_POST['waktu'];
    $lokasi = $_POST['lokasi'];
  

    
    $query = "UPDATE informasi SET informasi ='$informasi',waktu = '$waktu',lokasi ='$lokasi' WHERE id = '$id'";
    $cek = mysqli_query($conn,$query);

    if($cek){
        echo '<script> alert("Data Berhasil di Edit"); </script>';
        header("Location:panitia.php");
    }else{
        echo '<script> alert("Data Gagal di Edit"); </script>';
        header("Location:editinformasi.php");
    }

?>