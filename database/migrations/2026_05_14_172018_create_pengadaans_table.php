<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengadaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pekerjaan');
            $table->string('nama_penyedia');
            $table->string('pic');
            $table->decimal('nilai_pengadaan', 15, 2);
            $table->string('jangka_waktu_pekerjaan');
            $table->string('biaya_anggaran')->nullable();
            $table->text('keterangan')->nullable();
            $table->enum('status', [
                'done',
                'renewal',
                'expired'
            ])->default('renewal');
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_berakhir')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengadaans');
    }
};
