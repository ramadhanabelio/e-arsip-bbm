<div class="mb-3">
    <label class="form-label">Nama Pekerjaan</label>
    <input type="text" name="nama_pekerjaan" class="form-control"
        value="{{ old('nama_pekerjaan', $pengadaan->nama_pekerjaan ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Nama Penyedia Barang/Jasa</label>
    <input type="text" name="nama_penyedia" class="form-control"
        value="{{ old('nama_penyedia', $pengadaan->nama_penyedia ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">PIC</label>
    <input type="text" name="pic" class="form-control" value="{{ old('pic', $pengadaan->pic ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Nilai Pengadaan</label>
    <input type="number" name="nilai_pengadaan" class="form-control"
        value="{{ old('nilai_pengadaan', $pengadaan->nilai_pengadaan ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Jangka Waktu Pekerjaan</label>
    <input type="text" name="jangka_waktu_pekerjaan" class="form-control"
        value="{{ old('jangka_waktu_pekerjaan', $pengadaan->jangka_waktu_pekerjaan ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Biaya Anggaran</label>
    <input type="text" name="biaya_anggaran" class="form-control"
        value="{{ old('biaya_anggaran', $pengadaan->biaya_anggaran ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Tanggal Mulai</label>
    <input type="date" name="tanggal_mulai" class="form-control"
        value="{{ old('tanggal_mulai', $pengadaan->tanggal_mulai ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Tanggal Berakhir</label>
    <input type="date" name="tanggal_berakhir" class="form-control"
        value="{{ old('tanggal_berakhir', $pengadaan->tanggal_berakhir ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Status</label>

    <select name="status" class="form-control">

        <option value="done" {{ old('status', $pengadaan->status ?? '') == 'done' ? 'selected' : '' }}>
            Done
        </option>

        <option value="renewal" {{ old('status', $pengadaan->status ?? '') == 'renewal' ? 'selected' : '' }}>
            Renewal
        </option>

        <option value="expired" {{ old('status', $pengadaan->status ?? '') == 'expired' ? 'selected' : '' }}>
            Expired
        </option>

    </select>
</div>

<div class="mb-3">
    <label class="form-label">Keterangan</label>

    <textarea name="keterangan" class="form-control" rows="4">{{ old('keterangan', $pengadaan->keterangan ?? '') }}</textarea>
</div>
