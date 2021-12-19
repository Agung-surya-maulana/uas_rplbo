<!DOCTYPE html>
<html>
<head>
	<title>Glory</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 
	<h1><b>Selamat Datang Calon Siswa SMK Global Cendekia</b></h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
    <div class="logo">
        <img src="images/smkcendekia.jpg" alt="logo">
    </div>
		<p class="tulisan_login"><b>Silahkan login</b></p>
 
		<form action="login_akun.php" method="post">
			<label><b>Username</b></label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label><b>Password</b></label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
            
 
			<input type="submit" class="tombol_login" value="LOGIN">

            <a href="daftar.php" type="submit" class="daftar">Daftar akun</a>
 
			<br/>
			<br/>
	
		</form>
		
	</div>
 
 
</body>
</html>