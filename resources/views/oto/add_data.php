<?php
	
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
	$no = $_POST['no_plat'];
	$merk = $_POST['merk'];
	$tipe = $_POST['tipe'];
		
	// include database connection file
	include_once("koneksi.php");
				
	// Insert user data into table
	$result = mysqli_query($koneksi, "INSERT INTO data_customer (no_plat,merk,tipe) VALUES('$no','$merk','$tipe')");
		
	// Show message when user added
    if($result === TRUE){
        echo "<script>";
        echo "alert('Data Berhasil Ditambah');";
        echo "window.location.href='halaman_admin.php';";
        echo "</script>";
    }
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <style>
        #plat{
            text-transform: uppercase;
        }

        .font {
            text-transform: capitalize;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="span10 offset1">
            <div class="row">
                <h3>Tambah Data</h3>
            </div>


            <form class="form-horizontal" action="add_data.php" method="post">

              <div class="control-group">
                <label class="control-label">No Plat</label>
                <div class="controls">
                    <input name="no_plat" type="text"  placeholder="No Plat" id="plat">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Merk Kendaraan</label>
                <div class="controls">
                    <input name="merk" class="font" type="text" placeholder="Merk">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Tipe Kendaraan</label>
                <div class="controls">
                    <input name="tipe" class="font" type="text"  placeholder="Tipe">
                </div>
            </div>
            <div class="form-actions">
              <button name="Submit" type="submit" class="btn btn-success">Tambah</button>
              <a class="btn" href="halaman_admin.php">Back</a>
          </div>
      </form>
  </div>

</div> <!-- /container -->
</body>
</html>
