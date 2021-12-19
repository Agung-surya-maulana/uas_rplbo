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
 
 <a class="navbar-brand" href="#"><b>Selamat Datang Admin SMK Global Cendekia</b></a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">

   <ul class="navbar-nav mr-auto">
   </a>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mengengola akun
            </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="admin.php">Akun Panitia</a>
                  </div>  
                </li>
    
   </ul>

</div>
</nav>
</br>
<div style="margin: 3% 3% 3% 3%;">
<a style="margin-left:3%;" href="tambahakun.php">+ Tambah Akun Panitia</a></br></br>
<div table-responsive>
<table class="table table-bordered table-striped table-hover" border="1">
    <tr>
    <th>No</th> 
    <th>Email</th>   
    <th>username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Opsi</th>
    </tr>
                <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($conn,"SELECT * from akun WHERE level='panitia'");
                    $no = 1;
                    while($d = mysqli_fetch_array($data)){
                    
                        ?>
                   <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['email']; ?></td>
                            <td><?php echo $d['username']; ?></td>
                            <td><?php echo $d['password']; ?></td>
                            <td><?php echo $d['level']; ?></td>
                        <td>  
                            <a href="editakun.php?id=<?php echo $d['id']; ?>">Edit</a>
                            <a style="color: #fc0606;;" href="delete.php?id=<?php echo $d['id']; ?>">Delete</a>
                        </td>
                    </tr>
                   <?php }?>
            </table>
            </div>
           
          
            
            <a href="login.php">
                    <button class="btn btn-primary btn-sm">keluar</button>
            </a>
            </div>
                   
	
</body>
</html>