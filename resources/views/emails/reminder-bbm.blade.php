<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

    <h2>Reminder Pembaruan Data BBM</h2>

    <p>
        Data transaksi BBM berikut telah memasuki periode pembaruan bulanan.
    </p>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <td>Tanggal Transaksi</td>
            <td>{{ $transaksi->tanggal }}</td>
        </tr>

        <tr>
            <td>Kendaraan</td>
            <td>
                {{ $transaksi->kendaraan->no_polisi }}
            </td>
        </tr>

        <tr>
            <td>Jenis BBM</td>
            <td>
                {{ $transaksi->jenis_bbm }}
            </td>
        </tr>

        <tr>
            <td>Total</td>
            <td>
                Rp. {{ number_format($transaksi->total, 0, ',', '.') }}
            </td>
        </tr>
    </table>

    <br>

    <p>
        Mohon melakukan pembaruan data BBM untuk periode berikutnya.
    </p>

</body>

</html>
