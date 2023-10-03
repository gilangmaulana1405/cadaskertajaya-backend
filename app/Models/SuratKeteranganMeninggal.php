<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganMeninggal extends Model
{
    use HasFactory;

    protected $table = 'surat_keterangan_meninggals';
    protected $fillable = ['nama','nik','umur','pekerjaan','alamat_ktp','hari_kematian','tanggal_kematian','jam_kematian','tempat_kematian','penyebab_kematian','nama_pelapor','nik_pelapor','umur_pelapor','pekerjaan_pelapor','alamat_ktp_pelapor', 'status_hubungan'];
}
