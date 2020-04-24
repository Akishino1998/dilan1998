<?php
  include'koneksi.php';
  include'header.php';

?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Kondisi</h6>
            </div>
            <div class="card-body">
            <form>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Kondisi</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Kondisi">
              </div>                                         
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>              
            </div>
          </div>
        </div>

<?php
  include 'footer.php';
?>