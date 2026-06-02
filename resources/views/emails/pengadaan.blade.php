<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Notifikasi Pengadaan</title>
</head>

<body style="margin:0;padding:0;background:#f4f6f9;font-family:Arial,Helvetica,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f9;padding:30px 0;">
        <tr>
            <td align="center">

                <table width="700" cellpadding="0" cellspacing="0"
                    style="background:#ffffff;border-radius:10px;overflow:hidden;box-shadow:0 2px 10px rgba(0,0,0,.08);">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="background:#0d6efd;color:#ffffff;padding:25px 20px;">
                            <h2 style="margin:0;">
                                Notifikasi Pengadaan
                            </h2>

                            <p style="margin:8px 0 0;font-size:14px;">
                                E-Arsip BBM - Bank Riau Kepri Syariah Pekanbaru
                            </p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:30px;">

                            <p style="margin-top:0;">
                                Yth.
                                <strong>{{ auth()->user()->name }}</strong>,
                            </p>

                            <p>
                                Sistem telah berhasil melakukan proses
                                <strong>{{ ucfirst($action) }}</strong>
                                data pengadaan dengan rincian sebagai berikut:
                            </p>

                            <table width="100%" cellpadding="10" cellspacing="0"
                                style="border-collapse:collapse;border:1px solid #dee2e6;">

                                <tr style="background:#f8f9fa;">
                                    <td width="35%" style="border:1px solid #dee2e6;">
                                        Nama Pekerjaan
                                    </td>
                                    <td style="border:1px solid #dee2e6;">
                                        {{ $pengadaan->nama_pekerjaan }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #dee2e6;">
                                        Nama Penyedia
                                    </td>
                                    <td style="border:1px solid #dee2e6;">
                                        {{ $pengadaan->nama_penyedia }}
                                    </td>
                                </tr>

                                <tr style="background:#f8f9fa;">
                                    <td style="border:1px solid #dee2e6;">
                                        PIC
                                    </td>
                                    <td style="border:1px solid #dee2e6;">
                                        {{ $pengadaan->pic }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #dee2e6;">
                                        Nilai Pengadaan
                                    </td>
                                    <td style="border:1px solid #dee2e6;">
                                        Rp {{ number_format((float) $pengadaan->nilai_pengadaan, 0, ',', '.') }}
                                    </td>
                                </tr>

                                <tr style="background:#f8f9fa;">
                                    <td style="border:1px solid #dee2e6;">
                                        Jangka Waktu
                                    </td>
                                    <td style="border:1px solid #dee2e6;">
                                        {{ $pengadaan->jangka_waktu_pekerjaan }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #dee2e6;">
                                        Status
                                    </td>
                                    <td style="border:1px solid #dee2e6;">
                                        <strong>
                                            {{ ucfirst($pengadaan->status) }}
                                        </strong>
                                    </td>
                                </tr>

                            </table>

                            <p style="margin-top:25px;">
                                Mohon untuk melakukan pengecekan pada aplikasi apabila diperlukan tindakan lebih lanjut.
                            </p>

                            <p>
                                Terima kasih.
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background:#f8f9fa;padding:20px;color:#6c757d;font-size:12px;">

                            <strong>E-Arsip BBM</strong><br>
                            Bank Riau Kepri Syariah Pekanbaru

                            <br><br>

                            Email ini dikirim secara otomatis oleh sistem.
                            Mohon tidak membalas email ini.

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
