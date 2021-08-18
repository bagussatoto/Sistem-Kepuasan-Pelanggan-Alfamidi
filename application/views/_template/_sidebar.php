<!-- Sidebar -->

    <ul class="sidebar navbar-nav bg-danger">
    <li class="nav-item <?php echo $this->uri->segment(1) == 'home' ? 'active' : ''?>">
      <a class="nav-link" href="<?php echo base_url('home') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>HOME</span>
      </a>
    </li>
<?php 
  if ($this->session->userdata('role')== 'admin') {?>
      
      <li class="nav-item <?php echo $this->uri->segment(1) == 'tambahdata' ? 'active' : ''?>"">
        <a class="nav-link" href="<?php echo base_url('tambahdata') ?>">
          <i class="fas fa-fw fa-plus-square"></i>
          <span>Tambah Data</span></a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(1) == 'listdata' ? 'active' : ''?>"">
        <a class="nav-link" href="<?php echo base_url('listdata') ?>">
          <i class="fas fa-fw fa-table" aria-hidden="true"></i>
          <span>List Data</span></a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(1) == 'perhitungan' ? 'active' : ''?>"">
        <a class="nav-link" href="<?php echo base_url('perhitungan') ?>">
          <i class="fas fa-fw fa-square-root-alt" aria-hidden="true"></i>
          <span>Perhitungan</span></a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(1) == 'tabel' ? 'active' : ''?>"">
        <a class="nav-link" href="<?php echo base_url('tabel') ?>">
          <i class="fas fa-fw fa-table" aria-hidden="true"></i>
          <span>Tabel</span></a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(1) == 'grafik' ? 'active' : ''?>"">
        <a class="nav-link" href="<?php echo base_url('grafik') ?>">
          <i class="fa fa-fw fa-bar-chart"></i>
          <span>Grafik</span></a>
      </li>
<?php
  }elseif ($this->session->userdata('role')== 'perusahaan') {?>
            
      
      <li class="nav-item <?php echo $this->uri->segment(1) == 'grafik' ? 'active' : ''?>"">
        <a class="nav-link" href="<?php echo base_url('grafik') ?>">
          <i class="fa fa-fw fa-bar-chart"></i>
          <span>Grafik</span></a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(1) == 'hasilperhitungan' ? 'active' : ''?>"">
        <a class="nav-link" href="<?php echo base_url('hasilperhitungan') ?>">
          <i class="fas fa-fw fa-square-root-alt" aria-hidden="true"></i>
          <span>Hasil Perhitungan</span></a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(1) == 'tabel' ? 'active' : ''?>"">
        <a class="nav-link" href="<?php echo base_url('tabel') ?>">
          <i class="fas fa-fw fa-table" aria-hidden="true"></i>
          <span>Tabel</span></a>
      </li>
<?php
  }elseif ($this->session->userdata('role')== 'user') {?>
      <li class="nav-item <?php echo $this->uri->segment(1) == 'alfamidi' ? 'active' : ''?>"">
        <a class="nav-link" href="<?php echo base_url('alfamidi') ?>">
          <i class="fas fa-fw fa-plus-square"></i>
          <span>Alfamidi</span></a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(1) == 'tambahdata' ? 'active' : ''?>"">
        <a class="nav-link" href="<?php echo base_url('tambahdata') ?>">
          <i class="fas fa-fw fa-plus-square"></i>
          <span>Tambah Data</span></a>
      </li>
<?php
  }else {
    redirect('login');
  }
?>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login/logout') ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Log Out</span></a>
      </li>
    </ul>