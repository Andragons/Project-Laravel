<?php
	// session_start();
	// if(!isset($_SESSION['username'])){
	// 	header("Location: login.php");
	// }
?>

<?php
// Membuat koneksi database menggunakan config file
include ("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM user WHERE level = 'client' ORDER BY id DESC");
$total = mysqli_query($koneksi, "SELECT * FROM  user WHERE level = 'client'");
$coba = mysqli_num_rows($total);
?>
 
<html>
<head>    
    <title>Tambah User</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.mid.js"></script>
</head>
 
<body>
	<div class="container">
		<div class="row">
			</br>
			</br>
	</div>
	<div class="row">
		<p>
			<a href ="add_user.php" button class="btn btn-success">Buat</button></a>
		</p>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Username</th>					
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php

				$i = 1;  
				while($i <= $coba){
					while($user_data = mysqli_fetch_array($result)) { 
						echo "<tr>";       
							echo "<td>".$i."</td>";
							echo "<td>".$user_data['nama']."</td>";
							echo "<td>".$user_data['username']."</td>";
							echo '<td width=250>';
							echo '<a class="btn" href="detail_user.php?id='.$user_data['id'].'">Detail</a>';
							echo '  ';
							echo '<a class="btn btn-success" href="edit_user.php?id='.$user_data['id'].'">Update</a>';
							echo '  ';
							echo '<a class="btn btn-danger" href="delete_user.php?id='.$user_data['id'].'">Delete</a>';
							echo '</td>';
						echo "</tr>";
						$i++;
					}
				}
				?>
			</tbody>
		</table>
        <p>                
            <a href ="index.php" button class="btn btn-secondary">Kembali</button></a>
        </p>
	</div>
</body>
</html>