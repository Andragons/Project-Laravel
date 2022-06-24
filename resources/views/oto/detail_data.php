 <?php
include('koneksi.php');
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM data_customer WHERE id = $id");

while($user_data = mysqli_fetch_array($result)) {
    $no = $user_data['no_plat'];
    $merk = $user_data['merk'];
    $tipe = $user_data['tipe'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
       
        <div class="span10 offset1">
            <div class="row">
                <h3>Detail Data</h3>
            </div>
            
            <div class="form-horizontal" >
              <div class="control-group">
                <label class="control-label"><b>No Plat</b></label>
                <div class="controls">
                    <label class="checkbox">
                        <?= $no;?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><b>Merk Kendaraan</b></label>
                <div class="controls">
                    <label class="checkbox">
                        <?= $merk;?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><b>Tipe Kendaraan</b></label>
                <div class="controls">
                    <label class="checkbox">
                        <?= $tipe;?>
                    </label>
                </div>
            </div>
            <div class="form-actions">
              <a class="btn" href="halaman_admin.php">Kembali</a>
          </div>
          
          
      </div>
  </div>
  
</div>
</body>
</html>