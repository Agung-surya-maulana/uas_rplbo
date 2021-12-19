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
<div class="container">
            <p style="margin-top:5%;"><b> Registrasi Data:</b></p><br/>
  <form method="post" action="dataform2.php" class="form">
        <div class="form-group">
        Orang Tua/Wali<br/><br/>

                Nama:                   <br><input class="form-control" type="text" name="nama_wali" /><br />
                NIK:                    <br><input class="form-control" type="text" name="nik_wali" /><br />
                No.Hp:                  <br><input class="form-control" type="text" name="nohp_wali" /><br />
                Tempat Lahir:           <br><input class="form-control" type="text" name="tlahir_wali" /><br />
                Tanggal Lahir:          <br><input class="form-control" type="date" name="talahir_wali" /><br />
                Pendidikan Terakhir:    <br><input class="form-control" type="text" name="pendidikan_wali" /><br />
                Pekerjaan:              <br><input class="form-control" type="text" name="pekerjaan_wali" /><br />
                penghasilan Bulanan:    <br><input class="form-control" type="text" name="penghasilan_wali" /><br />
                Berkebutuhan Khusus:    <br><input class="form-control" type="text" name="berkebutuhan_wali" /><br />
<input class="btn btn-primary btn-sm" type="submit" value="Simpan" name="simpan" /> 
 
</div>  
</form>
</div>	
</body>
</html>