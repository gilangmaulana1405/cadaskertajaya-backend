 <form action="{{ route('sku.create') }}" method="POST">
     @csrf
     <h3>Data Diri</h3>
     <div class="form-group">
         <label for="nama">Nama:</label>
         <input type="text" name="nama" class="form-control" required>
     </div>
     <div class="form-group">
         <label for="ttl">Tempat Tanggal Lahir:</label>
         <input type="text" name="ttl" class="form-control" required>
     </div>
     <div class="form-group">
         <label for="jenis_kelamin">Jenis Kelamin:</label>
         <select name="jenis_kelamin" id="">
             <option value="Laki-laki">Laki-laki</option>
             <option value="Perempuan">Perempuan</option>
         </select>

     </div>
     <div class="form-group">
         <label for="alamat">Alamat:</label>
         <input type="text" name="alamat" class="form-control" required>
     </div>
     <div class="form-group">
         <label for="agama">Agama:</label>
         <input type="text" name="agama" class="form-control" required>
     </div>
     <div class="form-group">
         <label for="status_perkawinan">Status Perkawinan:</label>
         <select name="status_perkawinan" id="">
             <option value="Belum Menikah">Belum Menikah</option>
             <option value="Menikah">Menikah</option>
             <option value="Cerai">Cerai</option>
         </select>
     </div>
     <div class="form-group">
         <label for="pekerjaan">Pekerjaan:</label>
         <input type="text" name="pekerjaan" class="form-control" required>
     </div>
     <div class="form-group">
         <label for="kewarganegaraan">Kewarganegaraan:</label>
         <input type="text" name="kewarganegaraan" class="form-control" required>
     </div>
     <div class="form-group">
         <label for="nik">NIK:</label>
         <input type="number" name="nik" class="form-control" required>
     </div>

     <h3>Data Usaha</h3>
     <div class="form-group">
         <label for="nama_usaha">Nama Usaha:</label>
         <input type="text" name="nama_usaha" class="form-control" required>
     </div>
     <div class="form-group">
         <label for="jenis_usaha">Jenis Usaha:</label>
         <input type="text" name="jenis_usaha" class="form-control" required>
     </div>
     <div class="form-group">
         <label for="no_induk_usaha">No Induk Usaha:</label>
         <input type="number" name="no_induk_usaha" class="form-control" required>
     </div>
     <div class="form-group">
         <label for="tahun_usaha">Tahun Usaha:</label>
         <input type="number" name="tahun_usaha" class="form-control" required>
     </div>



     <button type="submit" class="btn btn-primary">Simpan</button>
 </form>
