<?php
include '../config/header.php';
include '../config/navbar.php';
if (isset($_POST['jenis_css'])) {
    $jenis_css = $_POST['jenis_css'];
    $lokasi_css = $_POST['lokasi_css'];
    $perintah_tambah = "INSERT INTO css set jenis_css ='$jenis_css', lokasi_css='$lokasi_css'";
    $tambah_css = mysqli_query($koneksi, $perintah_tambah);
    if ($tambah_css) {
        echo "<script>document.location=\"menu.php\"</script>";
    }
}
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Base CSS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Config</a></li>
              <li class="breadcrumb-item active">Data CSS</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                  Tambah Data
                </button>

                
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>CSS</th>
                      <th>Lokasi</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  $sql = 'SELECT * FROM css';
                  $query = mysqli_query($koneksi, $sql);
                  while ($data = mysqli_fetch_array($query)) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['jenis_css'] ?></td>
                    <td><?= $data['lokasi_css'] ?></td>
                    <td><?= $data['date_create'] ?></td>
                  </tr>
                  <?php }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


      <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Database CSS</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body">
                <form action="" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jenis</label>
                      <input type="text" class="form-control" name="jenis_css" placeholder="Jenis CSS">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Lokasi</label>
                      <input type="text" class="form-control" name="lokasi_css" placeholder="Lokasi CSS">
                    </div>
                    
                  </div>
                  
              </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light" name="tambah_css">Save changes</button>
              </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<?php include '../config/footer.php';

?>
