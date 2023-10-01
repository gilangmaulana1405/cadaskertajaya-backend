<?php

namespace App\Http\Controllers;

use App\Models\SKDBelumMenikah;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SKDBelumMenikahController extends Controller
{
    public function index(){
        return view('index');
    }

    public function create(Request $request)
    {
        $data = new SKDBelumMenikah();
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
        $data->save();


        // format tgl
        $dateString = Carbon::now('Asia/Jakarta')->isoFormat('D MMM Y');

        // membuat nomor registrasi untuk nama file
        $registrationNumber = rand(1000, 999999);

        // membuat penamaan file agar tidak menimpa
        $fileName = $registrationNumber . '_' . 'SKD Belum Menikah' . '_' . $data->nama . '_' . $dateString . '.docx';

        // membuat 3 angka pada nomor surat secara berurutan
        $id = SKDBelumMenikah::find($data->id);

        $nomorSurat = str_pad($id->id, 3, '0', STR_PAD_LEFT);

        // membuat format nomor surat
        $no_surat = '470' . '/' . $nomorSurat . '/' . 'IX-2023' . '/' . 'Ds.';

        // Path ke templat Word
        $templatePath = public_path('SKDBelumMenikah.docx');

        // Path untuk menyimpan file hasil
        $outputPath = public_path($fileName);

        copy($templatePath, $outputPath);

        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor($outputPath);

        $templateData = [
            'no_surat' => $no_surat,
            'nama' => $data->nama,
            'ttl' => $data->ttl,
            'jenis_kelamin' => $data->jenis_kelamin,
            'alamat' => $data->alamat,
            'agama' => $data->agama,
            'status_perkawinan' => $data->status_perkawinan,
            'pekerjaan' => $data->pekerjaan,
            'kewarganegaraan' => $data->kewarganegaraan,
            'nik' => $data->nik,
            'created_at' => $dateString
        ];

        foreach ($templateData as $key => $value) {
            $phpWord->setValue($key, $value);
        }

        $phpWord->saveAs($outputPath);
        
        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
