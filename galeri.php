<?php
  include'koneksi.php';
  include'header.php';
?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Galeri</h6>
              <button data-toggle="modal" data-target="#exampleModalCenter" type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button><button data-toggle="modal" data-target="#exampleModalCenter" type="button" class="btn btn-danger"><i class="fa fa-print" aria-hidden="true"></i></button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>Keterangan</th>
                      <th>Nama Traffic Light</th>
                      <th>Action</th>                                                                  
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  include 'koneksi.php'; 
                  $query = "SELECT * FROM tb_galeri";
                  $hasil = mysqli_query($link, $query);
                  $i=1;  
                  if (mysqli_num_rows($hasil) > 0) {
                    while ($data = mysqli_fetch_assoc($hasil)){
                  ?>
                    <tr>
                      <td><?php echo $i++ ?> </td>
                      <td><?php echo $data['gambar']; ?> </td>
                      <td><?php echo $data['keterangan'];?> </td>
                      <td><?php echo $data['namatrafficlight'];?> </td>                 
                      <td>
                        <!-- buat buttonnya seperti ini, tapi yang perlu diingatkan ubah idnya ya (yang id admin, nyesuikan dimana letak pembuatannya) -->
                        <a href="admin-edit.php?id=<?php echo $data['id_admin'] ?>" ><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                        <a href="admin-hapus.php?id=<?php echo $data['id_admin'] ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                      </td>                      
                    </tr>
                  <?php 
                  }

                  }
                  ?>                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="galeri-insert.php" method="post">
                 <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Gambar</label>
                      <input name= "gambar" type="text" class="form-control" id="exampleInputPassword1" placeholder="Gambar">
                    </div>              
                    <div class="form-group">
                      <label for="exampleInputPassword1">Keterangan</label>
                      <input name= "keterangan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Keterangan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Traffic Light</label>
                      <input name= "namatrafficlight" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Traffic Light">
                    </div>                                                                                                                              
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>        
<?php 
  include 'footer.php';
?>