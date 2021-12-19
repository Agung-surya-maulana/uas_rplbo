<?php 

session_start();
 

include 'koneksi.php';
 

$username = $_POST['username'];
$password = $_POST['password'];
 
 
$login = mysqli_query($conn,"select * from akun where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="admin"){
 
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
        
        echo '<script> alert("Berhasil Login");</script>';
		header("location:admin.php");
 
	
	}else if($data['level']=="siswa"){
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";
        
        echo '<script> alert("Berhasil Login");</script>';
		header("location:siswa.php");
 
	
	}else if($data['level']=="panitia"){
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "panitia";
    
        echo '<script> alert("Berhasil Login");</script>';
		header("location:panitia.php");
 
	}else{
 
        echo '<script> alert("gagal Login");</script>';
		header("location:login.php?pesan=gagal");
	}	
}else{
    echo '<script> alert("gagal Login");</script>';
	header("location:login.php?pesan=gagal");
}
 
?>