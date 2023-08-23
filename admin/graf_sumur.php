<?php require_once '../_config/config.php';
  ob_start();
  session_start();
  if(!isset($_SESSION['username'])){
    die("<b>Oops! Access Denied ! </b>
      <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
      <button type='button' onclick=location.href='../login.php'>Click to Login</button>");
  }
  if($_SESSION['level']!="admin"){
    die("<b>Oops!</b> Access Failed.
      <p>Anda Bukan dari ADMIN.</p>
      <button type='button' onclick=location.href='../login.php'>Click to Login</button>");
  }
?>

<?php require_once '../_config/config.php';
  include '../_title.php';
  include './_sidebar_user.php';
?>
<?php
  include ('../_config/config.php');
  $gsumber2      = mysqli_query($con, "SELECT * FROM t_sumber2");
  $gsumber3a      = mysqli_query($con, "SELECT * FROM t_sumber3a");
  $gsumber3b      = mysqli_query($con, "SELECT * FROM t_sumber3b");
  $gsumber4      = mysqli_query($con, "SELECT * FROM t_sumber4");
  $gsumber5      = mysqli_query($con, "SELECT * FROM t_sumber5");
?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="../plugins/highcharts/highcharts.js">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <script type="text/javascript" src="../plugins/chart.js/Chart.js"></script>
  <script type="text/javascript" src="../plugins/jquery/jquery.min.js"></script>

  <script type="text/javascript" src="../plugins/highcharts/highcharts.js"></script>
  <script type="text/javascript" src="../dist/js/jquery-3.6.0.min.js"></script>
  <script src="../dist/js/jquery-latest.js"></script> 
  <script>
    var refreshId = setInterval(function()
    {
       $('#grafiksumur').load('grafiksumur.php');
    }, 1000*10);

    var refreshId2 = setInterval(function()
    {
       $('#indexnonregular').load('autononregular.php');
    }, 1000);

    var refreshId3 = setInterval(function()
    {
       $('#indexbudget').load('autobudget.php');
    }, 1000);
  </script>

  <style type="text/css">
    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 310px;
        max-width: 800px;
        margin: 1em auto;
    }

    #container {
        height: 400px;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }

  </style>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
  <?php
    $tampilPeg    =mysqli_query($con, "SELECT * FROM user WHERE username='$_SESSION[username]'");
    $peg    =mysqli_fetch_array($tampilPeg);
  ?>
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="./index.php" class="nav-link">Home</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i> <?php echo $peg['username'];?>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <div class="media">
                <img src="../dist/img/MEKARSARI_120x120.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    <?php echo $peg['username'];?>
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm"><?php echo $peg['jabatan'];?></p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">AKTIF</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">D E W A</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">WWTP</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-info">
                <?php 
                  $servername     = "localhost";
                  $database       = "dewa";
                  $username       = "root";
                  $password       = "";
                  $con = mysqli_connect($servername, $username, $password, $database);
                ?>
                <div class="container-fluid mt-4">
                  <form action="graf_sumur.php" method="get">
                    <div class="row g-3 align-items-center">
                      <div class="col-auto">
                        <label class="col-form-label">Periode</label>
                      </div>
                      <div class="col-auto">
                        <input type="date" class="form-control" name="dari" value="<?php echo date('Y-m-d') ?>" required>
                      </div>
                      <div class="col-auto">
                        s/d
                      </div>
                      <div class="col-auto">
                        <input type="date" class="form-control" name="ke" value="<?php echo date('Y-m-d') ?>" required>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Submit</button>
                        <a href="graf_sumur.php" class="btn btn-default"><i class="fas fa-sync-alt"></i> Refresh</a>
                      </div>
                    </div>
                  </form>
                  <p></p>

                </div>
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="card card-info card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    SUMUR
                  </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">

                  <?php

                    $bulan1 = date('Y-m');
                    if(isset($_GET['dari']) && isset($_GET['ke'])){
                      $cek = "SELECT * FROM t_sumur WHERE tanggal BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'";
                    }else{
                      $cek = "SELECT * from t_sumur WHERE bulan='$bulan1' ORDER BY id_header";   
                    }
                    $result = $con->query($cek);

                    $arrayTanggal = array();
                    $arrayPakai = array();
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        $arrayTanggal[] = '"'.$row['tanggal'].'"';
                        $arrayPakai[] = $row['sumur_pemakaian'];
                      }
                    }
                  ?>

                  <script type="text/javascript">
                    $(function(){
                      var chart = new Highcharts.Chart({
                          chart: {
                              renderTo: 'GrafikLinesumur',
                              type: 'spline',
                          },
                          title: {
                              text: 'SUMUR BOR'
                          },
                          xAxis: {
                              categories: [<?= join($arrayTanggal, ',') ?>],
                              title: {
                                  text: null
                              }
                          },
                          yAxis: {
                              min: 0,
                              title: {
                                  text: 'Meter Kubik',
                                  align: 'high'
                              },
                              labels: {
                                  overflow: 'justify'
                              }
                          },
                          tooltip: {
                              valueSuffix: ' m3'
                          },
                          plotOptions: {
                              bar: {
                                  dataLabels: {
                                      enabled: true
                                  }
                              }
                          },
                          legend: {
                              layout: 'vertical',
                              align: 'right',
                              verticalAlign: 'top',
                              x: -40,
                              y: 80,
                              floating: true,
                              borderWidth: 1,
                              backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                              shadow: true
                          },
                          credits: {
                              enabled: false
                          },
                          series: [{
                              name: 'SUMUR BOR',
                              data: [<?= join($arrayPakai, ',') ?>],
                              color: '#258fda',
                          }]
                      });
                    });
                  </script>
                  <div class="row">
                    <div class="col-lg-12">
                      <div id="GrafikLinesumur" style="height: 250px"></div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>


    </div>

      <?php include '../_footer.php'; ?>

      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
  </div>

  <script src="../plugins/highcharts/code/highcharts.js"></script>
  <script src="../plugins/highcharts/code/modules/exporting.js"></script>
  <script src="../plugins/highcharts/code/modules/export-data.js"></script>
  <script src="../plugins/highcharts/code/modules/accessibility.js"></script>

  <script src="../plugins/jquery/jquery.min.js"></script>
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="../plugins/toastr/toastr.min.js"></script>
  <script src="../dist/js/adminlte.min.js"></script>
  <script src="../dist/js/demo.js"></script>

  <script  type="text/javascript">
    var ctx = document.getElementById("linechart").getContext("2d");
    var data = {
      labels: [<?php while ($p = mysqli_fetch_array($gsumber2)) { echo '"' . $p['tanggal'] . '",';}?>],
      datasets: [
        {
          label: "Sumber 2",
          fill: false,
          lineTension: 0.1,
          backgroundColor: "#29B0D0",
          borderColor: "#29B0D0",
          pointHoverBackgroundColor: "#29B0D0",
          pointHoverBorderColor: "#29B0D0",
          data: [<?php while ($p = mysqli_fetch_array($gsumber2)) { echo '"' . $p['pemakaian'] . '",';}?>]
        },
        {
          label: "SUMBER 3A",
          fill: false,
          lineTension: 0.1,
          backgroundColor: "#2A516E",
          borderColor: "#2A516E",
          pointHoverBackgroundColor: "#2A516E",
          pointHoverBorderColor: "#2A516E",
          data: [<?php while ($p = mysqli_fetch_array($gsumber3a)) { echo '"' . $p['pemakaian'] . '",';}?>]
        },
        {
          label: "SUMBER 3B",
          fill: false,
          lineTension: 0.1,
          backgroundColor: "#F07124",
          borderColor: "#F07124",
          pointHoverBackgroundColor: "#F07124",
          pointHoverBorderColor: "#F07124",
          data: [<?php while ($p = mysqli_fetch_array($gsumber3b)) { echo '"' . $p['pemakaian'] . '",';}?>]
        },
        {
          label: "SUMBER 4",
          fill: false,
          lineTension: 0.1,
          backgroundColor: "#CBE0E3",
          borderColor: "#CBE0E3",
          pointHoverBackgroundColor: "#CBE0E3",
          pointHoverBorderColor: "#CBE0E3",
          data: [<?php while ($p = mysqli_fetch_array($gsumber4)) { echo '"' . $p['pemakaian'] . '",';}?>]
        },
        {
          label: "SUMBER 5",
          fill: false,
          lineTension: 0.1,
          backgroundColor: "#979193",
          borderColor: "#979193",
          pointHoverBackgroundColor: "#979193",
          pointHoverBorderColor: "#979193",
          data: [<?php while ($p = mysqli_fetch_array($gsumber5)) { echo '"' . $p['pemakaian'] . '",';}?>]
        }
        ]
    };

    var myBarChart = new Chart(ctx, {
      type: 'line',
      data: data,
      options: {
      legend: {
        display: true
      },
      barValueSpacing: 20,
      scales: {
        yAxes: [{
            ticks: {
                min: 0,
            }
        }],
        xAxes: [{
          gridLines: {
            color: "rgba(0, 0, 0, 0)",
            }
          }]
        }
      }
    });
  </script>

  <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultInfo').click(function() {
        Toast.fire({
          icon: 'info',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultError').click(function() {
        Toast.fire({
          icon: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultWarning').click(function() {
        Toast.fire({
          icon: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultQuestion').click(function() {
        Toast.fire({
          icon: 'question',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastrDefaultSuccess').click(function() {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultInfo').click(function() {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultError').click(function() {
        toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultWarning').click(function() {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });

      $('.toastsDefaultDefault').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultTopLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'topLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomRight').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomRight',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultAutohide').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          autohide: true,
          delay: 750,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultNotFixed').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          fixed: false,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultFull').click(function() {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          icon: 'fas fa-envelope fa-lg',
        })
      });
      $('.toastsDefaultFullImage').click(function() {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          image: '../../dist/img/user3-128x128.jpg',
          imageAlt: 'User Picture',
        })
      });
      $('.toastsDefaultSuccess').click(function() {
        $(document).Toasts('create', {
          class: 'bg-success', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultInfo').click(function() {
        $(document).Toasts('create', {
          class: 'bg-info', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultWarning').click(function() {
        $(document).Toasts('create', {
          class: 'bg-warning', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultDanger').click(function() {
        $(document).Toasts('create', {
          class: 'bg-danger', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultMaroon').click(function() {
        $(document).Toasts('create', {
          class: 'bg-maroon', 
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
    });

  </script>
</body>
</html>
