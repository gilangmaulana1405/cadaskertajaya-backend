<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKDBelumMenikah extends Model
{
    use HasFactory;


    protected $table = 's_k_d_belum_menikahs';
    protected $fillable = ['nama','ttl','jenis_kelamin','alamat','agama','status_perkawinan','pekerjaan','kewarganegaraan','nik'];

    
}
