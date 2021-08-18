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

      <h2>Selamat datang di sistem prediksi kepuasan pelanggan Alfamidi</h2>
      <hr>
      <p>Hallo <?php echo $sesi ?>.</p>
      <hr>

      <img src="<?php echo base_url('assets/image/logo-alfamidi.jpg'); ?>"><br><br>

      <!-- Icon Cards-->
      
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
