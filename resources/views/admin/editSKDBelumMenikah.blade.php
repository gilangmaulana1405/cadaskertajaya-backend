 @extends('admin.layouts.main')

 @section('contentAdmin')
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <div class="col-md-8 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Form Edit SKD Belum Menikah</h4>
                         <p class="card-description">
                             Data Diri
                         </p>
                         <form class="forms-sample" method="post" action="/admin/skdBelumMenikah/{{ $data->id }}">
                             @method('PUT')
                             @csrf
                             <div class="form-group">
                                 <label for="inputNama">Nama</label>
                                 <input type="text" class="form-control alphabet-input" name="nama" id="inputNama" value="{{ $data->nama }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputTtl">Tempat/Tanggal Lahir</label>
                                 <input type="text" class="form-control" name="ttl" id="inputTtl" value="{{ $data->ttl }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputJeniskelamin">Jenis Kelamin</label>
                                 <select class="form-control" name="jenis_kelamin" id="inputJeniskelamin">
                                     <option value="Laki-laki" {{ old('jenis_kelamin',$data->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                     <option value="Perempuan" {{ old('jenis_kelamin',$data->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="inputAlamat">Alamat</label>
                                 <input type="text" class="form-control" name="alamat" id="inputAlamat" value="{{ $data->alamat }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputAgama">Agama</label>
                                 <select class="form-control" name="agama">
                                     <option value="Islam" {{ old('agama',$data->agama) == 'Islam' ? 'selected' : '' }}>Islam</option>
                                     <option value="Kristen" {{ old('agama',$data->agama) == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                     <option value="Katholik" {{ old('agama',$data->agama) == 'Katholik' ? 'selected' : '' }}>Katholik</option>
                                     <option value="Hindu" {{ old('agama',$data->agama) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                     <option value="Buddha" {{ old('agama',$data->agama) == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                     <option value="Konghucu" {{ old('agama',$data->agama) == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="inputStatusperkawinan">Status Perkawinan</label>
                                 <select class="form-control" name="status_perkawinan">
                                     <option value="Belum Menikah" {{ old('status_perkawinan',$data->status_perkawinan) == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                     <option value="Menikah" {{ old('status_perkawinan',$data->status_perkawinan) == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                     <option value="Cerai" {{ old('status_perkawinan',$data->status_perkawinan) == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="inputPekerjaan">Pekerjaan</label>
                                 <input type="text" class="form-control alphabet-input" name="pekerjaan" id="inputPekerjaan" value="{{ $data->pekerjaan }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputKewarganegaraan">Kewarganegaraan</label>
                                 <select class="form-control" name="kewarganegaraan">
                                     <option value="WNI" {{ old('kewarganegaraan',$data->kewarganegaraan) == 'WNI' ? 'selected' : '' }}>WNI</option>
                                     <option value="WNA" {{ old('kewarganegaraan',$data->kewarganegaraan) == 'WNA' ? 'selected' : '' }}>WNA</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="inputNik">NIK</label>
                                 <input type="text" class="form-control numeric-input nik" name="nik" value="{{ $data->nik }}" required />
                             </div>
                             <button type="submit" class="btn btn-primary mr-2">Update</button>
                             <a href="/admin/skdBelumMenikah" class="btn btn-light">Cancel</a>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 @endsection
