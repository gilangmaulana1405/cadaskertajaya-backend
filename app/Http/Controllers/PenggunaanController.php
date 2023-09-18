<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PenggunaanController extends Controller
{

    public function index(Request $request)
    {
        $nama = $request->nama;

        // versi 1
        // membuat tanggal untuk nama file
        $date = Carbon::createFromTimestamp(time())->format('d-m-Y');

        // membuat nomor registrasi untuk nama file
        $registrationNumber = rand(1000, 999999);

        // membuat penamaan file agar tidak menimpa
        $fileName = $registrationNumber . '_' . 'Surat' . '_' . $nama . '_' . $date . '.docx';

        // membuat 3 angka pada nomor surat secara berurutan
        $nomorSurat = $request->session()->get('noSurat', 1);
        $nomorSuratString = str_pad($nomorSurat, 3, '0', STR_PAD_LEFT);
        $request->session()->put('noSurat', $nomorSurat + 1);

        // membuat format nomor surat
        $noSurat = 'ABC' . '/' . $registrationNumber . '/' . $nomorSuratString;

        // Path ke templat Word
        $templatePath = public_path('TemplateSurat.docx');

        // Path untuk menyimpan file hasil
        $outputPath = public_path($fileName);

        copy($templatePath, $outputPath);

        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor($outputPath);

        $templateData = [
            'nama' => $nama,
            'noSurat' => $noSurat,
        ];

        foreach ($templateData as $key => $value) {
            $phpWord->setValue($key, $value);
        }

        $phpWord->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
