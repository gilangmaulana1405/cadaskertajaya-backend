 <form action="{{ route('penggunaan.index') }}" method="POST">
     @csrf
     <div class="form-group">
         <label for="nama">Nama:</label>
         <input type="text" name="nama" class="form-control" required>
     </div>
     <button type="submit" class="btn btn-primary">Simpan</button>
 </form>
