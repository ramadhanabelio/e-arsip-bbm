<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\TransaksiBBM;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReminderBBMMail;

class SendReminderBBM extends Command
{
    protected $signature = 'bbm:reminder';

    protected $description = 'Kirim reminder pembaruan data BBM';

    public function handle()
    {
        $today = Carbon::today();

        $transaksis = TransaksiBBM::whereDate(
            'reminder_date',
            $today
        )->get();

        foreach ($transaksis as $transaksi) {

            Mail::to('umum@brksyariah.co.id')
                ->send(new ReminderBBMMail($transaksi));
        }

        $this->info('Reminder berhasil dikirim.');
    }
}
