<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_template/_head.php") ?>
</head>

<body id="page-top">

  <?php $this->load->view("_template/_navbar.php") ?>

  <div id="wrapper">

  <?php $this->load->view("_template/_sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?= $this->session->flashdata('message'); ?>
        <!-- Page Content -->
        <h1>Form Edit Data</h1>
        <hr>
        <p>Edit data</p>

        <form method="post" action="<?php echo base_url("tambahdata/editDataSimpan/".$responden->id);?>">
        
          <div class="form-group">
            <label for="namaResponden">Nama Responden</label>
            <input type="text" class="form-control" id="namaResponden" name="namaResponden" required="required" 
            value="<?php echo $responden->nama?>"
            placeholder="Nama Responden">
          </div>
          <div class="form-group">
            <label for="emailResponden">Email Responden</label>
            <input type="text" class="form-control" id="emailResponden" name="emailResponden" required="required"
            value="<?php echo $responden->email?>"
            placeholder="Nama Responden">
          </div>

          <h5>Jenis Kelamin</h5>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbJenkel" id="rbJenkel1" value="Laki-laki" required="required" 
            <?php echo $responden->jenis_kelamin == 'Laki-laki' ? 'checked' :''?>>
            <label class="form-check-label" for="rbJenkel1">Laki-Laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbJenkel" id="rbJenkel2" value="Perempuan" required="required"
            <?php echo $responden->jenis_kelamin == 'Perempuan' ? 'checked' :''?>>
            <label class="form-check-label" for="rbJenkel2">Perempuan</label>
          </div>

          <br><br>

          <h5>Usia Anda</h5>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbUsia" id="rbUsia1" value="<17 tahun" required="required"
            <?php echo $responden->usia == '<17 tahun' ? 'checked' :''?>>
            <label class="form-check-label" for="rbUsia1">< 17 tahun</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbUsia" id="rbUsia2" value="17-20tahun" required="required"
            <?php echo $responden->usia == '17-20tahun' ? 'checked' :''?>>
            <label class="form-check-label" for="rbUsia2">17-20tahun</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbUsia" id="rbUsia3" value="21-25tahun" required="required"
            <?php echo $responden->usia == '21-25tahun' ? 'checked' :''?>>
            <label class="form-check-label" for="rbUsia3">21-25tahun</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbUsia" id="rbUsia4" value=">25tahun" required="required"
            <?php echo $responden->usia == '>25tahun' ? 'checked' :''?>>
            <label class="form-check-label" for="rbUsia4">>25tahun</label>
          </div>
          
          <br><br>

          <h5>Pekerjaan Anda</h5>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbPekerjaan" id="rbPekerjaan1" value="karyawan swasta" required="required"
            <?php echo $responden->pekerjaan == 'karyawan swasta' ? 'checked' :''?> >
            <label class="form-check-label" for="rbPekerjaan1">karyawan swasta</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbPekerjaan" id="rbPekerjaan2" value="wiraswasta" required="required"
            <?php echo $responden->pekerjaan == 'wiraswasta' ? 'checked' :''?> >
            <label class="form-check-label" for="rbPekerjaan2">wiraswasta</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbPekerjaan" id="rbPekerjaan3" value="pelajar/mahasiswa" required="required"
            <?php echo $responden->pekerjaan == 'pelajar/mahasiswa' ? 'checked' :''?> >
            <label class="form-check-label" for="rbPekerjaan3">pelajar/mahasiswa</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbPekerjaan" id="rbPekerjaan4" value="Other" required="required" 
            <?php echo $responden->pekerjaan == 'Other' ? 'checked' :''?> >
            <label class="form-check-label" for="rbPekerjaan4">Other</label>
          </div>

          <br><br>

          <hr>

          <h2>Harga</h2>

          <h5>Apakah harga barang yang di jual di Alfamidi terjangkau?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P1" id="rbv1P11" value="Sangat puas" required="required"
            <?php echo $responden->v1p1 == 'Sangat puas' ? 'checked' :''?> > 
            <label class="form-check-label" for="rbv1P11">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P1" id="rbv1P12" value="Puas" required="required"
            <?php echo $responden->v1p1 == 'Puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P12">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P1" id="rbv1P13" value="Netral" required="required"
            <?php echo $responden->v1p1 == 'Netral' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P13">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P1" id="rbv1P14" value="Tidak puas" required="required"
            <?php echo $responden->v1p1 == 'Tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P14">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P1" id="rbv1P15" value="Sangat tidak puas" required="required"
            <?php echo $responden->v1p1 == 'Sangat tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P15">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Menurut anda apakah harga barang yang di jual di alfamidi lebih murah di bandingkan dengan minimarket lainya?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P2" id="rbv1P21" value="Sangat puas" required="required"
            <?php echo $responden->v1p2 == 'Sangat puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P21">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P2" id="rbv1P22" value="Puas" required="required"
            <?php echo $responden->v1p2 == 'Puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P22">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P2" id="rbv1P23" value="Netral" required="required"
            <?php echo $responden->v1p2 == 'Netral' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P23">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P2" id="rbv1P24" value="Tidak puas" required="required"
            <?php echo $responden->v1p2 == 'Tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P24">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P2" id="rbv1P25" value="Sangat tidak puas" required="required"
            <?php echo $responden->v1p2 == 'Sangat tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P25">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Apakah anda sering mengalami selisi harga antara label price dan komputer? </h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P3" id="rbv1P31" value="Sangat puas" required="required"
            <?php echo $responden->v1p3 == 'Sangat puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P31">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P3" id="rbv1P32" value="Puas" required="required"
            <?php echo $responden->v1p3 == 'Puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P32">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P3" id="rbv1P33" value="Netral" required="required"
            <?php echo $responden->v1p3 == 'Netral' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P33">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P3" id="rbv1P34" value="Tidak puas" required="required"
            <?php echo $responden->v1p3 == 'Tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P34">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P3" id="rbv1P35" value="Sangat tidak puas" required="required"
            <?php echo $responden->v1p3 == 'Sangat tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P35">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Apakah anda merasa puas dengan harga barang yang di jual di alfamidi?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P4" id="rbv1P41" value="Sangat puas" required="required"
            <?php echo $responden->v1p4 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv1P41">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P4" id="rbv1P42" value="Puas" required="required"
            <?php echo $responden->v1p4 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv1P42">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P4" id="rbv1P43" value="Netral" required="required"
            <?php echo $responden->v1p4 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv1P43">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P4" id="rbv1P44" value="Tidak puas" required="required"
            <?php echo $responden->v1p4 == 'Tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv1P44">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv1P4" id="rbv1P45" value="Sangat tidak puas" required="required"
            <?php echo $responden->v1p4 == 'Sangat tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv1P45">Sangat tidak puas</label>
          </div>

          <br><br>

          <hr>

          <h2>Keramahan</h2>

          <h5>Apakah anda merasa puas dengan pelayanan karyawan di alfamdi?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P1" id="rbv2P11" value="Sangat puas" required="required"
            <?php echo $responden->v2p1 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P11">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P1" id="rbv2P12" value="Puas" required="required"
            <?php echo $responden->v2p1 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P12">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P1" id="rbv2P13" value="Netral" required="required"
            <?php echo $responden->v2p1 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P13">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P1" id="rbv2P14" value="Tidak puas" required="required"
            <?php echo $responden->v2p1 == 'Tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P14">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P1" id="rbv2P15" value="Sangat tidak puas" required="required"
            <?php echo $responden->v2p1 == 'Sangat tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv2P15">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Apakah karyawan di alfamidi rama terhadap konsumen yang berbelanja di alfamdi?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P2" id="rbv2P21" value="Sangat puas"  required="required"
            <?php echo $responden->v2p2 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P21">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P2" id="rbv2P22" value="Puas"  required="required"
            <?php echo $responden->v2p2 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P22">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P2" id="rbv2P23" value="Netral" required="required"
            <?php echo $responden->v2p2 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P23">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P2" id="rbv2P24" value="Tidak puas"  required="required"
            <?php echo $responden->v2p2 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv2P24">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P2" id="rbv2P25" value="Sangat tidak puas" required="required"
            <?php echo $responden->v2p2 == 'Sangat tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv2P25">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Keramahan dan kesopanan karyawan?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P3" id="rbv2P31" value="Sangat puas" required="required"
            <?php echo $responden->v2p3 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P31">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P3" id="rbv2P32" value="Puas" required="required"
            <?php echo $responden->v2p3 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P32">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P3" id="rbv2P33" value="Netral"required="required" 
            <?php echo $responden->v2p3 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P33">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P3" id="rbv2P34" value="Tidak puas" required="required" 
            <?php echo $responden->v2p3 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv2P34">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P3" id="rbv2P35" value="Sangat tidak puas" required="required"
            <?php echo $responden->v2p3 == 'Sangat tidak puas' ? 'checked' :''?>  >
            <label class="form-check-label" for="rbv2P35">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Apakah karyawan di alfamidi selalu tersenyum ketika melayani konsumen?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P4" id="rbv2P41" value="Sangat puas" required="required"
            <?php echo $responden->v2p4 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P41">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P4" id="rbv2P42" value="Puas" required="required"
            <?php echo $responden->v2p4 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P42">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P4" id="rbv2P43" value="Netral" required="required"
            <?php echo $responden->v2p4 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv2P43">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P4" id="rbv2P44" value="Tidak puas" required="required"
            <?php echo $responden->v2p4 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv2P44">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv2P4" id="rbv2P45" value="Sangat tidak puas" required="required"
            <?php echo $responden->v2p4 == 'Sangat tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv2P45">Sangat tidak puas</label>
          </div>

          <br><br>

          <hr>

          <h2>Kebersihan / Kualitas barang</h2>

          <h5>Menurut anda saat ini kualitas barang yang di jual di alfamidi lebih bagus di bandingkan dengan minimarket lain?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P1" id="rbv3P11" value="Sangat puas" required="required"
            <?php echo $responden->v3p1 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P11">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P1" id="rbv3P12" value="Puas" required="required"
            <?php echo $responden->v3p1 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P12">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P1" id="rbv3P13" value="Netral" required="required"
            <?php echo $responden->v3p1 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P13">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P1" id="rbv3P14" value="Tidak puas" required="required"
            <?php echo $responden->v3p1 == 'Tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P14">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P1" id="rbv3P15" value="Sangat tidak puas" required="required" 
            <?php echo $responden->v3p1 == 'Sangat tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv3P15">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Menurut anda apakah barang di Alfamidi kualitas produknya lebih bagus..?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P2" id="rbv3P21" value="Sangat puas"  required="required"
            <?php echo $responden->v3p2 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P21">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P2" id="rbv3P22" value="Puas"  required="required"
            <?php echo $responden->v3p2 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P22">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P2" id="rbv3P23" value="Netral" required="required"
            <?php echo $responden->v3p2 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P23">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P2" id="rbv3P24" value="Tidak puas"  required="required"
            <?php echo $responden->v3p2 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv3P24">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P2" id="rbv3P25" value="Sangat tidak puas" required="required"
            <?php echo $responden->v3p2 == 'Sangat tidak puas' ? 'checked' :''?> >
            <label class="form-check-label" for="rbv3P25">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Apakah area tempat pendisplyan rapih?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P3" id="rbv3P31" value="Sangat puas" required="required"
            <?php echo $responden->v3p3 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P31">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P3" id="rbv3P32" value="Puas" required="required"
            <?php echo $responden->v3p3 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P32">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P3" id="rbv3P33" value="Netral"required="required" 
            <?php echo $responden->v3p3 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P33">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P3" id="rbv3P34" value="Tidak puas" required="required" 
            <?php echo $responden->v3p3 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv3P34">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P3" id="rbv3P35" value="Sangat tidak puas" required="required"
            <?php echo $responden->v3p3 == 'Sangat tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P35">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Apakah area kasir bersih?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P4" id="rbv3P41" value="Sangat puas" required="required"
            <?php echo $responden->v3p4 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P41">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P4" id="rbv3P42" value="Puas" required="required"
            <?php echo $responden->v3p4 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P42">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P4" id="rbv3P43" value="Netral" required="required"
            <?php echo $responden->v3p4 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P43">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P4" id="rbv3P44" value="Tidak puas" required="required"
            <?php echo $responden->v3p4 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv3P44">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv3P4" id="rbv3P45" value="Sangat tidak puas" required="required"
            <?php echo $responden->v3p4 == 'Sangat tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv3P45">Sangat tidak puas</label>
          </div>

          <br><br>

          <hr>

          <h2>Kelengkapan barang</h2>

          <h5>Apakah barang di alfamidi lebih lengkap</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P1" id="rbv4P11" value="Sangat puas" required="required"
            <?php echo $responden->v4p1 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P11">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P1" id="rbv4P12" value="Puas" required="required"
            <?php echo $responden->v4p1 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P12">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P1" id="rbv4P13" value="Netral" required="required"
            <?php echo $responden->v4p1 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P13">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P1" id="rbv4P14" value="Tidak puas" required="required"
            <?php echo $responden->v4p1 == 'Tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P14">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P1" id="rbv4P15" value="Sangat tidak puas" required="required"
            <?php echo $responden->v4p1 == 'Sangat tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P15">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Produk yang di jual lebih bagus?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P2" id="rbv4P21" value="Sangat puas"  required="required"
            <?php echo $responden->v4p2 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P21">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P2" id="rbv4P22" value="Puas"  required="required"
            <?php echo $responden->v4p2 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P22">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P2" id="rbv4P23" value="Netral" required="required"
            <?php echo $responden->v4p2 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P23">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P2" id="rbv4P24" value="Tidak puas"  required="required"
            <?php echo $responden->v4p2 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv4P24">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P2" id="rbv4P25" value="Sangat tidak puas" required="required"
            <?php echo $responden->v4p2 == 'Sangat tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P25">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Apakah barang yang akan kamu beli ada di Alfamidi?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P3" id="rbv4P31" value="Sangat puas" required="required"
            <?php echo $responden->v4p3 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P31">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P3" id="rbv4P32" value="Puas" required="required"
            <?php echo $responden->v4p3 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P32">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P3" id="rbv4P33" value="Netral"required="required" 
            <?php echo $responden->v4p3 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P33">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P3" id="rbv4P34" value="Tidak puas" required="required" 
            <?php echo $responden->v4p3 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv4P34">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P3" id="rbv4P35" value="Sangat tidak puas" required="required"
            <?php echo $responden->v4p3 == 'Sangat tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P35">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Apakah Alfamidi menyediakan kebutuhan sehari -hari kamu?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P4" id="rbv4P41" value="Sangat puas" required="required"
            <?php echo $responden->v4p4 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P41">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P4" id="rbv4P42" value="Puas" required="required"
            <?php echo $responden->v4p4 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P42">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P4" id="rbv4P43" value="Netral" required="required"
            <?php echo $responden->v4p4 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P43">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P4" id="rbv4P44" value="Tidak puas" required="required"
            <?php echo $responden->v4p4 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv4P44">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv4P4" id="rbv4P45" value="Sangat tidak puas" required="required"
            <?php echo $responden->v4p4 == 'Sangat tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv4P45">Sangat tidak puas</label>
          </div>

          <br><br>

          <hr>

          <h2>Kenyamanan bertransaksi</h2>

          <h5>Memiliki respon yang cepat ketika melayani pembeli ?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P1" id="rbv5P11" value="Sangat puas" required="required"
            <?php echo $responden->v5p1 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P11">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P1" id="rbv5P12" value="Puas" required="required"
            <?php echo $responden->v5p1 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P12">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P1" id="rbv5P13" value="Netral" required="required"
            <?php echo $responden->v5p1 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P13">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P1" id="rbv5P14" value="Tidak puas" required="required"
            <?php echo $responden->v5p1 == 'Tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P14">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P1" id="rbv5P15" value="Sangat tidak puas" required="required"
            <?php echo $responden->v5p1 == 'Sangat tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P15">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Apakah anda berbelanja di alfamidi merasa aman ?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P2" id="rbv5P21" value="Sangat puas"  required="required"
            <?php echo $responden->v5p2 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P21">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P2" id="rbv5P22" value="Puas"  required="required"
            <?php echo $responden->v5p2 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P22">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P2" id="rbv5P23" value="Netral" required="required"
            <?php echo $responden->v5p2 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P23">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P2" id="rbv5P24" value="Tidak puas"  required="required"
            <?php echo $responden->v5p2 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv5P24">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P2" id="rbv5P25" value="Sangat tidak puas" required="required"
            <?php echo $responden->v5p2 == 'Sangat tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P25">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Tersedia fasilitas online untuk memudahkan konsumen dalam menemukan produk yang dibutuhkan?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P3" id="rbv5P31" value="Sangat puas" required="required"
            <?php echo $responden->v5p3 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P31">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P3" id="rbv5P32" value="Puas" required="required"
            <?php echo $responden->v5p3 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P32">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P3" id="rbv5P33" value="Netral"required="required" 
            <?php echo $responden->v5p3 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P33">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P3" id="rbv5P34" value="Tidak puas" required="required" 
            <?php echo $responden->v5p3 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv5P34">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P3" id="rbv5P35" value="Sangat tidak puas" required="required"
            <?php echo $responden->v5p3 == 'Sangat tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P35">Sangat tidak puas</label>
          </div>

          <br><br>

          <h5>Apakah alfamidi melayani konsumen selama 24 jam?</h5>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P4" id="rbv5P41" value="Sangat puas" required="required"
            <?php echo $responden->v5p4 == 'Sangat puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P41">Sangat puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P4" id="rbv5P42" value="Puas" required="required"
            <?php echo $responden->v5p4 == 'Puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P42">Puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P4" id="rbv5P43" value="Netral" required="required"
            <?php echo $responden->v5p4 == 'Netral' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P43">Netral</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P4" id="rbv5P44" value="Tidak puas" required="required"
            <?php echo $responden->v5p4 == 'Tidak puas' ? 'checked' :''?>> 
            <label class="form-check-label" for="rbv5P44">Tidak puas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="rbv5P4" id="rbv5P45" value="Sangat tidak puas" required="required"
            <?php echo $responden->v5p4 == 'Sangat tidak puas' ? 'checked' :''?>>
            <label class="form-check-label" for="rbv5P45">Sangat tidak puas</label>
          </div>

          <br><br>



          <br><br>
          <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>

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
