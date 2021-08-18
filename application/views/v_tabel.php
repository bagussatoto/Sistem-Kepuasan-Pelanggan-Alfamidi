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
            1.	Variabel harga</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr> 
                    <th>No</th>
                    <th>Pertanyaan</th>
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
                    <th>Pertanyaan</th>
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
                    <td>Apakah harga barang yang di jual di Alfamidi terjangkau?</td>
                    <td><?php echo $v1spdetail[0]?></td>
                    <td><?php echo $v1puasdetail[0]?></td>
                    <td><?php echo $v1netraldetail[0]?></td>
                    <td><?php echo $v1tpdetail[0]?></td>
                    <td><?php echo $v1stpdetail[0]?></td>
                  </tr>
                  
                  <tr>
                    <td>2</td>
                    <td>Menurut anda apakah harga barang yang di jual di alfamidi lebih murah di bandingkan dengan minimarket lainya?</td>
                    <td><?php echo $v1spdetail[1]?></td>
                    <td><?php echo $v1puasdetail[1]?></td>
                    <td><?php echo $v1netraldetail[1]?></td>
                    <td><?php echo $v1tpdetail[1]?></td>
                    <td><?php echo $v1stpdetail[1]?></td>
                  </tr>
                  
                  <tr>
                    <td>3</td>
                    <td>Apakah anda sering mengalami selisi harga antara label price dan komputer? </td>
                    <td><?php echo $v1spdetail[2]?></td>
                    <td><?php echo $v1puasdetail[2]?></td>
                    <td><?php echo $v1netraldetail[2]?></td>
                    <td><?php echo $v1tpdetail[2]?></td>
                    <td><?php echo $v1stpdetail[2]?></td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>Apakah anda merasa puas dengan harga barang yang di jual di alfamidi?  </td>
                    <td><?php echo $v1spdetail[3]?></td>
                    <td><?php echo $v1puasdetail[3]?></td>
                    <td><?php echo $v1netraldetail[3]?></td>
                    <td><?php echo $v1tpdetail[3]?></td>
                    <td><?php echo $v1stpdetail[3]?></td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>Total</td>
                    <td><?php echo $v1sp?></td>
                    <td><?php echo $v1puas?></td>
                    <td><?php echo $v1netral?></td></td>
                    <td><?php echo $v1tp?></td>
                    <td><?php echo $v1stp?></td>
                  </tr>
                  
                  
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            2.	Variabel keramahan</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                <thead>
                  <tr> 
                    <th>No</th>
                    <th>Pertanyaan</th>
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
                    <th>Pertanyaan</th>
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
                    <td>Apakah anda merasa puas dengan pelayanan karyawan di alfamdi? </td>
                    <td><?php echo $v2spdetail[0]?></td>
                    <td><?php echo $v2puasdetail[0]?></td>
                    <td><?php echo $v2netraldetail[0]?></td>
                    <td><?php echo $v2tpdetail[0]?></td>
                    <td><?php echo $v2stpdetail[0]?></td>
                  </tr>
                  
                  <tr>
                    <td>2</td>
                    <td>Apakah karyawan di alfamidi rama terhadap konsumen yang berbelanja di alfamdi? </td>
                    <td><?php echo $v2spdetail[1]?></td>
                    <td><?php echo $v2puasdetail[1]?></td>
                    <td><?php echo $v2netraldetail[1]?></td>
                    <td><?php echo $v2tpdetail[1]?></td>
                    <td><?php echo $v2stpdetail[1]?></td>
                  </tr>
                  
                  <tr>
                    <td>3</td>
                    <td>Keramahan dan kesopanan karyawan? </td>
                    <td><?php echo $v2spdetail[2]?></td>
                    <td><?php echo $v2puasdetail[2]?></td>
                    <td><?php echo $v2netraldetail[2]?></td>
                    <td><?php echo $v2tpdetail[2]?></td>
                    <td><?php echo $v2stpdetail[2]?></td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>Apakah karyawan di alfamidi selalu tersenyum ketika melayani konsumen?  </td>
                    <td><?php echo $v2spdetail[3]?></td>
                    <td><?php echo $v2puasdetail[3]?></td>
                    <td><?php echo $v2netraldetail[3]?></td>
                    <td><?php echo $v2tpdetail[3]?></td>
                    <td><?php echo $v2stpdetail[3]?></td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>Total</td>
                    <td><?php echo $v2sp?></td>
                    <td><?php echo $v2puas?></td>
                    <td><?php echo $v2netral?></td></td>
                    <td><?php echo $v2tp?></td>
                    <td><?php echo $v2stp?></td>
                  </tr>
                  
                  
                </tbody>
              </table>
            </div>
          </div>

        </div>
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            3. Variabel kebersihan dan kualitas barang</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr> 
                    <th>No</th>
                    <th>Pertanyaan</th>
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
                    <th>Pertanyaan</th>
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
                    <td>Apakah penempatan barang rapih? </td>
                    <td><?php echo $v3spdetail[0]?></td>
                    <td><?php echo $v3puasdetail[0]?></td>
                    <td><?php echo $v3netraldetail[0]?></td>
                    <td><?php echo $v3tpdetail[0]?></td>
                    <td><?php echo $v3stpdetail[0]?></td>
                  </tr>
                  
                  <tr>
                    <td>2</td>
                    <td>Menurut anda apakah barang di Alfamidi kualitas produknya lebih bagus..? </td>
                    <td><?php echo $v3spdetail[1]?></td>
                    <td><?php echo $v3puasdetail[1]?></td>
                    <td><?php echo $v3netraldetail[1]?></td>
                    <td><?php echo $v3tpdetail[1]?></td>
                    <td><?php echo $v3stpdetail[1]?></td>
                  </tr>
                  
                  <tr>
                    <td>3</td>
                    <td>Menurut anda saat ini kualitas barang yang di jual di alfamidi lebih bagus di bandingkan dengan minimarket lain? </td>
                    <td><?php echo $v3spdetail[2]?></td>
                    <td><?php echo $v3puasdetail[2]?></td>
                    <td><?php echo $v3netraldetail[2]?></td>
                    <td><?php echo $v3tpdetail[2]?></td>
                    <td><?php echo $v3stpdetail[2]?></td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>Apakah area kasir bersih?  </td>
                    <td><?php echo $v3spdetail[3]?></td>
                    <td><?php echo $v3puasdetail[3]?></td>
                    <td><?php echo $v3netraldetail[3]?></td>
                    <td><?php echo $v3tpdetail[3]?></td>
                    <td><?php echo $v3stpdetail[3]?></td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>Total</td>
                    <td><?php echo $v3sp?></td>
                    <td><?php echo $v3puas?></td>
                    <td><?php echo $v3netral?></td></td>
                    <td><?php echo $v3tp?></td>
                    <td><?php echo $v3stp?></td>
                  </tr>
                  
                  
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            4.	Variabel kelengkapan barang</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr> 
                    <th>No</th>
                    <th>Pertanyaan</th>
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
                    <th>Pertanyaan</th>
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
                    <td>Apakah barang di alfamidi lebih lengkap </td>
                    <td><?php echo $v4spdetail[0]?></td>
                    <td><?php echo $v4puasdetail[0]?></td>
                    <td><?php echo $v4netraldetail[0]?></td>
                    <td><?php echo $v4tpdetail[0]?></td>
                    <td><?php echo $v4stpdetail[0]?></td>
                  </tr>
                  
                  <tr>
                    <td>2</td>
                    <td>Apakah barang yang anda butuhkan ada di Alfamidi? </td>
                    <td><?php echo $v4spdetail[1]?></td>
                    <td><?php echo $v4puasdetail[1]?></td>
                    <td><?php echo $v4netraldetail[1]?></td>
                    <td><?php echo $v4tpdetail[1]?></td>
                    <td><?php echo $v4stpdetail[1]?></td>
                  </tr>
                  
                  <tr>
                    <td>3</td>
                    <td>Apakah Alfamidi menyediakan kebutuhan sehari -hari lebih lengkap? </td>
                    <td><?php echo $v4spdetail[2]?></td>
                    <td><?php echo $v4puasdetail[2]?></td>
                    <td><?php echo $v4netraldetail[2]?></td>
                    <td><?php echo $v4tpdetail[2]?></td>
                    <td><?php echo $v4stpdetail[2]?></td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>Apakah karyawan Memiliki respon yang cepat ketika melayani pembeli ?  </td>
                    <td><?php echo $v4spdetail[3]?></td>
                    <td><?php echo $v4puasdetail[3]?></td>
                    <td><?php echo $v4netraldetail[3]?></td>
                    <td><?php echo $v4tpdetail[3]?></td>
                    <td><?php echo $v4stpdetail[3]?></td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>Total</td>
                    <td><?php echo $v4sp?></td>
                    <td><?php echo $v4puas?></td>
                    <td><?php echo $v4netral?></td></td>
                    <td><?php echo $v4tp?></td>
                    <td><?php echo $v4stp?></td>
                  </tr>
                  
                  
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            5.	Variabel kenyamanan bertransaksi</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr> 
                    <th>No</th>
                    <th>Pertanyaan</th>
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
                    <th>Pertanyaan</th>
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
                    <td>Memiliki respon yang cepat ketika melayani pembeli  </td>
                    <td><?php echo $v5spdetail[0]?></td>
                    <td><?php echo $v5puasdetail[0]?></td>
                    <td><?php echo $v5netraldetail[0]?></td>
                    <td><?php echo $v5tpdetail[0]?></td>
                    <td><?php echo $v5stpdetail[0]?></td>
                  </tr>
                  
                  <tr>
                    <td>2</td>
                    <td>Apakah pelayanan yang diberikan Alfamidi suda memuaskan? </td>
                    <td><?php echo $v5spdetail[1]?></td>
                    <td><?php echo $v5puasdetail[1]?></td>
                    <td><?php echo $v5netraldetail[1]?></td>
                    <td><?php echo $v5tpdetail[1]?></td>
                    <td><?php echo $v5stpdetail[1]?></td>
                  </tr>
                  
                  <tr>
                    <td>3</td>
                    <td>Apakah anda berbelanja di alfamidi merasa aman ?</td>
                    <td><?php echo $v5spdetail[2]?></td>
                    <td><?php echo $v5puasdetail[2]?></td>
                    <td><?php echo $v5netraldetail[2]?></td>
                    <td><?php echo $v5tpdetail[2]?></td>
                    <td><?php echo $v5stpdetail[2]?></td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>Apakah alfamidi melayani konsumen selama 24 jam?  </td>
                    <td><?php echo $v5spdetail[3]?></td>
                    <td><?php echo $v5puasdetail[3]?></td>
                    <td><?php echo $v5netraldetail[3]?></td>
                    <td><?php echo $v5tpdetail[3]?></td>
                    <td><?php echo $v5stpdetail[3]?></td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>Total</td>
                    <td><?php echo $v5sp?></td>
                    <td><?php echo $v5puas?></td>
                    <td><?php echo $v5netral?></td></td>
                    <td><?php echo $v5tp?></td>
                    <td><?php echo $v5stp?></td>
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
