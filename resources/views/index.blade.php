<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel 8</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data Rekapitulasi Kendaraan Bermotor </h1>
                <button class="btn btn-primary" onClick="create()">+ Tambah Data</button>
                <div id="read" class="mt-3"></div>
            </div>
        </div>
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
                    <div id="page" class="p-2"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

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
                $("#exampleModalLabel").html('Create Product')
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
                data: {noplat,merk,tipe},
                success: function(data) {
                    $(".btn-close").click();
                    alert('Data Berhasil Ditambahkan');
                    read()
                }
            });
        }

        // Untuk modal halaman edit show
        function show(id) {
            $.get("{{ url('show') }}/" + id, {}, function(data, status) {
                $("#exampleModalLabel").html('Edit Product')
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
                data: {noplat,merk,tipe},
                success: function(data) {
                    $(".btn-close").click();
                    alert("Data Berhasil Diubah");
                    read()
                }
            });
        }

        // Untuk hapus data
        function destroy(id){
            var noplat = $("#noplat").val();
            $.ajax({
                type: "get",
                url: "{{ url('destroy') }}/" + id,
                data: "noplat=" + noplat,
                success: function(data) {
                    $(".btn-close").click();
                    alert('Data Berhasil Di Hapus');
                    read()
                }
            });
        }
        

</script>
</body>
</html>