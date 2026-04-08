<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan Transaksi BBM</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            font-size: 12px;
        }

        .header {
            position: relative;
            margin-bottom: 25px;
            height: 80px;
        }

        .header img {
            position: absolute;
            left: 0;
            top: 0;
            width: 60px;
        }

        .header .title {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .header h2 {
            margin: 5px 0;
            font-size: 20px;
        }

        .header p {
            margin: 0;
            font-size: 13px;
            font-weight: bold;
        }

        /* .periode {
            text-align: center;
            font-size: 13px;
            margin-bottom: 20px;
        } */

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
        }

        .text-end {
            text-align: right;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="header">
        <img src="{{ public_path('images/logo.png') }}" alt="Logo">

        <div class="title">
            <h2>Laporan Transaksi BBM</h2>
            <p>Bank Riau Kepri Syariah Pekanbaru</p>
        </div>
    </div>

    {{-- <p class="periode">
        Periode:
        {{ request('dari') ? \Carbon\Carbon::parse(request('dari'))->format('d-m-Y') : '-' }}
        s/d
        {{ request('sampai') ? \Carbon\Carbon::parse(request('sampai'))->format('d-m-Y') : '-' }}
    </p> --}}

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>No Polisi</th>
                <th>BBM</th>
                <th>Liter</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>

            @php $grandTotal = 0; @endphp

            @forelse ($data as $item)
                @php $grandTotal += $item->total; @endphp
                <tr>
                    <td>{{ $loop->iteration }}.</td>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
                    <td>{{ $item->kendaraan->no_polisi }}</td>
                    <td>{{ $item->jenis_bbm }}</td>
                    <td>{{ $item->jumlah_liter }}</td>
                    <td class="text-end">Rp. {{ number_format($item->harga_per_liter, 0, ',', '.') }}</td>
                    <td class="text-end">Rp. {{ number_format($item->total, 0, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Data tidak tersedia</td>
                </tr>
            @endforelse

            <tr class="total">
                <td colspan="6">Total Keseluruhan</td>
                <td class="text-end">Rp. {{ number_format($grandTotal, 0, ',', '.') }}</td>
            </tr>

        </tbody>
    </table>

</body>

</html>
