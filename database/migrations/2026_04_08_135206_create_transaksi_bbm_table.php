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
        Schema::create('transaksi_bbm', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');

            $table->foreignId('kendaraan_id')->constrained()->cascadeOnDelete();

            $table->decimal('jumlah_liter', 8, 2);
            $table->string('jenis_bbm');
            $table->decimal('harga_per_liter', 12, 2);
            $table->decimal('total', 15, 2);

            $table->string('no_nota')->nullable();
            $table->string('foto_nota')->nullable();
            $table->text('keterangan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_bbm');
    }
};
