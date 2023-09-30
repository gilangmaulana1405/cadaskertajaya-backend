<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganTidakMampu extends Model
{
    use HasFactory;

    protected $table = 'surat_keterangan_tidak_mampus';
    protected $fillable = ['nama','ttl','jenis_kelamin','alamat','agama','status_perkawinan','pekerjaan','kewarganegaraan','nik'];
}
