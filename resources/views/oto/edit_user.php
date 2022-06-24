<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update'])) {	
	$id = $_POST['id'];
	
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
		
	// update user data
	$result = mysqli_query($koneksi, "UPDATE user SET nama='$nama',username='$username',password='$password' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	if($result === TRUE){
        echo "<script>";
        echo "alert('User Berhasil Di Ubah');";
        echo "window.location.href='halaman_user.php'";
        echo "</script>";
	}
}
?>

<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM user WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result)){
	$nama = $user_data['nama'];
	$username = $user_data['username'];
	$password = $user_data['password'];
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
                <h3>Update User</h3>
            </div>


            <form class="form-horizontal" action="edit_user.php" method="post">
            	<div class="control-group">
                	<label class="control-label">Nama</label>
                	<div class="controls">
                    	<input name="nama" type="text"  value="<?= $nama; ?>">
                	</div>
            	</div>

           		<div class="control-group">
                	<label class="control-label">Username</label>
                	<div class="controls">
                    	<input name="username" type="text" value="<?= $username; ?>">
                	</div>
            	</div>

            	<div class="control-group">
                	<label class="control-label">Password</label>
                	<div class="controls">
                    	<input name="password" type="text" value="<?= $password; ?>">
                	</div>
            	</div>
            
				<div class="form-actions">
              		<button name="update" type="submit" class="btn btn-success">Update</button>
			  		<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
              			<a class="btn" href="index.php">Kembali</a>
          		</div>
      		</form>
  		</div>

	</div>
</body>
</html>