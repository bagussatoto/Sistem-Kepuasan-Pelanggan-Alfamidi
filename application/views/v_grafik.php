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

        <!-- Breadcrumbs-->

        <!-- Area Chart Example-->
        
        <div class="row">
          
          <div class="col-lg-6">

            <!-- grafik jenis kelamin -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                jumlah responden berdasarkan Jenis Kelamin</div>
              <div class="card-body">
                <canvas id="pie" width="100%" height="30"></canvas>
              </div>
              <div class="card-footer small text-muted">Jenis Kelamin</div>
            </div>
          </div>

          <div class="col-lg-6">

            <!-- grafik variable harga -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                Variable Harga</div>
              <div class="card-body">
                <canvas id="grafikBatangv1" width="100%" height="30"></canvas>
              </div>
              <div class="card-footer small text-muted">Variabel Harga</div>
            </div>

          </div>

          <div class="col-lg-6">

            <!-- grafik variable keramahan -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                Variable keramahan</div>
              <div class="card-body">
                <canvas id="grafikBatangv2" width="100%" height="30"></canvas>
              </div>
              <div class="card-footer small text-muted">Variabel Keramahan</div>
            </div>

          </div>

          <div class="col-lg-6">

            <!-- grafik Variabel kebersihan dan kualitas barang -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                Variabel kebersihan dan kualitas barang</div>
              <div class="card-body">
                <canvas id="grafikBatangv3" width="100%" height="30"></canvas>
              </div>
              <div class="card-footer small text-muted">Variabel kebersihan dan kualitas barang</div>
            </div>

          </div>

          <div class="col-lg-6">

            <!-- grafik Variabel kelengkapan barang -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                Variabel kelengkapan barang</div>
              <div class="card-body">
                <canvas id="grafikBatangv4" width="100%" height="30"></canvas>
              </div>
              <div class="card-footer small text-muted">Variabel kelengkapan barang</div>
            </div>

          </div>

          <div class="col-lg-6">

            <!-- grafik Variabel kenyamanan bertransaksi -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                Variabel kenyamanan bertransaksi</div>
              <div class="card-body">
                <canvas id="grafikBatangv5" width="100%" height="30"></canvas>
              </div>
              <div class="card-footer small text-muted">Variabel kenyamanan bertransaksi</div>
            </div>

          </div>

        </div>
        <!-- end row -->

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
  
  <!-- Demo scripts for this page-->
  <?php $this->load->view("_template/_js.php") ?>

  <script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Bar Chart Example
    var ctx = document.getElementById("grafikBatangv1");
    var grafikBatangv1 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["<?= $label[0]?>", "<?= $label[1]?>", "<?= $label[2]?>", "<?= $label[3]?>", "<?= $label[4]?>"],
        datasets: [{
        
        backgroundColor: "rgba(2,117,216,1)",
        borderColor: "rgba(2,117,216,1)",
        data: [<?= $v1['sp'] . ", "  . $v1['puas'] . ", "  . $v1['netral'] . ", "  . $v1['tp'] . ", "  . $v1['stp']?>],
        }],
    },
    options: {
        scales: {
        xAxes: [{
            
            gridLines: {
            display: false
            },
            ticks: {
            maxTicksLimit: 6
            }
        }],
        yAxes: [{
            ticks: {
            min: 0,
            max: <?php echo $v1['tertinggi'] ?>,
            maxTicksLimit: 5
            },
            gridLines: {
            display: true
            }
        }],
        },
        legend: {
        display: false
        }
    }
    });

    // Bar Chart Example
    var ctx = document.getElementById("grafikBatangv2");
    var grafikBatangv2 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["<?= $label[0]?>", "<?= $label[1]?>", "<?= $label[2]?>", "<?= $label[3]?>", "<?= $label[4]?>"],
        datasets: [{
        
        backgroundColor: "rgba(2,117,216,1)",
        borderColor: "rgba(2,117,216,1)",
        data: [<?= $v2['sp'] . ", "  . $v2['puas'] . ", "  . $v2['netral'] . ", "  . $v2['tp'] . ", "  . $v2['stp']?>],
        }],
    },
    options: {
        scales: {
        xAxes: [{
            
            gridLines: {
            display: false
            },
            ticks: {
            maxTicksLimit: 6
            }
        }],
        yAxes: [{
            ticks: {
            min: 0,
            max: <?php echo $v2['tertinggi'] ?>,
            maxTicksLimit: 5
            },
            gridLines: {
            display: true
            }
        }],
        },
        legend: {
        display: false
        }
    }
    });

    // Bar Chart Example
    var ctx = document.getElementById("grafikBatangv3");
    var grafikBatangv3 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["<?= $label[0]?>", "<?= $label[1]?>", "<?= $label[2]?>", "<?= $label[3]?>", "<?= $label[4]?>"],
        datasets: [{
        
        backgroundColor: "rgba(2,117,216,1)",
        borderColor: "rgba(2,117,216,1)",
        data: [<?= $v3['sp'] . ", "  . $v3['puas'] . ", "  . $v3['netral'] . ", "  . $v3['tp'] . ", "  . $v3['stp']?>],
        }],
    },
    options: {
        scales: {
        xAxes: [{
            
            gridLines: {
            display: false
            },
            ticks: {
            maxTicksLimit: 6
            }
        }],
        yAxes: [{
            ticks: {
            min: 0,
            max: <?php echo $v3['tertinggi'] ?>,
            maxTicksLimit: 5
            },
            gridLines: {
            display: true
            }
        }],
        },
        legend: {
        display: false
        }
    }
    });

    // Bar Chart Example
    var ctx = document.getElementById("grafikBatangv4");
    var grafikBatangv4 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["<?= $label[0]?>", "<?= $label[1]?>", "<?= $label[2]?>", "<?= $label[3]?>", "<?= $label[4]?>"],
        datasets: [{
        
        backgroundColor: "rgba(2,117,216,1)",
        borderColor: "rgba(2,117,216,1)",
        data: [<?= $v4['sp'] . ", "  . $v4['puas'] . ", "  . $v4['netral'] . ", "  . $v4['tp'] . ", "  . $v4['stp']?>],
        }],
    },
    options: {
        scales: {
        xAxes: [{
            
            gridLines: {
            display: false
            },
            ticks: {
            maxTicksLimit: 6
            }
        }],
        yAxes: [{
            ticks: {
            min: 0,
            max: <?php echo $v4['tertinggi'] ?>,
            maxTicksLimit: 5
            },
            gridLines: {
            display: true
            }
        }],
        },
        legend: {
        display: false
        }
    }
    });

    // Bar Chart Example
    var ctx = document.getElementById("grafikBatangv5");
    var grafikBatangv5 = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["<?= $label[0]?>", "<?= $label[1]?>", "<?= $label[2]?>", "<?= $label[3]?>", "<?= $label[4]?>"],
        datasets: [{
        
        backgroundColor: "rgba(2,117,216,1)",
        borderColor: "rgba(2,117,216,1)",
        data: [<?= $v5['sp'] . ", "  . $v5['puas'] . ", "  . $v5['netral'] . ", "  . $v5['tp'] . ", "  . $v5['stp']?>],
        }],
    },
    options: {
        scales: {
        xAxes: [{
            
            gridLines: {
            display: false
            },
            ticks: {
            maxTicksLimit: 6
            }
        }],
        yAxes: [{
            ticks: {
            min: 0,
            max: <?php echo $v5['tertinggi'] ?>,
            maxTicksLimit: 5
            },
            gridLines: {
            display: true
            }
        }],
        },
        legend: {
        display: false
        }
    }
    });

    var ctx = document.getElementById("pie");
    var pie = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["<?= $jklabel[0]?>", "<?= $jklabel[1]?>"],
        datasets: [{
        data: [<?= "$jk[0], $jk[1]"?>],
        backgroundColor: ['#007bff', '#dc3545'],
        }],
    },
    });

  </script>

</body>

</html>
