 @extends('admin.layouts.main')

 @section('contentAdmin')
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <div class="col-md-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <p class="card-title">Surat Keterangan Usaha</p>
                         <div class="row">
                             <div class="col-12">
                                 <div class="table-responsive">
                                     <table id="example" class="display expandable-table" style="width:100%">
                                         <thead>
                                             <tr>
                                                 <th>#</th>
                                                 <th>Tanggal</th>
                                                 <th>Nama</th>
                                                 <th>Jenis Kelamin</th>
                                                 <th>Action</th>
                                                 <th></th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach($dataSKU as $data)
                                             <tr>
                                                 <td>{{ $loop->iteration }}</td>
                                                 <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d F Y') }}</td>
                                                 <td>{{ $data->nama }}</td>
                                                 <td>{{ $data->jenis_kelamin }}</td>
                                                 <td>
                                                     <a href="/admin/sku/{{ $data->id }}" class="btn btn-info btn-rounded btn-fw">Detail</a>
                                                     <a href="" class="btn btn-warning btn-rounded btn-fw">Edit</a>
                                                     <a href="" class="btn btn-danger btn-rounded btn-fw">Delete</a>
                                                 </td>
                                             </tr>
                                             @endforeach
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- content-wrapper ends -->
     <!-- partial:../../partials/_footer.html -->
     <footer class="footer">
         <div class="d-sm-flex justify-content-center justify-content-sm-between">
             <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from
                 BootstrapDash. All rights reserved.</span>
             <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
         </div>
     </footer>
     <!-- partial -->
 </div>
 @endsection
