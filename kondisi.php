<?php
  include'koneksi.php';
  include'header.php';
?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Kondisi</h6>              <button data-toggle="modal" data-target="#exampleModalCenter" type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button><button data-toggle="modal" data-target="#exampleModalCenter" type="button" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i></button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Kondisi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  include 'koneksi.php'; 
                  $query = "SELECT * FROM tb_kondisi";
                  $hasil = mysqli_query($link, $query);
                  $i=1;  
                  if (mysqli_num_rows($hasil) > 0) {
                    while ($data = mysqli_fetch_assoc($hasil)){
                  ?>
                    <tr>
                      <td><?php echo $i++ ?> </td>
                      <td><?php echo $data['nama_kondisi']; ?> </td>
                      <td>
                        <a href="kondisi-edit.php?id=<?php echo $data['id_kondisi'] ?>" ><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        <a href="kondisi-hapus.php?id=<?php echo $data['id_kondisi'] ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Form Kondisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="kondisi-insert.php" method="post">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kondisi</label>
                    <input name="nama_kondisi" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Kondisi">
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>               </form>
              </div>
            </div>
          </div>
        </div>        
<?php 
  include 'footer.php';
?>
