<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("_template/_head.php") ?>
</head>

<body id="page-top">

  <!-- navbar -->
  <?php $this->load->view("_template/_navbar.php") ?>
  
  <div id="wrapper">
      
    <!-- Sidebar -->
    <?php $this->load->view("_template/_sidebar.php") ?>
    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Hasil Perhitungan</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr> 
                    <th>No</th>
                    <th>Variabel</th>
                    <th>Sangat Puas</th>
                    <th>Puas</th>
                    <th>Netral</th>
                    <th>Tidak Puas</th>
                    <th>Sangat tidak puas</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Variabel</th>
                    <th>Sangat Puas</th>
                    <th>Puas</th>
                    <th>Netral</th>
                    <th>Tidak Puas</th>
                    <th>Sangat tidak puas</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Harga</td>
                    <td><?php echo number_format($v1hasilbagi['sp'],3)?></td>
                    <td><?php echo number_format($v1hasilbagi['puas'],3)?></td>
                    <td><?php echo number_format($v1hasilbagi['netral'],3)?></td>
                    <td><?php echo number_format($v1hasilbagi['tp'],3)?></td>
                    <td><?php echo number_format($v1hasilbagi['stp'],3)?></td>
                  </tr>
                  
                  <tr>
                    <td>2</td>
                    <td>keramahan</td>
                    <td><?php echo number_format($v2hasilbagi['sp'],3)?></td>
                    <td><?php echo number_format($v2hasilbagi['puas'],3)?></td>
                    <td><?php echo number_format($v2hasilbagi['netral'],3)?></td>
                    <td><?php echo number_format($v2hasilbagi['tp'],3)?></td>
                    <td><?php echo number_format($v2hasilbagi['stp'],3)?></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>kebersihan dan kualitas barang</td>
                    <td><?php echo number_format($v3hasilbagi['sp'],3)?></td>
                    <td><?php echo number_format($v3hasilbagi['puas'],3)?></td>
                    <td><?php echo number_format($v3hasilbagi['netral'],3)?></td>
                    <td><?php echo number_format($v3hasilbagi['tp'],3)?></td>
                    <td><?php echo number_format($v3hasilbagi['stp'],3)?></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>kelengkapan barang</td>
                    <td><?php echo number_format($v4hasilbagi['sp'],3)?></td>
                    <td><?php echo number_format($v4hasilbagi['puas'],3)?></td>
                    <td><?php echo number_format($v4hasilbagi['netral'],3)?></td>
                    <td><?php echo number_format($v4hasilbagi['tp'],3)?></td>
                    <td><?php echo number_format($v4hasilbagi['stp'],3)?></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>kenyamanan bertransaksi</td>
                    <td><?php echo number_format($v5hasilbagi['sp'],3)?></td>
                    <td><?php echo number_format($v5hasilbagi['puas'],3)?></td>
                    <td><?php echo number_format($v5hasilbagi['netral'],3)?></td>
                    <td><?php echo number_format($v5hasilbagi['tp'],3)?></td>
                    <td><?php echo number_format($v5hasilbagi['stp'],3)?></td>
                  </tr>
                  
                  
                </tbody>
              </table>
            </div>
          </div>

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
