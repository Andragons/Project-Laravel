<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	 <!-- CSS only -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<style>
		tbody{
			text-transform: capitalize;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			</br>
			</br>
	</div>
	<div class="row">
		<button class="btn btn-primary" onClick="create()">Create</button>
		
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
				
			</tbody>
		</table>
	</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script>
        $(document).ready(function() {
            
           
        });

        function create() {
                $("#exampleModal").modal('show');
            }
    </script>

</body>
</html>