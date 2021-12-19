<?php
 include "koneksi.php";
if(!isset($file)){
	
	$image 		= addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
	$image_name	= addslashes($_FILES['gambar']['name']);
	$image_size	= getimagesize($_FILES['gambar']['tmp_name']);

	
	$mysqli  = "INSERT INTO bukti_pembayaran (bukti_pembayaran) VALUES 
	('$image_name')";
	$result  = mysqli_query($conn, $mysqli);
	if ($result) {
	  echo '<script> alert("Data Berhasil");</script>';
	  header("Location:beranda.php");
	  
	} else {
	  echo '<script> alert("Data Gagal");</script>';
	  header("Location:buktipembayaran.php");
	}
  }
	mysqli_close($conn);
  

?>