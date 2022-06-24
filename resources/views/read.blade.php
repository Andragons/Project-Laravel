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
            @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->noplat }}</td>
            <td>{{ $item->merk }}</td>
            <td>{{ $item->tipe }}</td>
            <td>
                <button class="btn btn-warning" onClick="show({{ $item->id }})">Edit</button>
                <button class="btn btn-danger" onClick="destroy({{ $item->id }})">Delete</button>
            </td>
        </tr>
    @endforeach
			</tbody>
		</table>
