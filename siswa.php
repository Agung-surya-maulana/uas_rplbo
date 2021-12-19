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


    
    
	
<div style="width: 1500px; background: #dbf0f3; margin: 60px auto; padding: 20px 20px; border: 1px solid #ced4da; border-radius: 0.25rem; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"> 
      <h1 style="text-align: center;	text-transform: uppercase;">SMK Global Cendekia menerima siswa baru untuk tahun akademik 2022/2023 </h1>

      <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($conn,"SELECT * from informasi ");
                    $no = 1;
                    while($d = mysqli_fetch_array($data)){
                    
                        ?>
                      
                   </br></br></br>
                            <h2><br><?php echo $d['informasi']; ?></br></h2>
                            <h2><br><?php echo $d['waktu']; ?></br></h2>
                            <h2><br><?php echo $d['lokasi']; ?></br></h2>
                            
                         
                    
                   <?php }?>
</div>    
</body>
</html>