<?php
  include'koneksi.php';
  include'header.php';
  $id_kondisi = $_GET['id']; 
  include 'koneksi.php';
          $query = "SELECT * FROM tb_kondisi WHERE id_kondisi='".$id_kondisi."'";
          $hasil = mysqli_query($link, $query);
          $i=1;  
          if (mysqli_num_rows($hasil) > 0) {
            while ($data = mysqli_fetch_assoc($hasil)){
          ?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Kondisi</h6>
            </div>
            <div class="card-body">
            <form action="kondisi-update.php" method="POST"> 
              <div class="form-group">
                <input type="text" name="id_kondisi" value="<?php echo $id_kondisi; ?>" hidden>
                <label for="exampleInputPassword1">Nama Kondisi</label>
                <input type="text" name="nama_kondisi" class="form-control" id="exampleInputPassword1" placeholder="Nama Kondisi" value="<?php echo $data['nama_kondisi']; ?>">
              </div>                                         
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>              
            </div>
          </div>
        </div>
        <?php 
            }
          }
        ?>   

<?php
  include 'footer.php';
?>