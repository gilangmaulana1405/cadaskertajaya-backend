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
                                 <p class="card-text">Seorang {{ $data->jenis_kelamin }} yang lahir pada tanggal
                                     {{ $data->ttl }} beralamat di {{ $data->alamat }}, memeluk agama {{ $data->agama }}
                                     dengan status perkawinan {{ $data->status_perkawinan }} dan bekerja sebagai
                                     {{ $data->pekerjaan }} .</p>
                                 <h5>Data Usaha:</h5>
                                 <ul>
                                     <li>Nama Usaha : {{ $data->nama_usaha }}</li>
                                     <li>Jenis Usaha : {{ $data->jenis_usaha }}</li>
                                     <li>Lokasi :{{ $data->lokasi_usaha }}</li>
                                     <li> Tahun :{{ $data->tahun_usaha }}</li>
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
