<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update'])) {	
	$id = $_POST['id'];
	
	$no = $_POST['no_plat'];
	$merk = $_POST['merk'];
	$tipe = $_POST['tipe'];
		
	// update user data
	$result = mysqli_query($koneksi, "UPDATE data_customer SET no_plat='$no',merk='$merk',tipe='$tipe' WHERE id=$id");

    if($result === TRUE){
        echo "<script>";
        echo "alert('Data Berhasil Di Ubah');";
        echo "window.location.href='halaman_admin.php'";
        echo "</script>";
        // Redirect to homepage to display updated user in list
    	// header("Location: halaman_admin.php");
    }
}
	
	
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM data_customer WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$no = $user_data['no_plat'];
	$merk = $user_data['merk'];
	$tipe = $user_data['tipe'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.mid.js"></script>
</head>
 
<body>
    <div class="container">

        <div class="span10 offset1">
            <div class="row">
                <h3>Update Data</h3>
            </div>


            <form class="form-horizontal" action="edit_data.php" method="post">
            	<div class="control-group">
                	<label class="control-label">No Plat</label>
                	<div class="controls">
                    	<input name="no_plat" type="text"  value="<?= $no; ?>">
                	</div>
            	</div>

           		<div class="control-group">
                	<label class="control-label">Merk Kendaraan</label>
                	<div class="controls">
                    	<input name="merk" type="text" value="<?= $merk; ?>">
                	</div>
            	</div>

            	<div class="control-group">
                	<label class="control-label">Tipe Kendaraan</label>
                	<div class="controls">
                    	<input name="tipe" type="text" value="<?= $tipe; ?>">
                	</div>
            	</div>
            
				<div class="form-actions">
              		<button name="update" type="submit" class="btn btn-success">Update</button>
			  		<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
              		<a class="btn" href="halaman_admin.php">Kembali</a>
          		</div>
      		</form>
  		</div>

	</div>
</body>
</html>