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
<div style="margin:3% 3% 3% 3%;">
<div table-responsive>
<table class="table table-bordered table-striped table-hover" border="1">
    
    <tr>
    <th>No</th> 
    <th>Nama</th>   
    <th>No.Peserta</th>
    <th>nilai</th>
    <th>Status</th>
    
    
    </tr>
                <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($conn,"SELECT * from nilai");
                    $no = 1;
                    while($d = mysqli_fetch_array($data)){
                    
                        ?>
                   <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['no_peserta']; ?></td>
                            <td><?php echo $d['nilai']; ?></td>
                            <td><?php echo $d['status']; ?></td>
                            
                    </tr>
                   <?php }?>
            </table>
    </div>
    </div>

  
	
</body>
</html>