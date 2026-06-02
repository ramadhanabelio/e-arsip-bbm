<?php

namespace App\Exports;

use App\Models\Lisensi;
use Maatwebsite\Excel\Concerns\FromCollection;

class LisensiExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Lisensi::all();
    }
}
