<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganUsaha extends Model
{
    use HasFactory;

    protected $table = 'surat_keterangan_usahas';
    protected $fillable = ['nama','ttl','jenis_kelamin','alamat','agama','status_perkawinan','pekerjaan','kewarganegaraan','nik','nama_usaha','jenis_usaha','tahun_usaha', 'lokasi_usaha'];
}
