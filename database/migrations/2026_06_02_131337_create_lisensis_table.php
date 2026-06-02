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
        Schema::create('lisensis', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', [
                'hardware',
                'software'
            ]);
            $table->string('brand_nama_lisensi');
            $table->string('contract_serial_number')
                ->nullable();
            $table->date('start_date')
                ->nullable();
            $table->date('end_date')
                ->nullable();
            $table->string('kebutuhan_maintenance')
                ->nullable();
            $table->string('pic')
                ->nullable();
            $table->string('vendor')
                ->nullable();
            $table->text('keterangan')
                ->nullable();
            $table->enum('status', [
                'active',
                'renewal',
                'expired'
            ])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lisensis');
    }
};
