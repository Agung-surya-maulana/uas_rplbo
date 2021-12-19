<?php
// ini_set('display_errors',1);
  include "koneksi.php";
  if(isset($_POST['simpan'])){
  $email  = $_POST['email'];
  $username  = $_POST['username'];
  $password  = $_POST['password'];
 
  
  $mysqli  = "INSERT INTO akun (email, username, password, level) VALUES 
  ('$email', '$username', '$password','panitia')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo '<script> alert("Pendaftaran berhasil");</script>';
    header("Location:admin.php");
    
  } else {
    echo '<script> alert("Pendaftaran gagal");</script>';
    header("Location:admin.php");
  }
}
  mysqli_close($conn);
?>