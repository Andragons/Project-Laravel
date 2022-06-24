<?php
include('koneksi.php');
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM user WHERE id = $id");

while($user_data = mysqli_fetch_array($result)) {
    $nama = $user_data['nama'];
    $user = $user_data['username'];
    $pass = $user_data['password'];
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
                <h3>Detail User</h3>
            </div>
            
            <div class="form-horizontal" >
              <div class="control-group">
                <label class="control-label"><b>Nama</b></label>
                <div class="controls">
                    <label class="checkbox">
                        <?= $nama;?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><b>Username</b></label>
                <div class="controls">
                    <label class="checkbox">
                        <?= $user;?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label"><b>Password</b></label>
                <div class="controls">
                    <label class="checkbox">
                        <?= $pass;?>
                    </label>
                </div>
            </div>
            <div class="form-actions">
              <a class="btn" href="halaman_user.php">Kembali</a>
          </div>
          
          
      </div>
  </div>
  
</div>
</body>
</html>