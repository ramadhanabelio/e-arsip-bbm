<div class="mb-3">
    <label class="form-label">Jenis</label>

    <select name="jenis" class="form-control">
        <option value="hardware" {{ old('jenis', $lisensi->jenis ?? '') == 'hardware' ? 'selected' : '' }}>
            Hardware
        </option>

        <option value="software" {{ old('jenis', $lisensi->jenis ?? '') == 'software' ? 'selected' : '' }}>
            Software
        </option>
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Brand / Nama Lisensi</label>
    <input type="text" name="brand_nama_lisensi" class="form-control"
        value="{{ old('brand_nama_lisensi', $lisensi->brand_nama_lisensi ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Contract / Serial Number</label>
    <input type="text" name="contract_serial_number" class="form-control"
        value="{{ old('contract_serial_number', $lisensi->contract_serial_number ?? '') }}">
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Start Date</label>
        <input type="date" name="start_date" class="form-control"
            value="{{ old('start_date', $lisensi->start_date ?? '') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">End Date</label>
        <input type="date" name="end_date" class="form-control"
            value="{{ old('end_date', $lisensi->end_date ?? '') }}">
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Kebutuhan Maintenance</label>
    <input type="text" name="kebutuhan_maintenance" class="form-control"
        value="{{ old('kebutuhan_maintenance', $lisensi->kebutuhan_maintenance ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">PIC</label>
    <input type="text" name="pic" class="form-control" value="{{ old('pic', $lisensi->pic ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Vendor</label>
    <input type="text" name="vendor" class="form-control" value="{{ old('vendor', $lisensi->vendor ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Status</label>

    <select name="status" class="form-control">
        <option value="done" {{ old('status', $lisensi->status ?? '') == 'done' ? 'selected' : '' }}>
            Done
        </option>

        <option value="renewal" {{ old('status', $lisensi->status ?? '') == 'renewal' ? 'selected' : '' }}>
            Renewal
        </option>

        <option value="expired" {{ old('status', $lisensi->status ?? '') == 'expired' ? 'selected' : '' }}>
            Expired
        </option>
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Keterangan</label>

    <textarea name="keterangan" rows="4" class="form-control">{{ old('keterangan', $lisensi->keterangan ?? '') }}</textarea>
</div>
