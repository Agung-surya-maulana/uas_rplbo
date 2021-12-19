<!DOCTYPE html>
<html>
<head>
    <title>Glory</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

	<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}
	?>

<br/>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
<a class="navbar-brand" href="#"><b> Selamat Datang Panitia SMK Global Cendekia</b></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">

   <ul class="navbar-nav mr-auto">
   
   <li class="nav-item active">
       <a class="nav-link" href="panitia.php">Beranda<span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Validasi Data
            </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="datasiswa.php">Data Siswa</a>
                    <a class="dropdown-item" href="administrasi.php">Input Kelulusan Administrasi</a>
                  </div>  
                </li>
     <li class="nav-item">
       <a class="nav-link" href="nilai.php">Nilai Siswa</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="login.php" >Keluar</a>
     </li>
   </ul>

</div>
</nav>
<br/>
<div style="margin: 5% 5% 5% 5%;">
<p class="tulisan_login"><b>Input Nilai</b></p>
  <form method="post" action="datanilai.php" class="form">
        <div class="form-group">
             <label for="nama">Nama:</label>
             <input type="text" class="form-control" name="nama"><br/>
             <label for="nama">No.Peserta:</label>
             <input type="text" class="form-control" name="no_peserta"><br/>
             <label for="nama">Nilai:</label>
             <input type="text" class="form-control" name="nilai"><br/>
             <label for="nama">Status:</label>
             <input type="text" class="form-control" name="status"><br/>
         
             <input class="tombol_daftar" type="submit" value="Simpan" name="simpan" /> 
         </div>  
  </form>
</div>


                   
	
</body>
</html>