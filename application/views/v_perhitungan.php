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

        <!-- Page Content -->
        <h1>PERHITUNGAN</h1>
        <hr>
        <h5>Perhitungan Class Variabel</h5>
        <hr>
        <h6>Untuk mengetahui hasil variabel,kalikan semua hasil variabel pada Analisis kepuasan pelanggan sebagai berikut:<h6>
        <li>Variabel harga </li>
        <ul>P (SP | Variabel harga  =  <?php echo "$v1sp/$totaldb" ?>) * P (P | Variabel harga = <?php echo "$v1puas/$totaldb" ?>)  * <br>
            P (N  | Variabel harga <?php echo "$v1netral/$totaldb" ?>) * P (TP | Variabel harga <?php echo "$v1tp/$totaldb" ?>) *  <br>
            P (STP | Variabel harga <?php echo "$v1stp/$totaldb" ?>) <br>
            = <?php echo number_format($v1hasilbagi['sp'],3) . " * " . number_format($v1hasilbagi['puas'],3) . " * " .
            number_format($v1hasilbagi['netral'],3) . " * " . number_format($v1hasilbagi['tp'],3) . " * " .
            number_format($v1hasilbagi['stp'],3)?><br>
            = <?php echo number_format($v1hasilbagi['kali'],6)?>
        </ul>
        <li>Variabel keramahan  </li>
        <ul>P (SP | Variabel harga  =  <?php echo "$v2sp/$totaldb" ?>) * P (P | Variabel harga = <?php echo "$v2puas/$totaldb" ?>)  * <br>
            P (N  | Variabel harga <?php echo "$v2netral/$totaldb" ?>) * P (TP | Variabel harga <?php echo "$v2tp/$totaldb" ?>) *  <br>
            P (STP | Variabel harga <?php echo "$v2stp/$totaldb" ?>) <br>
            = <?php echo number_format($v2hasilbagi['sp'],3) . " * " . number_format($v2hasilbagi['puas'],3) . " * " .
            number_format($v2hasilbagi['netral'],3) . " * " . number_format($v2hasilbagi['tp'],3) . " * " .
            number_format($v2hasilbagi['stp'],3)?><br>
            = <?php echo number_format($v2hasilbagi['kali'],6)?>
        </ul>
        <li>Variabel kebersihan dan kualitas barang </li>
        <ul>P (SP | Variabel harga  =  <?php echo "$v3sp/$totaldb" ?>) * P (P | Variabel harga = <?php echo "$v3puas/$totaldb" ?>)  * <br>
            P (N  | Variabel harga <?php echo "$v3netral/$totaldb" ?>) * P (TP | Variabel harga <?php echo "$v3tp/$totaldb" ?>) *  <br>
            P (STP | Variabel harga <?php echo "$v3stp/$totaldb" ?>) <br>
            = <?php echo number_format($v3hasilbagi['sp'],3) . " * " . number_format($v3hasilbagi['puas'],3) . " * " .
            number_format($v3hasilbagi['netral'],3) . " * " . number_format($v3hasilbagi['tp'],3) . " * " .
            number_format($v3hasilbagi['stp'],3)?><br>
            = <?php echo number_format($v3hasilbagi['kali'],6)?>
        </ul>
        <li>Variabel kelengkapan barang </li>
        <ul>P (SP | Variabel harga  =  <?php echo "$v4sp/$totaldb" ?>) * P (P | Variabel harga = <?php echo "$v4puas/$totaldb" ?>)  * <br>
            P (N  | Variabel harga <?php echo "$v4netral/$totaldb" ?>) * P (TP | Variabel harga <?php echo "$v4tp/$totaldb" ?>) *  <br>
            P (STP | Variabel harga <?php echo "$v4stp/$totaldb" ?>) <br>
            = <?php echo number_format($v4hasilbagi['sp'],3) . " * " . number_format($v4hasilbagi['puas'],3) . " * " .
            number_format($v4hasilbagi['netral'],3) . " * " . number_format($v4hasilbagi['tp'],3) . " * " .
            number_format($v4hasilbagi['stp'],3)?><br>
            = <?php echo number_format($v4hasilbagi['kali'],6)?>
        </ul>
        <li>Variabel kenyamanan bertransaksi </li>
        <ul>P (SP | Variabel harga  =  <?php echo "$v5sp/$totaldb" ?>) * P (P | Variabel harga = <?php echo "$v5puas/$totaldb" ?>)  * <br>
            P (N  | Variabel harga <?php echo "$v5netral/$totaldb" ?>) * P (TP | Variabel harga <?php echo "$v5tp/$totaldb" ?>) *  <br>
            P (STP | Variabel harga <?php echo "$v5stp/$totaldb" ?>) <br>
            = <?php echo number_format($v5hasilbagi['sp'],3) . " * " . number_format($v5hasilbagi['puas'],3) . " * " .
            number_format($v5hasilbagi['netral'],3) . " * " . number_format($v5hasilbagi['tp'],3) . " * " .
            number_format($v5hasilbagi['stp'],3)?><br>
            = <?php echo number_format($v5hasilbagi['kali'],6)?>
        </ul>

        <hr>
        <h5>Perhitungan Probabilitas Variabel</h5>
        <hr>
        <li>Variabel harga </li>
          <ul>Perhitungan variabel harga dengan probabilitas yaitu jumlah responden dibagi dengan hasil jumlah responden pada masing- masing variabel, dengan hasil sebagai berikut:</ul>
          <ul>
            <li>Sangat Puas (SP), Jumlah Responden = <?php echo "$v1sp/$totaldb" ?></li>
            <li>Puas (P), Jumlah Responden = <?php echo "$v1puas/$totaldb" ?></li>
            <li>Netral (N), Jumlah Responden = <?php echo "$v1netral/$totaldb" ?></li>
            <li>Tidak  Puas (TP), Jumlah Responden = <?php echo "$v1tp/$totaldb" ?></li>
            <li>Sangat  tidak Puas (STP), Jumlah Responden = <?php echo "$v1stp/$totaldb" ?></li>
          </ul>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Nilai Hasil Probabilitas Variabel Harga</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr> 
                      <th>Sangat Puas(SP)</th>
                      <th>Puas(P)</th>
                      <th>Netral(N)</th>
                      <th>Tidak Puas(TP)</th>
                      <th>Sangat Tidak Puas(STP)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo number_format($v1hasilbagi['sp'],3)?></td>
                      <td><?php echo number_format($v1hasilbagi['puas'],3)?></td>
                      <td><?php echo number_format($v1hasilbagi['netral'],3)?></td>
                      <td><?php echo number_format($v1hasilbagi['tp'],3)?></td>
                      <td><?php echo number_format($v1hasilbagi['stp'],3)?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        <li>Variabel kriteria keramahan </li>
          <ul>Perhitungan variabel keramahan dengan probabilitas yaitu jumlah responden dibagi dengan hasil jumlah responden pada masing- masing variabel, dengan hasil sebagai berikut:</ul>
          <ul>
            <li>Sangat Puas (SP), Jumlah Responden = <?php echo "$v2sp/$totaldb" ?></li>
            <li>Puas (P), Jumlah Responden = <?php echo "$v2puas/$totaldb" ?></li>
            <li>Netral (N), Jumlah Responden = <?php echo "$v2netral/$totaldb" ?></li>
            <li>Tidak  Puas (TP), Jumlah Responden = <?php echo "$v2tp/$totaldb" ?></li>
            <li>Sangat  tidak Puas (STP), Jumlah Responden = <?php echo "$v2stp/$totaldb" ?></li>
          </ul>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Nilai Hasil Probabilitas Variabel Keramahan</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr> 
                      <th>Sangat Puas(SP)</th>
                      <th>Puas(P)</th>
                      <th>Netral(N)</th>
                      <th>Tidak Puas(TP)</th>
                      <th>Sangat Tidak Puas(STP)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo number_format($v2hasilbagi['sp'],3)?></td>
                      <td><?php echo number_format($v2hasilbagi['puas'],3)?></td>
                      <td><?php echo number_format($v2hasilbagi['netral'],3)?></td>
                      <td><?php echo number_format($v2hasilbagi['tp'],3)?></td>
                      <td><?php echo number_format($v2hasilbagi['stp'],3)?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        <li>Variabel kriteria kebersihan dan kualitas barang </li>
          <ul>Perhitungan variabel kebersihan dan kualitas barang dengan probabilitas yaitu jumlah responden dibagi dengan hasil jumlah responden pada masing- masing variabel, dengan hasil sebagai berikut:</ul>
          <ul>
            <li>Sangat Puas (SP), Jumlah Responden = <?php echo "$v3sp/$totaldb" ?></li>
            <li>Puas (P), Jumlah Responden = <?php echo "$v3puas/$totaldb" ?></li>
            <li>Netral (N), Jumlah Responden = <?php echo "$v3netral/$totaldb" ?></li>
            <li>Tidak  Puas (TP), Jumlah Responden = <?php echo "$v3tp/$totaldb" ?></li>
            <li>Sangat  tidak Puas (STP), Jumlah Responden = <?php echo "$v3stp/$totaldb" ?></li>
          </ul>
          
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Nilai Hasil Probabilitas Variabel kebersihan dan kualitas barang</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr> 
                      <th>Sangat Puas(SP)</th>
                      <th>Puas(P)</th>
                      <th>Netral(N)</th>
                      <th>Tidak Puas(TP)</th>
                      <th>Sangat Tidak Puas(STP)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo number_format($v3hasilbagi['sp'],3)?></td>
                      <td><?php echo number_format($v3hasilbagi['puas'],3)?></td>
                      <td><?php echo number_format($v3hasilbagi['netral'],3)?></td>
                      <td><?php echo number_format($v3hasilbagi['tp'],3)?></td>
                      <td><?php echo number_format($v3hasilbagi['stp'],3)?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        <li>Variabel kriteria kelengkapan barang </li>
          <ul>Perhitungan variabel kelengkapan barang dengan probabilitas yaitu jumlah responden dibagi dengan hasil jumlah responden pada masing- masing variabel, dengan hasil sebagai berikut:</ul>
          <ul>
            <li>Sangat Puas (SP), Jumlah Responden = <?php echo "$v4sp/$totaldb" ?></li>
            <li>Puas (P), Jumlah Responden = <?php echo "$v4puas/$totaldb" ?></li>
            <li>Netral (N), Jumlah Responden = <?php echo "$v4netral/$totaldb" ?></li>
            <li>Tidak  Puas (TP), Jumlah Responden = <?php echo "$v4tp/$totaldb" ?></li>
            <li>Sangat  tidak Puas (STP), Jumlah Responden = <?php echo "$v4stp/$totaldb" ?></li>
          </ul>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Nilai Hasil Probabilitas kelengkapan barang</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr> 
                      <th>Sangat Puas(SP)</th>
                      <th>Puas(P)</th>
                      <th>Netral(N)</th>
                      <th>Tidak Puas(TP)</th>
                      <th>Sangat Tidak Puas(STP)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo number_format($v4hasilbagi['sp'],3)?></td>
                      <td><?php echo number_format($v4hasilbagi['puas'],3)?></td>
                      <td><?php echo number_format($v4hasilbagi['netral'],3)?></td>
                      <td><?php echo number_format($v4hasilbagi['tp'],3)?></td>
                      <td><?php echo number_format($v4hasilbagi['stp'],3)?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        <li>Variabel kriteria kenyamanan bertransaksi </li>
          <ul>Perhitungan variabel kenyamanan bertransaksi dengan probabilitas yaitu jumlah responden dibagi dengan hasil jumlah responden pada masing- masing variabel, dengan hasil sebagai berikut:</ul>
          <ul>
            <li>Sangat Puas (SP), Jumlah Responden = <?php echo "$v5sp/$totaldb" ?></li>
            <li>Puas (P), Jumlah Responden = <?php echo "$v5puas/$totaldb" ?></li>
            <li>Netral (N), Jumlah Responden = <?php echo "$v5netral/$totaldb" ?></li>
            <li>Tidak  Puas (TP), Jumlah Responden = <?php echo "$v5tp/$totaldb" ?></li>
            <li>Sangat  tidak Puas (STP), Jumlah Responden = <?php echo "$v5stp/$totaldb" ?></li>
          </ul>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Nilai Hasil Probabilitas kenyamanan bertransaksi</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr> 
                      <th>Sangat Puas(SP)</th>
                      <th>Puas(P)</th>
                      <th>Netral(N)</th>
                      <th>Tidak Puas(TP)</th>
                      <th>Sangat Tidak Puas(STP)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
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
