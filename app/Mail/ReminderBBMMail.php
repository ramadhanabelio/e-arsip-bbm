<?php

namespace App\Mail;

use App\Models\TransaksiBBM;
use Illuminate\Mail\Mailable;

class ReminderBBMMail extends Mailable
{
    public $transaksi;

    public function __construct(TransaksiBBM $transaksi)
    {
        $this->transaksi = $transaksi;
    }

    public function build()
    {
        return $this
            ->subject('Reminder Pembaruan Data BBM')
            ->view('emails.reminder-bbm');
    }
}
