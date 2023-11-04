<?php

namespace App\Http\Controllers;


use TCPDF;
use Mpdf\Mpdf;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\SuratTugas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use PhpOffice\PhpWord\TemplateProcessor;


class SuratTugasController extends Controller
{

    // protected $pdf;

    // public function __construct(PDF $pdf)
    // {
    //     $this->pdf = $pdf;
    // }

    public function index()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $data = new SuratTugas();
        $data->id = $request->input('id');
        $data->nama_mhs =  $request->input('nama_mhs');
        $data->npm =  $request->input('npm');
        $data->prodi =  $request->input('prodi');
        $data->nama_dospem =  $request->input('nama_dospem');
        $data->judul_skripsi =  $request->input('judul_skripsi');
        $data->save();

        $nama_mhs =  Str::title($data->nama_mhs);
        $prodi =  Str::title($data->prodi);
        $nama_dospem =  Str::title($data->nama_dospem);
        $judul_skripsi =  Str::title($data->judul_skripsi);

        // ==========================================================

        $fileName = 'Surat Tugas' . '_' . $data->id . '_' . $nama_mhs . '_' . $data->npm . '.pdf';

        $data = [
            'nama_mhs' => $nama_mhs,
            'npm' => $data->npm,
            'prodi' => $prodi,
            'nama_dospem' => $nama_dospem,
            'judul_skripsi' => $judul_skripsi,
        ];

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('template_surat', ['data' => $data]);

        return $pdf->stream($fileName);
      
    }
}
