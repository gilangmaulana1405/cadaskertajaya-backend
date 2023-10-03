<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\SKDDomisili;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SKDDomisiliController extends Controller
{
    public function index() {
        return view('index');
    }

    public function create(Request $request)
    {
        $data = new SKDDomisili();
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
        $data->status_kependudukan =  $request->input('status_kependudukan');
        $data->save();

        $nama =  Str::title($data->nama);
        $ttl =  Str::title($data->ttl);
        $alamat =  Str::title($data->alamat);
        $pekerjaan =  Str::title($data->pekerjaan);


        // format tgl
        $date = Carbon::now()->locale('id_ID');
        $dateString = $date->isoFormat('D MMMM YYYY');

        // membuat nomor registrasi untuk nama file
        $registrationNumber = rand(1000, 999999);

        // membuat penamaan file agar tidak menimpa
        $fileName = $registrationNumber . '_' . 'SKD Domisili' . '_' . $nama . '_' . $dateString . '.docx';

        // membuat 3 angka pada nomor surat secara berurutan
        $id = SKDDomisili::find($data->id);

        $nomorSurat = str_pad($id->id, 3, '0', STR_PAD_LEFT);

        // membuat format nomor surat
        $no_surat1 = '470' . '/' . $nomorSurat . '/' . 'VII-2023' . '/' . 'Ds.';
        $no_surat2 = '470' . '/' . $nomorSurat . '/' . 'IX-2023' . '/' . 'Ds.';

        // Path ke templat Word
        $templatePath = public_path('SKDDomisili.docx');

        // Path untuk menyimpan file hasil
        $outputPath = public_path($fileName);

        copy($templatePath, $outputPath);

        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor($outputPath);

        $templateData = [
            'no_surat1' => $no_surat1,
            'no_surat2' => $no_surat2,
            'nama' => $nama,
            'ttl' => $ttl,
            'jenis_kelamin' => $data->jenis_kelamin,
            'alamat' => $alamat,
            'agama' => $data->agama,
            'status_perkawinan' => $data->status_perkawinan,
            'pekerjaan' => $pekerjaan,
            'kewarganegaraan' => $data->kewarganegaraan,
            'nik' => $data->nik,
            'status_kependudukan' => $data->status_kependudukan,
            'created_at' => $dateString
        ];

        foreach ($templateData as $key => $value) {
            $phpWord->setValue($key, $value);
        }

        $phpWord->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }

}
