<?php

require_once 'koneksi.php';


    $id = $_POST['id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $Password = $_POST['password'];
    $level = $_POST['level'];

    
    $query = "UPDATE akun SET email ='$email',username = '$username',password ='$Password',level ='$level' WHERE id = '$id'";
    $cek = mysqli_query($conn,$query);

    if($cek){
        echo '<script> alert("Data Berhasil di Edit"); </script>';
        header("Location:admin.php");
    }else{
        echo '<script> alert("Data Gagal di Edit"); </script>';
        header("Location:admin.php");
    }

?>