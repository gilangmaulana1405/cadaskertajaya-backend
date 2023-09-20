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
        Schema::create('surat_keterangan_usahas', function (Blueprint $table) {
            $table->id();

            // data diri
            $table->string('nama');
            $table->string('ttl');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->string('pekerjaan');
            $table->string('kewarganegaraan');
            $table->bigInteger('nik');

            // data usaha
            $table->string('nama_usaha');
            $table->string('jenis_usaha');
            $table->integer('tahun_usaha');
            $table->string('lokasi_usaha');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keterangan_usahas');
    }
};
