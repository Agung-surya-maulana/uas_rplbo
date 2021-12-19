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
</br>

<?php
include 'koneksi.php';
?>
        
        <?php
        $id = $_GET['id'];
        $data = mysqli_query($conn,"SELECT * from wali WHERE id='$id'");
      
        while($d = mysqli_fetch_array($data)){
     
     
            ?>
            
            <table class="table table-bordered table-striped table-hover" border="1">
                            
                    <tr><td>Data Orang tua/Wali</td></tr>
                            <tr><td>Nama:<?php echo $d['nama_wali']; ?></td></tr>
                            <tr><td>NIK:<?php echo $d['nik_wali']; ?></td></tr>
                            <tr><td>No.Hp:<?php echo $d['nohp_wali']; ?></td></tr>
                            <tr><td>Tempat Lahir:<?php echo $d['tempat_lahirwali']; ?></td></tr>
                            <tr><td>Tanggal Lahir<?php echo $d['tanggal_lahirwali']; ?></td></tr>
                            <tr><td>Pendidikan Terakhir:<?php echo $d['pendidikan_wali']; ?></td></tr>
                            <tr><td>Pekerjaan:<?php echo $d['pekerjaan_wali']; ?></td></tr>
                            <tr><td>penghasilan Bulanan:<?php echo $d['penghasilan_wali']; ?></td></tr>
                            <tr><td>Berkebutuhan Khusus:<?php echo $d['kebutuhan_khusus']; ?></td></tr>
                            <tr><td><a class="nav-link" href="datasiswa.php">keluar</a></td></tr>
        </table>     
              
                    
   <?php     }?>

             
  
</body>
</html>