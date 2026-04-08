<div class="mb-3">
    <label class="form-label">Nama Kendaraan</label>
    <input type="text" name="nama_kendaraan" class="form-control"
        value="{{ old('nama_kendaraan', $kendaraan->nama_kendaraan ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">No Polisi</label>
    <input type="text" name="no_polisi" class="form-control"
        value="{{ old('no_polisi', $kendaraan->no_polisi ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Tahun</label>
    <input type="number" name="tahun" class="form-control" value="{{ old('tahun', $kendaraan->tahun ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Jenis</label>
    <select name="jenis" class="form-select">
        <option value="">Pilih</option>
        <option value="Solar" {{ old('jenis', $kendaraan->jenis ?? '') == 'Solar' ? 'selected' : '' }}>Solar</option>
        <option value="Bensin" {{ old('jenis', $kendaraan->jenis ?? '') == 'Bensin' ? 'selected' : '' }}>Bensin
        </option>
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Divisi</label>
    <select name="divisi_id[]" class="form-control" multiple>
        @foreach ($divisi as $d)
            <option value="{{ $d->id }}"
                {{ isset($kendaraan) && $kendaraan->divisi->contains($d->id) ? 'selected' : '' }}>
                {{ $d->nama_divisi }}
            </option>
        @endforeach
    </select>
    <small class="text-muted">Bisa pilih lebih dari 1</small>
</div>
