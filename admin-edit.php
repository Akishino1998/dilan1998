<?php
  include'koneksi.php';
  include'header.php';
// Disini kita udah kirim id adminnya kan, sekarang kita ambil id adminnya
$id_admin = $_GET['id']; 
// id disitu nyesuaikan dengan link yang dikirim
// contoh admin-edit.php?id=1
// kan disitu setelah tanda tanya ada id, itu dia yang kita kirim

          include 'koneksi.php'; 
          // ini kita querykan biar yang tampil id admin nomor 1 aja, jadi di where where
          $query = "SELECT * FROM tb_admin WHERE id_admin='".$id_admin."'";
          $hasil = mysqli_query($link, $query);
          $i=1;  
          if (mysqli_num_rows($hasil) > 0) {
            while ($data = mysqli_fetch_assoc($hasil)){
          ?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
            </div>
            <div class="card-body">
            <form action="admin-update.php" method="POST">
              <div class="form-group">
                <!-- ini janga sampe lupa, bikin tempat id nya di hidden juga. Karena dengan ini kita pasti nemukan 1 data aja di database karena dia PK -->
                <input type="text" name="id_admin" value="<?php echo $id_admin; ?>" hidden>
                <label for="exampleInputPassword1">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama" value="<?php echo $data['nama']; ?>">
              </div> 
              <div class="form-group">
                <label for="exampleInputPassword1">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username"value="<?php echo $data['username']; ?>">
              </div>                            
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"value="<?php echo $data['password']; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Foto</label>
                <input type="text" name="foto" class="form-control" id="exampleInputPassword1" placeholder="Password"value="<?php echo $data['#']; ?>">
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