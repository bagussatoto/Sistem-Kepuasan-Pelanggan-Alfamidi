<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_template/_head.php") ?>
</head>

<body id="page-top">

    <?php $this->load->view("_template/_navbar.php") ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("_template/_sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table </div>
          <div class="card-body">
          <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Usia</th>
                    <th>Pekerjaan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Usia</th>
                    <th>Pekerjaan</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php foreach ($responden as $respon): ?>
                  <tr>
                    <td><?php echo $respon->nama ?></td>
                    <td><?php echo $respon->email ?></td>
                    <td><?php echo $respon->jenis_kelamin ?></td>
                    <td><?php echo $respon->usia ?></td>
                    <td><?php echo $respon->pekerjaan ?></td>
                    <td>
                        <a href ="<?php echo site_url('tambahdata/editdata/'.$respon->id)?>"
                            class = "btn btn-small"><i class= "fas fa-edit"></i>
                            edit
                        </a>
                        <a onclick="deleteConfirm('<?php echo site_url('tambahdata/hapus/'.$respon->id) ?>')"
                        href = "#" class ="btn btn-small text-danger"><i class="fas fa-trash"></i>
                            hapus
                        </a>
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php $this->load->view("_template/_footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view("_template/_modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("_template/_js.php") ?>

</body>

</html>
