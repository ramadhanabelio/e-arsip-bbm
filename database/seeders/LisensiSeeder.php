<?php

namespace Database\Seeders;

use App\Models\Lisensi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LisensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            // ================= HARDWARE =================

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'C1000-48P-4G-L',
                'contract_serial_number' => 'PSZ272619Q9',
                'start_date' => null,
                'end_date' => '2025-01-11',
                'kebutuhan_maintenance' => 'min 1 - 3 tahun',
                'pic' => 'Dedy',
                'vendor' => 'Tekno',
                'keterangan' => null,
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'C1000-48P-4G-L',
                'contract_serial_number' => 'PSZ27141QQV',
                'start_date' => null,
                'end_date' => '2025-01-11',
                'kebutuhan_maintenance' => 'min 1 - 3 tahun',
                'pic' => 'Dedy',
                'vendor' => 'Tekno',
                'keterangan' => 'On Proccess',
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Fortigate 101F',
                'contract_serial_number' => 'F6101FTK21011344',
                'start_date' => '2024-02-18',
                'end_date' => '2025-02-18',
                'kebutuhan_maintenance' => 'Perlu, 1 tahun',
                'pic' => 'Dedy',
                'vendor' => 'UHP',
                'keterangan' => 'On Proccess',
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Fortigate 101F',
                'contract_serial_number' => 'F6101FTK21012266',
                'start_date' => '2024-02-18',
                'end_date' => '2025-02-18',
                'kebutuhan_maintenance' => 'Perlu, 1 tahun',
                'pic' => 'Dedy',
                'vendor' => 'UHP',
                'keterangan' => 'On Proccess',
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Cisco Network access control (NAC)',
                'contract_serial_number' => 'WMP244001A1',
                'start_date' => null,
                'end_date' => '2025-03-26',
                'kebutuhan_maintenance' => 'Perlu, 1 tahun',
                'pic' => 'Dedy',
                'vendor' => 'KRL',
                'keterangan' => 'On Proccess',
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Riverbed SteelHead CX3070L',
                'contract_serial_number' => 'LDBTW000F9A77',
                'start_date' => null,
                'end_date' => '2025-05-01',
                'kebutuhan_maintenance' => 'min 1 - 3 tahun',
                'pic' => 'Alan',
                'vendor' => 'Multipolar',
                'keterangan' => '1 SPK',
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Riverbed SteelHead CX3070L',
                'contract_serial_number' => 'LDBRJ00176A28',
                'start_date' => null,
                'end_date' => '2025-05-01',
                'kebutuhan_maintenance' => 'min 1 - 3 tahun',
                'pic' => 'Alan',
                'vendor' => 'Multipolar',
                'keterangan' => '1 SPK',
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Cisco Wireless Local Area Network (LAN) Controller (WLC)',
                'contract_serial_number' => 'FCW2408M03P',
                'start_date' => null,
                'end_date' => '2025-05-14',
                'kebutuhan_maintenance' => 'Perlu, 1 tahun',
                'pic' => 'Dedy',
                'vendor' => 'KRL',
                'keterangan' => null,
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Cisco Catalyst WS-C2960X-48FPD-L',
                'contract_serial_number' => 'FCW2005B1RV',
                'start_date' => null,
                'end_date' => null,
                'kebutuhan_maintenance' => 'min 1 - 3 tahun',
                'pic' => null,
                'vendor' => null,
                'keterangan' => null,
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Cisco Catalyst WS-C2960X-48FPD-L',
                'contract_serial_number' => 'FCW2119B1V5',
                'start_date' => null,
                'end_date' => null,
                'kebutuhan_maintenance' => 'min 1 - 3 tahun',
                'pic' => null,
                'vendor' => null,
                'keterangan' => null,
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Cisco C1300-48P-4G Managed Switch',
                'contract_serial_number' => 'PSZ27261ERJ',
                'start_date' => null,
                'end_date' => '2025-08-18',
                'kebutuhan_maintenance' => 'min 1 - 3 tahun',
                'pic' => null,
                'vendor' => null,
                'keterangan' => null,
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Cisco C1300-48P-4G Managed Switch',
                'contract_serial_number' => 'PSZ27261F59',
                'start_date' => null,
                'end_date' => '2025-08-18',
                'kebutuhan_maintenance' => 'min 1 - 3 tahun',
                'pic' => null,
                'vendor' => null,
                'keterangan' => null,
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Fortinet FortiWeb 2000E',
                'contract_serial_number' => 'FV-2KET618000041',
                'start_date' => '2024-08-28',
                'end_date' => '2025-08-28',
                'kebutuhan_maintenance' => 'Perlu, 1 tahun',
                'pic' => 'Dedy',
                'vendor' => 'UHP',
                'keterangan' => null,
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Fortiweb 2000E',
                'contract_serial_number' => 'FV-2KE3117000020',
                'start_date' => '2024-09-08',
                'end_date' => '2025-09-08',
                'kebutuhan_maintenance' => 'Perlu, 1 tahun',
                'pic' => 'Dedy',
                'vendor' => 'UHP',
                'keterangan' => '1 SPK',
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Fortigate 401E',
                'contract_serial_number' => 'FG4H1E5819900755',
                'start_date' => '2024-09-07',
                'end_date' => '2025-09-07',
                'kebutuhan_maintenance' => 'Perlu, 1 tahun',
                'pic' => 'Dedy',
                'vendor' => 'UHP',
                'keterangan' => '1 SPK',
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Fortigate 601F',
                'contract_serial_number' => 'FG6H1FTB23902025',
                'start_date' => '2024-09-29',
                'end_date' => '2025-10-29',
                'kebutuhan_maintenance' => 'Perlu, 1 tahun',
                'pic' => 'Alan',
                'vendor' => 'Compnet',
                'keterangan' => '1 SPK',
            ],

            [
                'jenis' => 'hardware',
                'brand_nama_lisensi' => 'Cisco Catalyst WS-C2960X-48FPD-L',
                'contract_serial_number' => 'FCW2146B4VB',
                'start_date' => '2025-07-02',
                'end_date' => '2026-07-01',
                'kebutuhan_maintenance' => 'min 1 - 3 tahun',
                'pic' => 'Alan',
                'vendor' => 'KRL',
                'keterangan' => 'On Proccess',
            ],

            // ================= SOFTWARE =================

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'MySQL Standard Edition Subscribtion',
                'contract_serial_number' => '25624049',
                'start_date' => null,
                'end_date' => '2024-08-28',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'MySQL Standard Edition Subscribtion',
                'contract_serial_number' => '25679036',
                'start_date' => null,
                'end_date' => '2024-09-07',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'Nessus Pro',
                'contract_serial_number' => '71185602/71229528',
                'start_date' => null,
                'end_date' => '2025-01-20',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'Red Hat Enterprise Linux Server',
                'contract_serial_number' => '12149793',
                'start_date' => null,
                'end_date' => '2025-03-05',
                'pic' => 'Dedy',
                'vendor' => 'UHP',
                'keterangan' => '1 SPK',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'Red Hat Enterprise Linux Server',
                'contract_serial_number' => '11636359',
                'start_date' => null,
                'end_date' => '2025-03-21',
                'pic' => 'Dedy',
                'vendor' => 'UHP',
                'keterangan' => '1 SPK',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'DBIVISIT - Support',
                'contract_serial_number' => null,
                'start_date' => '2024-03-09',
                'end_date' => '2025-03-08',
                'kebutuhan_maintenance' => 'Perlu, 1 tahun',
                'pic' => 'Alan',
                'vendor' => 'UHP',
                'keterangan' => 'Sudah SPK',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'TrendMicro Apex Central',
                'contract_serial_number' => null,
                'start_date' => null,
                'end_date' => '2025-06-05',
                'kebutuhan_maintenance' => 'Perlu, 1 tahun',
                'pic' => 'Dedy',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'Endpoint Central',
                'contract_serial_number' => null,
                'start_date' => null,
                'end_date' => '2025-06-06',
                'kebutuhan_maintenance' => 'Perlu, 1 tahun',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'Apple Membership',
                'contract_serial_number' => null,
                'start_date' => null,
                'end_date' => '2025-06-06',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'Office 365',
                'contract_serial_number' => '27e87152-b761-4c4c-98fd-0f8db81b8947',
                'start_date' => null,
                'end_date' => '2025-07-01',
                'pic' => 'Dedy',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'SSL Certificate Wildcard',
                'contract_serial_number' => '*.brksyariah.co.id',
                'start_date' => null,
                'end_date' => '2025-07-25',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'Red Hat Enterprise Linux Server',
                'contract_serial_number' => '12431682',
                'start_date' => null,
                'end_date' => '2025-08-25',
                'pic' => 'Dedy',
                'vendor' => 'KRL',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'Red Hat Enterprise Linux Server',
                'contract_serial_number' => '10758699',
                'start_date' => null,
                'end_date' => '2025-08-10',
                'pic' => 'Dedy',
                'vendor' => 'Tekno',
                'keterangan' => '1 SPK',
            ],

            [
                'jenis' => 'software',
                'brand_nama_lisensi' => 'Red Hat Enterprise Linux Server',
                'contract_serial_number' => '12440553',
                'start_date' => null,
                'end_date' => '2025-09-01',
                'pic' => 'Dedy',
                'vendor' => 'Tekno',
                'keterangan' => '1 SPK',
            ],
        ];

        foreach ($data as $item) {
            Lisensi::create($item);
        }
    }
}
