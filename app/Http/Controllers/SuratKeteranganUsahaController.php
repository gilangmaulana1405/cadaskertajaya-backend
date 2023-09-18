<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class SuratKeteranganUsahaController extends Controller
{
    public function create(Request $request)
    {
        // field input data
        $nama = $request->nama;
        $ttl = $request->ttl;
        $jenis_kelamin = $request->jenis_kelamin;

        // format tgl
        $date = Carbon::createFromTimestamp(time())->format('d-m-Y');

        // membuat nomor registrasi untuk nama file
        $registrationNumber = rand(1000, 999999);

        // membuat penamaan file agar tidak menimpa
        $fileName = $registrationNumber . '_' . 'Surat Keterangan Usaha' . '_' . $nama . '_' . $date . '.docx';

        // membuat 3 angka pada nomor surat secara berurutan
        $nomorSurat = $request->session()->get('noSurat', 1);
        $nomorSuratString = str_pad($nomorSurat, 3, '0', STR_PAD_LEFT);
        $request->session()->put('noSurat', $nomorSurat + 1);

        // membuat format nomor surat
        $no_surat = $nomorSuratString . '/ ' .  preg_replace('/\s+/', '  ', '') . ' /' . 'IX-2023' . '/' . 'Ds.';

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
            'jenis_kelamin' => $jenis_kelamin,
        ];

        foreach ($templateData as $key => $value) {
            $phpWord->setValue($key, $value);
        }

        $phpWord->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
