<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan Pengadaan</title>

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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            vertical-align: top;
        }

        th {
            background-color: #f4f4f4;
            text-align: center;
        }

        .text-center {
            text-align: center;
        }

        .text-end {
            text-align: right;
        }

        .status-done {
            color: green;
            font-weight: bold;
        }

        .status-renewal {
            color: orange;
            font-weight: bold;
        }

        .status-expired {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="header">
        <img src="{{ public_path('images/logo.png') }}" alt="Logo">

        <div class="title">
            <h2>Laporan Pengadaan</h2>
            <p>Bank Riau Kepri Syariah Pekanbaru</p>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th width="40">No.</th>
                <th>Nama Pekerjaan</th>
                <th>Penyedia</th>
                <th>PIC</th>
                <th>Nilai Pengadaan</th>
                <th>Jangka Waktu</th>
                <th>Biaya Anggaran</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($data as $item)
                @php
                    $statusClass = match ($item->status) {
                        'done' => 'status-done',
                        'renewal' => 'status-renewal',
                        'expired' => 'status-expired',
                        default => '',
                    };
                @endphp

                <tr>
                    <td class="text-center">
                        {{ $loop->iteration }}.
                    </td>

                    <td>
                        {{ $item->nama_pekerjaan }}
                    </td>

                    <td>
                        {{ $item->nama_penyedia }}
                    </td>

                    <td>
                        {{ $item->pic }}
                    </td>

                    <td class="text-end">
                        Rp.
                        {{ number_format($item->nilai_pengadaan, 0, ',', '.') }}
                    </td>

                    <td class="text-center">
                        {{ $item->jangka_waktu_pekerjaan }}
                    </td>

                    <td>
                        {{ $item->biaya_anggaran }}
                    </td>

                    <td class="text-center">
                        <span class="{{ $statusClass }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="8" class="text-center">
                        Data tidak tersedia
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>

</body>

</html>
