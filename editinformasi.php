
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
        <form method="post" action="updateinformasi.php">
        <?php
        $id = $_GET['id'];
        $data = mysqli_query($conn,"SELECT * from informasi WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){

            ?>
            <input type="hidden" value="<?php echo $d['id'];?>" name="id">
            <table class="table table-bordered table-striped table-hover" border="1">
                <tr><td>Informasi :</td><td><input style="width:1500px; height:50px"type="text" value="<?php echo $d['informasi'];?>" name="informasi"></td></tr>
                <tr><td>Waktu :</td><td><input style="width:1500px; height:50px" type="text" value="<?php echo $d['waktu'];?>" name="waktu"></td></tr>
                <tr><td>Lokasi :</td><td><input style="width:1500px; height:50px" type="text" value="<?php echo $d['lokasi'];?>" name="lokasi"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button>
                <a href="panitia.php">Kembali</a></td></tr>
            </table>
   <?php     }?>
        </form>
    </body>
</body>
</html>