<div class="mb-3">
    <label class="form-label">Tanggal</label>
    <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $transaksi->tanggal ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Kendaraan</label>
    <select name="kendaraan_id" class="form-select" required>
        <option value="">Pilih Kendaraan</option>
        @foreach ($kendaraan as $k)
            <option value="{{ $k->id }}"
                {{ old('kendaraan_id', $transaksi->kendaraan_id ?? '') == $k->id ? 'selected' : '' }}>
                {{ $k->no_polisi }} - {{ $k->nama_kendaraan }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Jenis BBM</label>
    <input type="text" name="jenis_bbm" class="form-control"
        value="{{ old('jenis_bbm', $transaksi->jenis_bbm ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Jumlah Liter</label>
    <input type="number" step="0.01" name="jumlah_liter" id="liter" class="form-control"
        value="{{ old('jumlah_liter', $transaksi->jumlah_liter ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Harga per Liter</label>
    <input type="number" name="harga_per_liter" id="harga" class="form-control"
        value="{{ old('harga_per_liter', $transaksi->harga_per_liter ?? '') }}">
</div>

{{-- <div class="mb-3">
    <label class="form-label">Total</label>
    <input type="text" id="total" class="form-control" readonly>
</div> --}}

<div class="mb-3">
    <label class="form-label">Total</label>
    <input type="number" name="total" id="total_manual" class="form-control"
        value="{{ old('total', $transaksi->total ?? '') }}">
</div>

<input type="hidden" id="total_auto">

{{-- <div class="mb-3">
    <label class="form-label">No Nota</label>
    <input type="text" name="no_nota" class="form-control" value="{{ old('no_nota', $transaksi->no_nota ?? '') }}">
</div> --}}

{{-- <div class="mb-3">
    <label class="form-label">Foto Nota</label>
    <input type="file" name="foto_nota" class="form-control">
</div> --}}

<div class="mb-3">
    <label class="form-label">Keterangan</label>
    <textarea name="keterangan" class="form-control">{{ old('keterangan', $transaksi->keterangan ?? '') }}</textarea>
</div>

{{-- <script>
    function hitungTotal() {
        let liter = document.getElementById('liter').value || 0;
        let harga = document.getElementById('harga').value || 0;
        let total = liter * harga;

        document.getElementById('total').value = total.toLocaleString('id-ID');
    }

    document.getElementById('liter').addEventListener('input', hitungTotal);
    document.getElementById('harga').addEventListener('input', hitungTotal);
</script> --}}

<script>
    function hitungTotal() {
        let liter = parseFloat(document.getElementById('liter').value) || 0;
        let harga = parseFloat(document.getElementById('harga').value) || 0;

        let total = liter * harga;

        document.getElementById('total_auto').value = total;
    }

    document.getElementById('liter').addEventListener('input', hitungTotal);
    document.getElementById('harga').addEventListener('input', hitungTotal);

    hitungTotal();
</script>
