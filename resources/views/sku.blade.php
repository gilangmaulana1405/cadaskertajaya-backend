 <form action="{{ route('sku.create') }}" method="POST">
     @csrf
     <h3>Data Diri</h3>
     <div class="form-group">
         <label for="nama">Nama:</label>
         <input type="text" name="nama" class="form-control" required>
     </div>
     <div class="form-group">
         <label for="ttl">Tempat Tanggal Lahir:</label>
         <input type="text" name="ttl" class="form-control" placeholder="cth: Karawang, 01 Januari 2002" required>
     </div>
     <div class="form-group">
         <label for="jenis_kelamin">Jenis Kelamin:</label>
         <select name="jenis_kelamin" id="" required>
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
         <select name="status_perkawinan" id="" required>
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
         <input type="text" class="numeric-input" name="nik" class="form-control" required>
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
         <label for="tahun_usaha">Tahun Usaha:</label>
         <input type="text" class="numeric-input" name="tahun_usaha" class="form-control" required>
     </div>

     <button type="submit" class="btn btn-primary">Simpan</button>
 </form>

 <script>
     document.addEventListener("DOMContentLoaded", function () {
         let inputFields = document.querySelectorAll('.numeric-input');

         inputFields.forEach(function (input) {
             input.addEventListener("input", function () {
                 // Hapus karakter selain angka
                 this.value = this.value.replace(/\D/g, '');
             });
         });
     });

 </script>
