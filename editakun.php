
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
include 'koneksi.php';
?>
        <form method="post" action="update.php">
        <?php
        $id = $_GET['id'];
        $data = mysqli_query($conn,"SELECT * from akun WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){

            ?>
            <input type="hidden" value="<?php echo $d['id'];?>" name="id">
            <table class="table table-bordered table-striped table-hover" border="1">
                <tr><td>Email :</td><td><input type="text" value="<?php echo $d['email'];?>" name="email"></td></tr>
                <tr><td>Username</td><td><input type="text" value="<?php echo $d['username'];?>" name="username"></td></tr>
                <tr><td>Password</td><td><input type="text" value="<?php echo $d['password'];?>" name="password"></td></tr>
                <tr><td>level</td><td><input type="text" value="<?php echo $d['level'];?>" name="level"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button>
                <a href="admin.php">Kembali</a></td></tr>
            </table>
   <?php     }?>
        </form>
   
</body>
</html>