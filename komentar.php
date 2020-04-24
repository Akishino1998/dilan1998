<?php
  include'koneksi.php';
  include'header.php';
?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Komentar</h6>
              <button data-toggle="modal" data-target="#exampleModalCenter" type="button" class="btn btn-danger"><i class="fa fa-print" aria-hidden="true"></i></button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Komentar</th>
                      <th>Nama Traffic Light</th>                      
                      <th>Nama User</th>
                      <th>Action</th>                                                                  
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  include 'koneksi.php'; 
                  $query = "SELECT * FROM tb_komentar";
                  $hasil = mysqli_query($link, $query);
                  $i=1;  
                  if (mysqli_num_rows($hasil) > 0) {
                    while ($data = mysqli_fetch_assoc($hasil)){
                  ?>
                    <tr>
                      <td><?php echo $i++ ?> </td>
                      <td><?php echo $data['komentar']; ?> </td>
                      <td><?php echo $data['nama_trafficlight'];?> </td>
                      <td><?php echo $data['nama_user'];?> </td>                 
                      <td>
                        <!-- buat buttonnya seperti ini, tapi yang perlu diingatkan ubah idnya ya (yang id admin, nyesuikan dimana letak pembuatannya) -->
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
<?php 
  include 'footer.php';
?>