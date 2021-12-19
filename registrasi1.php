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
<div class="container">
            <p style="margin-top:5%;"><b> Registrasi Data:</b></p><br/>
  <form method="post" action="dataform.php" class="form">
        <div class="form-group">
             <label for="nama">Nama Lengkap:</label>
             <input type="text" class="form-control" name="nama"><br/>
             <label for="nama">NIK:</label>
             <input type="text" class="form-control" name="nik"><br/>
             <label for="nama">Kewarganegaraan:</label>
             <input type="text" class="form-control" name="kwn"><br/>
             <label for="nama">No.Hp:</label>
             <input type="text" class="form-control" name="hp"><br/>
             <label for="nama">Jenis Kelamin:</label>
             <input type="text" class="form-control" name="jenis_kelamin"><br/>
             <label for="nama">Tempat Lahir:</label>
             <input type="text" class="form-control" name="tlahir"><br/>
             <label for="nama">Tanggal Lahir:</label>
             <input type="date" class="form-control" name="talahir"><br/>
             <label for="nama">Tempat Tinggal:</label>
             <input type="text" class="form-control" name="ttinggal"><br/>
             <label for="nama">Kecamatan:</label>
             <input type="text" class="form-control" name="kecamatan"><br/>
             <label for="nama">Desa/Kelurahan:</label>
             <input type="text" class="form-control" name="desa"><br/>
             <label for="nama">Dusun:</label>
             <input type="text" class="form-control" name="dusun"><br/>
             <label for="nama">Kode Pos:</label>
             <input type="text" class="form-control" name="kpos"><br/>
             <label for="nama">Jarak Tempat Tinggal Dari Rumah:</label>
             <input type="text" class="form-control" name="jrumah"><br/>
             <label for="nama">Waktu Tempuh Dari Tempat Tinggal Ke Sekolah:</label>
             <input type="text" class="form-control" name="wtempuh"><br/>
             <label for="nama">Jenis Transportasi:</label>
             <input type="text" class="form-control" name="transportasi"><br/>
             <label for="nama">Anak Ke:</label>
             <input type="text" class="form-control" name="anak"><br/>
             <label for="nama">Jumlah Saudara:</label>
             <input type="text" class="form-control" name="saudara"><br/>
             <label for="nama">Tinggi Badan:</label>
             <input type="text" class="form-control" name="tbadan"><br/>
             <label for="nama">Berat Badan:</label>
             <input type="text" class="form-control" name="bbadan"><br/>
             <label for="nama">Jurusan yang Dipilih:</label>
             <input type="text" class="form-control" name="jurusan"><br/>
             <label for="nama">Asal Sekolah:</label>
             <input type="text" class="form-control" name="sekolah"><br/>
             <label for="nama">NISN:</label>
             <input type="text" class="form-control" name="nisn"><br/>
             <label for="nama">NIS:</label>
             <input type="text" class="form-control" name="nis"><br/>
             <label for="nama">No.SKHUN:</label>
             <input type="text" class="form-control" name="skhun"><br/>
             <label for="nama">No.Ijazah:</label>
             <input type="text" class="form-control" name="ijazah"><br/>
             <input class="btn btn-primary btn-sm" type="submit" value="Simpan" name="simpan" /> 
         </div>  
         </form>
</div>
</body>
</html>