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
        <div class="col-lg-8 mb-2">
		    <button class="btn btn-primary" onClick="create()">Create</button>
            <div id="read" class="mt-3"></div>
            
        </div>
        
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div id="page" class="pd-2"></div>
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
            read()
        });
        // Read Database
        function read() {
            $.get("{{ url('read') }}", {}, function(data, status) {
                $("#read").html(data);
            });
        }
        // Untuk modal halaman create
        function create() {
            $.get("{{ url('create') }}", {}, function(data, status) {
                $("#page").html(data);
                $("#exampleModal").modal('show');

            });
        }

        // untuk proses create data
        function store() {
            var noplat = $("#noplat").val();
            var merk = $("#merk").val();
            var tipe = $("#tipe").val();
            $.ajax({
                type: "get",
                url: "{{ url('store') }}",
                data: ["noplat=" + noplat,
                      "merk=" + merk,
                      "tipe=" + tipe],
                success: function(data) {
                    $(".btn-close").click();
                    read()
                }
            });
        }

        // Untuk modal halaman edit show
        function show(id) {
            $.get("{{ url('show') }}/" + id, {}, function(data, status) {
                $("#exampleModalLabel").html('Edit Data')
                $("#page").html(data);
                $("#exampleModal").modal('show');
            });
        }

        // untuk proses update data
        function update(id) {
            var noplat = $("#noplat").val();
            var merk = $("#merk").val();
            var tipe = $("#tipe").val();
            $.ajax({
                type: "get",
                url: "{{ url('update') }}/" + id,
                data: ["noplat=" + noplat,
                      "merk=" + merk,
                      "tipe=" + tipe],
                success: function(data) {
                    $(".btn-close").click();
                    read()
                }
            });
        }

        // untuk delete atau destroy data
        function destroy(id) {

            $.ajax({
                type: "get",
                url: "{{ url('destroy') }}/" + id,
                data: "no_plat=" + noplat,
                success: function(data) {
                    $(".btn-close").click();
                    read()
                }
            });
        }
    </script>

</body>
</html>