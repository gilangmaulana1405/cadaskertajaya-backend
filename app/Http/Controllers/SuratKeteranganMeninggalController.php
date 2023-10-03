<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SuratKeteranganMeninggal;

class SuratKeteranganMeninggalController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $data = new SuratKeteranganMeninggal();

        // data diri
        $data->id = $request->input('id');
        $data->nama =  $request->input('nama');
        $data->nik =  $request->input('nik');
        $data->umur =  $request->input('umur');
        $data->pekerjaan =  $request->input('pekerjaan');
        $data->alamat_ktp =  $request->input('alamat_ktp');

        // telah meninggal dunia pada
        $data->hari_kematian =  $request->input('hari_kematian');
        $data->tanggal_kematian =  $request->input('tanggal_kematian');
        $data->jam_kematian =  $request->input('jam_kematian');
        $data->tempat_kematian =  $request->input('tempat_kematian');
        $data->penyebab_kematian =  $request->input('penyebab_kematian');
        
        // pelapor
        $data->nama_pelapor =  $request->input('nama_pelapor');
        $data->nik_pelapor =  $request->input('nik_pelapor');
        $data->umur_pelapor =  $request->input('umur_pelapor');
        $data->pekerjaan_pelapor =  $request->input('pekerjaan_pelapor');
        $data->alamat_ktp_pelapor =  $request->input('alamat_ktp_pelapor');
        $data->status_hubungan =  $request->input('status_hubungan');

        $data->save();

        $nama =  Str::title($data->nama);
        $nama_pelapor =  Str::title($data->nama_pelapor);
        $pekerjaan =  Str::title($data->pekerjaan);
        $pekerjaan_pelapor =  Str::title($data->pekerjaan_pelapor);
        $alamat_ktp =  Str::title($data->alamat_ktp);
        $alamat_ktp_pelapor =  Str::title($data->alamat_ktp_pelapor);


        // format tgl
        $date = Carbon::now()->locale('id_ID');
        $dateString = $date->isoFormat('D MMMM YYYY');

        // membuat nomor registrasi untuk nama file
        $registrationNumber = rand(1000, 999999);

        // membuat penamaan file agar tidak menimpa
        $fileName = $registrationNumber . '_' . 'Surat Keterangan Meninggal' . '_' . $nama . '_' . $dateString . '.docx';

        // membuat 3 angka pada nomor surat secara berurutan
        $id = SuratKeteranganMeninggal::find($data->id);

        $nomorSurat = str_pad($id->id, 2, '0', STR_PAD_LEFT);

        // membuat format nomor surat
        $no_surat = '474.3' . '/' . $nomorSurat . '/' . 'V-2023' . '/' . 'Ds.';

        // Path ke templat Word
        $templatePath = public_path('SuratKeteranganMeninggal.docx');

        // Path untuk menyimpan file hasil
        $outputPath = public_path($fileName);

        copy($templatePath, $outputPath);

        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor($outputPath);

        $templateData = [
            'no_surat' => $no_surat,
            'nama' => $nama,
            'nik' => $data->nik,
            'umur' => $data->umur,
            'pekerjaan' => $pekerjaan,
            'alamat_ktp' => $alamat_ktp,

            'hari_kematian' => $data->hari_kematian,
            'tanggal_kematian' => $data->tanggal_kematian,
            'jam_kematian' => $data->jam_kematian,
            'tempat_kematian' => $data->tempat_kematian,
            'penyebab_kematian' => $data->penyebab_kematian,

            'nama_pelapor' => $nama_pelapor,
            'nik_pelapor' => $data->nik_pelapor,
            'umur_pelapor' => $data->umur_pelapor,
            'pekerjaan_pelapor' => $pekerjaan_pelapor,
            'alamat_ktp_pelapor' => $alamat_ktp_pelapor,
            'status_hubungan' => $data->status_hubungan,
            
            'created_at' => $dateString
        ];

        foreach ($templateData as $key => $value) {
            $phpWord->setValue($key, $value);
        }

        $phpWord->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
