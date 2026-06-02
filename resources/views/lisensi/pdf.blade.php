<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan Lisensi</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            font-size: 11px;
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
            padding: 6px;
            vertical-align: top;
        }

        th {
            background-color: #f4f4f4;
            text-align: center;
        }

        .text-center {
            text-align: center;
        }

        .status-active {
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
            <h2>Laporan Lisensi</h2>
            <p>Bank Riau Kepri Syariah Pekanbaru</p>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th width="35">No.</th>
                <th>Jenis</th>
                <th>Brand / Nama Lisensi</th>
                <th>Contract / Serial Number</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Maintenance</th>
                <th>PIC</th>
                <th>Vendor</th>
                <th>Status</th>
                <th>Keterangan</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($data as $item)
                @php
                    $statusClass = match ($item->status) {
                        'active' => 'status-active',
                        'renewal' => 'status-renewal',
                        'expired' => 'status-expired',
                        default => '',
                    };
                @endphp

                <tr>
                    <td class="text-center">
                        {{ $loop->iteration }}.
                    </td>

                    <td class="text-center">
                        {{ ucfirst($item->jenis) }}
                    </td>

                    <td>
                        {{ $item->brand_nama_lisensi }}
                    </td>

                    <td>
                        {{ $item->contract_serial_number ?? '-' }}
                    </td>

                    <td class="text-center">
                        {{ $item->start_date ? \Carbon\Carbon::parse($item->start_date)->format('d-m-Y') : '-' }}
                    </td>

                    <td class="text-center">
                        {{ $item->end_date ? \Carbon\Carbon::parse($item->end_date)->format('d-m-Y') : '-' }}
                    </td>

                    <td>
                        {{ $item->kebutuhan_maintenance ?? '-' }}
                    </td>

                    <td>
                        {{ $item->pic ?? '-' }}
                    </td>

                    <td>
                        {{ $item->vendor ?? '-' }}
                    </td>

                    <td class="text-center">
                        <span class="{{ $statusClass }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>

                    <td>
                        {{ $item->keterangan ?? '-' }}
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="11" class="text-center">
                        Data tidak tersedia
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>

</body>

</html>
