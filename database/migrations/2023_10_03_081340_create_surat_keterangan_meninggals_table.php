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
        Schema::create('surat_keterangan_meninggals', function (Blueprint $table) {
            $table->id();

            // data diri
            $table->string('nama');
            $table->bigInteger('nik');
            $table->integer('umur');
            $table->string('pekerjaan');
            $table->string('alamat_ktp');

            // telah meninggal dunia pada
            $table->string('hari_kematian');
            $table->date('tanggal_kematian');
            $table->string('jam_kematian');
            $table->string('tempat_kematian');
            $table->string('penyebab_kematian');

            // pelapor
            $table->string('nama_pelapor');
            $table->bigInteger('nik_pelapor');
            $table->integer('umur_pelapor');
            $table->string('pekerjaan_pelapor');
            $table->string('alamat_ktp_pelapor');
            $table->string('status_hubungan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keterangan_meninggals');
    }
};
