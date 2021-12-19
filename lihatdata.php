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
        $no = 1;
        $data = mysqli_query($conn,"SELECT * from siswa WHERE id='$id'");
        $data2 = mysqli_query($conn,"SELECT * from wali");
        while($d = mysqli_fetch_array($data)){
        while($d2 = mysqli_fetch_array($data2)){
            ?>
            
            <table class="table table-bordered table-striped table-hover" border="1">
                            
            <tr><td>Data Siswa</td></tr>
                            <tr><td>Nama:<?php echo $d['nama']; ?></td></tr>
                            <tr><td>NIK:<?php echo $d['nik']; ?></td></tr>
                            <tr><td>Kewarganegaraan:<?php echo $d['kewarganegaraan']; ?></td></tr>
                            <tr><td>No.Hp:<?php echo $d['nomor_hp']; ?></td></tr>
                            <tr><td>Jenis Kelamin:<?php echo $d['jenis_kelamin']; ?></td></tr>
                            <tr><td>Tempat Lahir:<?php echo $d['tempat_lahir']; ?></td></tr>
                            <tr><td>Tanggal Lahir<?php echo $d['tanggal_lahir']; ?></td></tr>
                            <tr><td>Tempat Tinggal:<?php echo $d['tempat_tinggal']; ?></td></tr>
                            <tr><td>Kecamatan:<?php echo $d['kecamatan']; ?></td></tr>
                            <tr><td>Desa/Kelurahan:<?php echo $d['desa_kelurahan']; ?></td></tr>
                            <tr><td>Dusun:<?php echo $d['dusun']; ?></td></tr>
                            <tr><td>Kode Pos:<?php echo $d['kode_pos']; ?></td</tr>>
                            <tr><td>Jarak Tempat Tinggal Dari Rumah:<?php echo $d['jarak_tinggal']; ?></td></tr>
                            <tr><td>Waktu Tempuh Dari Tempat Tinggal Ke Sekolah:<?php echo $d['waktu_tempuh']; ?></td></tr>
                            <tr><td>Jenis Transportasi:<?php echo $d['jenis_transportasi']; ?></td></tr>
                            <tr><td>Anak Ke:<?php echo $d['anak_ke']; ?></td></tr>
                            <tr><td>Jumlah Saudara:<?php echo $d['jumlah_saudara']; ?></td></tr>
                            <tr><td>Tinggi Badan:<?php echo $d['tinggi_badan']; ?></td></tr>
                            <tr><td>Berat Badan:<?php echo $d['berat_badan']; ?></td></tr>
                            <tr><td>Jurusan yang Dipilih:<?php echo $d['jurusan']; ?></td></tr>
                            <tr><td>Asal Sekolah:<?php echo $d['asal_sekolah']; ?></td></tr>
                            <tr><td>NISN:<?php echo $d['nisn']; ?></td></tr>
                            <tr><td>NIS:<?php echo $d['nis']; ?></td></tr>
                            <tr><td>No.SKHUN:<?php echo $d['no_ijazah']; ?></td></tr>
                            <tr><td>No.Ijazah:<?php echo $d['no_skhun']; ?></td></tr>
        </table>     
              
                    
   <?php     }?>
        <table class="table table-bordered table-striped table-hover" border="1">
                     
        <tr><td><a href="lihatdata2.php?id=<?php echo $d['id']; ?>">Selanjutnya</a></td></tr>
        <tr><td><a class="nav-link" href="datasiswa.php">Keluar</a></td></tr>
                        
        </table>
   <?php     }?>

  
       
                   
	
</body>
</html>