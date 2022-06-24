<div class="p2">
    <div class="form-group mb-2">
        <input type="text" name="noplat" id="noplat" value="{{ $data->noplat }}" class="form-control"
            placeholder="Nomor Plat">
    </div>

    <div class="form-group mb-2">
        <input type="text" name="merk" id="merk" value="{{ $data->merk }}" class="form-control"
            placeholder="Merk Motor">
    </div>

    <div class="form-group">
        <input type="text" name="tipe" id="tipe" value="{{ $data->tipe }}" class="form-control"
            placeholder="Tipe Motor">
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-warning" onClick="update({{ $data->id }})">Update</button>
    </div>
</div>
