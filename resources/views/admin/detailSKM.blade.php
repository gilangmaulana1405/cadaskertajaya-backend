 @extends('admin.layouts.main')

 @section('contentAdmin')

 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <div class="col-md-8 grid-margin stretch-card">
                 <div class="card mb-3" style="max-width: 540px;">
                     <div class="row g-0">
                         <div class="col-md-4">
                             <img src="{{ asset('assets/img/logo_karawang.png') }}" class="img-fluid rounded-start" alt="...">
                         </div>
                         <div class="col-md-8">
                             <div class="card-body">
                                 <h5 class="card-title">{{ $data->nama }}</h5>
                                 <p class="card-text">Seorang yang beralamat di {{ $data->alamat_ktp }} berumur {{ $data->umur }} tahun dan bekerja sebagai
                                     {{ $data->pekerjaan }} telah meninggal dunia pada hari {{$data->hari_kematian}}, tanggal {{ \Carbon\Carbon::parse($data->tanggal_kematian)->format('d F Y') }}, pada jam {{ $data->jam_kematian }}, di {{ $data->tempat_kematian }}.</p>

                                 <h5>Keterangan Data Diri Pelapor:</h5>
                                 <ul>
                                     <li>Nama : {{ $data->nama_pelapor }}</li>
                                     <li>NIK : {{ $data->nik_pelapor }}</li>
                                     <li> Umur : {{ $data->umur_pelapor }} tahun</li>
                                     <li> Pekerjaan : {{ $data->pekerjaan_pelapor }}</li>
                                     <li> Alamat : {{ $data->alamat_ktp_pelapor }}</li>
                                     </li>
                                     <li> Hubungan : {{ $data->status_hubungan }}</li>
                                 </ul>
                                 <p class="card-text"><small class="text-muted">Created at {{ $data->created_at->diffForHumans() }}</small></p>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 @endsection
