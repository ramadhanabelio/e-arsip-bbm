<?php

namespace App\Mail;

use App\Models\Pengadaan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PengadaanNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $pengadaan;
    public $action;

    public function __construct(Pengadaan $pengadaan, $action)
    {
        $this->pengadaan = $pengadaan;
        $this->action = $action;
    }

    public function build()
    {
        return $this->subject(
            'Notifikasi Pengadaan - ' . ucfirst($this->action)
        )
            ->view('emails.pengadaan');
    }
}
