<!DOCTYPE html>
<html>
<head>
    <title>Glory</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	

<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
 <a class="navbar-brand" href="#"><b>SMK Global Cendekia</b></a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">

   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="siswa.php">Beranda<span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="registrasi1.php">Registrasi Data</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="buktipembayaran.php">Upload Bukti Pembayaran</a>
     </li>
     <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cek Kelulusan
            </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="cekkelulusan1.php">Sesi Administrasi</a>
                    <a class="dropdown-item" href="cekkelulusan2.php">Sesi Ujian Tertulis</a>
                  </div>  
                </li>
     <li class="nav-item">
       <a class="nav-link" href="login.php" >Keluar</a>
     </li>
   </ul>

</div>
</nav>
</br>

    
    
    
<div style="margin: 5% 5% 5% 5%; background: #c7caca;; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">
<divi style="margin: 2% 2% 2% 2%;>
<p class="tulisan_login"><b>Upload Bukti Pembayaran</b></p>
  <form method="post" action="" class="form" enctype="multipart/form-data>
        <div class="form-group">
             <td>jpg/jpeg/png</td>
             <input type="file" class="form-control" name="gambar"><br/> 
             <input class="tombol_daftar" type="submit" value="Simpan" name="simpan" /> 
         </div>  
  </form>
</div>

</div>
	
</body>
</html>