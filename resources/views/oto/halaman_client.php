<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.mid.js"></script>
	<style>
		tbody{
			text-transform: capitalize;
		}
	</style>
</head>

<script>
	$(document).ready(function() {
		var table = $('#example').DataTable();
		var tt = new $.fn.dataTable.TableTools( table );
		
		$( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
	} );
	
</script>

<body>
	<div class="container">
		<div class="row">
		</br>
	</br>
</div>
<div class="row">

	<p>
		<a href ="logout.php"> <button class="btn btn-secondary">Logout</button></a>
	</p>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nomor Plat</th>
				<th>Merk Kendaraan</th>
				<th>Tipe Kendaraan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include 'koneksi.php';
			$result = mysqli_query($koneksi, "SELECT * FROM data_customer ORDER BY id DESC");
			$total = mysqli_query($koneksi, "SELECT * FROM  data_customer");
			$coba = mysqli_num_rows($total);

			$i = 1;  
			while($i <= $coba){
				while($user_data = mysqli_fetch_array($result)) { 
					echo "<tr>";       
						echo "<td>".$i."</td>";
						echo "<td>".$user_data['no_plat']."</td>";
						echo "<td>".$user_data['merk']."</td>";
						echo "<td>".$user_data['tipe']."</td>";
						echo '<td><a class="btn" href="detail_client.php?id='.$user_data['id'].'">Detail</a></td>';
					echo "</tr>";
					$i++;
				}
			}
			?>
		</tbody>
	</table>
</div>
</body>
</html>