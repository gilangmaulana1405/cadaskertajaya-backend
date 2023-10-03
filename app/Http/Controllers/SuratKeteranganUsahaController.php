<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SuratKeteranganUsaha;


class SuratKeteranganUsahaController extends Controller
{


    public function index(){
        return view('index');
    }

    public function create(Request $request)
    {
        $data = new SuratKeteranganUsaha;
        $data->id = $request->input('id');
        $data->nama =  $request->input('nama');
        $data->ttl =  $request->input('ttl');
        $data->jenis_kelamin =  $request->input('jenis_kelamin');
        $data->alamat =  $request->input('alamat');
        $data->agama =  $request->input('agama');
        $data->status_perkawinan =  $request->input('status_perkawinan');
        $data->pekerjaan =  $request->input('pekerjaan');
        $data->kewarganegaraan =  $request->input('kewarganegaraan');
        $data->nik =  $request->input('nik');
        $data->nama_usaha =  $request->input('nama_usaha');
        $data->jenis_usaha =  $request->input('jenis_usaha');
        $data->tahun_usaha =  $request->input('tahun_usaha');
        $data->lokasi_usaha =  $request->input('lokasi_usaha');
        $data->save();

        $nama =  Str::title($data->nama);
        $ttl =  Str::title($data->ttl);
        $alamat =  Str::title($data->alamat);
        $pekerjaan =  Str::title($data->pekerjaan);
        $nama_usaha =  Str::title($data->nama_usaha);
        $jenis_usaha =  Str::title($data->jenis_usaha);
        $lokasi_usaha =  Str::title($data->lokasi_usaha);


        // format tgl
        $date = Carbon::now()->locale('id_ID');
        $dateString = $date->isoFormat('D MMMM YYYY');

        // membuat nomor registrasi untuk nama file
        $registrationNumber = rand(1000, 999999);

        // membuat penamaan file agar tidak menimpa
        $fileName = $registrationNumber . '_' . 'Surat Keterangan Usaha' . '_' . $nama . '_' . $dateString . '.docx';

        // membuat 3 angka pada nomor surat secara berurutan
        $id = SuratKeteranganUsaha::find($data->id);

        $nomorSurat = str_pad($id->id, 3, '0', STR_PAD_LEFT);

        // membuat format nomor surat
        $no_surat = '510' . '/' . $nomorSurat . '/' . 'IX-2023' . '/' . 'Ds.';

        // Path ke templat Word
        $templatePath = public_path('SuratKeteranganUsaha.docx');

        // Path untuk menyimpan file hasil
        $outputPath = public_path($fileName);

        copy($templatePath, $outputPath);

        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor($outputPath);

        
        $templateData = [
            'no_surat' => $no_surat,
            'nama' => $nama,
            'ttl' => $ttl,
            'jenis_kelamin' => $data->jenis_kelamin,
            'alamat' => $alamat,
            'agama' => $data->agama,
            'status_perkawinan' => $data->status_perkawinan,
            'pekerjaan' => $pekerjaan,
            'kewarganegaraan' => $data->kewarganegaraan,
            'nik' => $data->nik,
            'tahun_usaha' => $data->tahun_usaha,
            'nama_usaha' => $nama_usaha,
            'jenis_usaha' => $jenis_usaha,
            'lokasi_usaha' => $lokasi_usaha,
            'created_at' => $dateString
        ];

        foreach ($templateData as $key => $value) {
            $phpWord->setValue($key, $value);
        }

        $phpWord->saveAs($outputPath);
        
        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
