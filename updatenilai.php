<?php

require_once 'koneksi.php';


    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_peserta = $_POST['no_peserta'];
    $nilai = $_POST['nilai'];
    $status = $_POST['status'];

    
    $query = "UPDATE nilai SET nama ='$nama',no_peserta = '$no_peserta',nilai ='$nilai',status ='$status' WHERE id = '$id'";
    $cek = mysqli_query($conn,$query);

    if($cek){
        echo '<script> alert("Data Berhasil di Edit"); </script>';
        header("Location:nilai.php");
    }else{
        echo '<script> alert("Data Gagal di Edit"); </script>';
        header("Location:editnilai.php");
    }

?>