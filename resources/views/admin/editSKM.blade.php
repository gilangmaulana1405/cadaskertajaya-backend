 @extends('admin.layouts.main')

 @section('contentAdmin')
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
             <div class="col-md-8 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Form Edit Surat Keterangan Meninggal</h4>
                         <p class="card-description">
                             Yang bertanda tangan dibawah ini, menerangkan bahwa :
                         </p>
                         <form class="forms-sample" method="post" action="/admin/skm/{{ $data->id }}">
                             @method('PUT')
                             @csrf

                             <div class="form-group">
                                 <label for="inputNama">Nama Lengkap</label>
                                 <input type="text" class="form-control alphabet-input" name="nama" id="inputNama" value="{{ $data->nama }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputNik">NIK</label>
                                 <input type="text" class="form-control numeric-input nik" name="nik" value="{{ $data->nik }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputUmur">Umur</label>
                                 <input type="text" class="form-control numeric-input umur" name="umur" value="{{ $data->umur }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputPekerjaan">Pekerjaan</label>
                                 <input type="text" class="form-control alphabet-input" name="pekerjaan" id="inputPekerjaan" value="{{ $data->pekerjaan }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputAlamat">Alamat KTP</label>
                                 <input type="text" class="form-control" name="alamat_ktp" id="inputAlamat" value="{{ $data->alamat_ktp }}" required />
                             </div>

                             <p class="card-description">
                                 Telah meninggal dunia pada :
                             </p>

                             <div class="form-group">
                                 <label for="inputHari">Hari</label>
                                 <select class="form-control" name="hari_kematian">
                                     <option value="Senin" {{ old('hari_kematian',$data->hari_kematian) == 'Senin' ? 'selected' : '' }}>Senin</option>
                                     <option value="Selasa" {{ old('hari_kematian',$data->hari_kematian) == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                     <option value="Rabu" {{ old('hari_kematian',$data->hari_kematian) == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                     <option value="Kamis" {{ old('hari_kematian',$data->hari_kematian) == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                     <option value="Jumat" {{ old('hari_kematian',$data->hari_kematian) == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                     <option value="Sabtu" {{ old('hari_kematian',$data->hari_kematian) == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                     <option value="Minggu" {{ old('hari_kematian',$data->hari_kematian) == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="inputTanggal">Tanggal</label>
                                 <input type="date" class="form-control" name="tanggal_kematian" id="inputTanggal" value="{{ $data->tanggal_kematian }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputPukul">Jam</label>
                                 <select class="form-control" name="jam_kematian">
                                     <option value="01:00" {{ old('jam_kematian',$data->jam_kematian) == '01:00' ? 'selected' : '' }}>01:00</option>
                                     <option value="02:00" {{ old('jam_kematian',$data->jam_kematian) == '02:00' ? 'selected' : '' }}>02:00</option>
                                     <option value="03:00" {{ old('jam_kematian',$data->jam_kematian) == '03:00' ? 'selected' : '' }}>03:00</option>
                                     <option value="04:00" {{ old('jam_kematian',$data->jam_kematian) == '04:00' ? 'selected' : '' }}>04:00</option>
                                     <option value="05:00" {{ old('jam_kematian',$data->jam_kematian) == '05:00' ? 'selected' : '' }}>05:00</option>
                                     <option value="06:00" {{ old('jam_kematian',$data->jam_kematian) == '06:00' ? 'selected' : '' }}>06:00</option>
                                     <option value="07:00" {{ old('jam_kematian',$data->jam_kematian) == '07:00' ? 'selected' : '' }}>07:00</option>
                                     <option value="08:00" {{ old('jam_kematian',$data->jam_kematian) == '08:00' ? 'selected' : '' }}>08:00</option>
                                     <option value="09:00" {{ old('jam_kematian',$data->jam_kematian) == '09:00' ? 'selected' : '' }}>09:00</option>
                                     <option value="10:00" {{ old('jam_kematian',$data->jam_kematian) == '10:00' ? 'selected' : '' }}>10:00</option>
                                     <option value="11:00" {{ old('jam_kematian',$data->jam_kematian) == '11:00' ? 'selected' : '' }}>11:00</option>
                                     <option value="12:00" {{ old('jam_kematian',$data->jam_kematian) == '12:00' ? 'selected' : '' }}>12:00</option>
                                     <option value="13:00" {{ old('jam_kematian',$data->jam_kematian) == '13:00' ? 'selected' : '' }}>13:00</option>
                                     <option value="14:00" {{ old('jam_kematian',$data->jam_kematian) == '14:00' ? 'selected' : '' }}>14:00</option>
                                     <option value="15:00" {{ old('jam_kematian',$data->jam_kematian) == '15:00' ? 'selected' : '' }}>15:00</option>
                                     <option value="16:00" {{ old('jam_kematian',$data->jam_kematian) == '16:00' ? 'selected' : '' }}>16:00</option>
                                     <option value="17:00" {{ old('jam_kematian',$data->jam_kematian) == '17:00' ? 'selected' : '' }}>17:00</option>
                                     <option value="18:00" {{ old('jam_kematian',$data->jam_kematian) == '18:00' ? 'selected' : '' }}>18:00</option>
                                     <option value="19:00" {{ old('jam_kematian',$data->jam_kematian) == '19:00' ? 'selected' : '' }}>19:00</option>
                                     <option value="20:00" {{ old('jam_kematian',$data->jam_kematian) == '20:00' ? 'selected' : '' }}>20:00</option>
                                     <option value="21:00" {{ old('jam_kematian',$data->jam_kematian) == '21:00' ? 'selected' : '' }}>21:00</option>
                                     <option value="22:00" {{ old('jam_kematian',$data->jam_kematian) == '22:00' ? 'selected' : '' }}>22:00</option>
                                     <option value="23:00" {{ old('jam_kematian',$data->jam_kematian) == '23:00' ? 'selected' : '' }}>23:00</option>
                                     <option value="24:00" {{ old('jam_kematian',$data->jam_kematian) == '24:00' ? 'selected' : '' }}>24:00</option>
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label for="inputTempatkematian">Tempat Kematian</label>
                                 <input type="text" class="form-control" name="tempat_kematian" id="inputTempatkematian" value="{{ $data->tempat_kematian }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputPenyebabkematian">Penyebab Kematian</label>
                                 <input type="text" class="form-control" name="penyebab_kematian" id="inputPenyebabkematian" value="{{ $data->penyebab_kematian }}" required />
                             </div>

                             <p class="card-description">
                                 Surat keterangan ini dibuat berdasarkan Keterangan pelapor :
                             </p>

                             <div class="form-group">
                                 <label for="inputNama">Nama Lengkap</label>
                                 <input type="text" class="form-control alphabet-input" name="nama_pelapor" id="inputNama" value="{{ $data->nama_pelapor }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputNik">NIK</label>
                                 <input type="text" class="form-control nik" name="nik_pelapor" value="{{ $data->nik_pelapor }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputUmur">Umur</label>
                                 <input type="text" class="form-control numeric-input umur" name="umur_pelapor" value="{{ $data->umur_pelapor }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputPekerjaan">Pekerjaan</label>
                                 <input type="text" class="form-control alphabet-input" id="inputPekerjaan" name="pekerjaan_pelapor" value="{{ $data->pekerjaan_pelapor }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputAlamat">Alamat</label>
                                 <input type="text" class="form-control" id="inputAlamat" name="alamat_ktp_pelapor" value="{{ $data->alamat_ktp_pelapor }}" required />
                             </div>
                             <div class="form-group">
                                 <label for="inputHubungan">Hubungan Pelapor Dengan Yang Meninggal Dunia</label>
                                 <input type="text" class="form-control" name="status_hubungan" id="inputHubungan" value="{{ $data->status_hubungan }}" required />
                             </div>

                             <button type="submit" class="btn btn-primary mr-2">Update</button>
                             <a href="/admin/skm" class="btn btn-light">Cancel</a>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 @endsection
