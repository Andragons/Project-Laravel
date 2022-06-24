<?php
	
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
	$name = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
		
	// include database connection file
	include_once("koneksi.php");
				
	// Insert user data into table
	$result = mysqli_query($koneksi, "INSERT INTO user (nama,username,password,level) VALUES('$name','$username','$password','client')");
		
	// Menampilkan Pesan User Berhasil di Buat
	if($result === TRUE){
        echo "<script>";
        echo "alert('User Berhasil Di Buat');";
        echo "window.location.href='add_user.php'";
        echo "</script>";
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
                <h3>Buat User</h3>
            </div>


            <form class="form-horizontal" action="add.php" method="post">

              <div class="control-group">
                <label class="control-label">Nama</label>
                <div class="controls">
                    <input name="nama" type="text"  placeholder="Nama">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Username</label>
                <div class="controls">
                    <input name="username" type="text" placeholder="Username">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                    <input name="password" type="password"  placeholder="******">
                </div>
            </div>
            <div class="form-actions">
              <button name="Submit" type="submit" class="btn btn-success">Create</button>
              <a class="btn" href="index.php">Back</a>
          </div>
      </form>
  </div>

</div> <!-- /container -->
</body>
</html>
