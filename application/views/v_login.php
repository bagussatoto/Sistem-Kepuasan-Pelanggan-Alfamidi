<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_template/_head.php") ?>
</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
      <?= $this->session->flashdata('message'); ?>

        <form  method="post" action="<?php echo base_url('login');?>">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="username" name="username" class="form-control" placeholder="User Name" required="required" autofocus="autofocus">
              <label for="username">User Name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
              <label for="password">Password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?= base_url('login/register')?>">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view("_template/_js.php") ?>

</body>

</html>
