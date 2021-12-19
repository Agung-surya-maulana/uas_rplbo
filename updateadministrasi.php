<?php

require_once 'koneksi.php';


    $id = $_POST['id'];
    $email = $_POST['nama'];
    $username = $_POST['no_peserta'];
    $Password = $_POST['status'];
    $level = $_POST['level'];

    
    $query = "UPDATE akun SET email ='$email',username = '$username',password ='$Password',level ='$level' WHERE id = '$id'";
    $cek = mysqli_query($conn,$query);

    if($cek){
        echo '<script> alert("Data Berhasil di Edit"); </script>';
        header("Location:administrasi.php");
    }else{
        echo '<script> alert("Data Gagal di Edit"); </script>';
        header("Location:editadministrasi.php");
    }

?>