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

<a style="margin-left:3%;" href="inputadministrasi.php">+ Input Hasil Sesi Administrasi</a></br></br>
    <div table-responsive>
<table class="table table-bordered table-striped table-hover" border="1">
    
    <tr>
    <th>No</th> 
    <th>Nama</th>   
    <th>No.Peserta</th>
    <th>Status</th>
    <th>Opsi</th>
    
    
    </tr>
                <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($conn,"SELECT * from administrasi");
                    $no = 1;
                    while($d = mysqli_fetch_array($data)){
                    
                        ?>
                   <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['no_peserta']; ?></td>
                            <td><?php echo $d['status']; ?></td>
                            
                            <td>  
                            <a href="editadministrasi.php?id=<?php echo $d['id']; ?>">Edit</a>
                            <a style="color: #fc0606;;" href="deleteadministrasi.php?id=<?php echo $d['id']; ?>">Delete</a>
                            </td>
                    </tr>
                   <?php }?>
            </table>
    </div>
      
                   
	
</body>
</html>