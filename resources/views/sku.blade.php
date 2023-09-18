 <form action="{{ route('sku.create') }}" method="POST">
     @csrf
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
         <input type="text" name="jenis_kelamin" class="form-control" required>
     </div>
     <button type="submit" class="btn btn-primary">Simpan</button>
 </form>
