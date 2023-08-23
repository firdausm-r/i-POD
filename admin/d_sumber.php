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
                <li class="breadcrumb-item active">Sumber</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container">
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
                  <form action="d_sumber.php" method="get">
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
                        <a href="d_sumber.php" class="btn btn-default"><i class="fas fa-sync-alt"></i> Refresh</a>
                      </div>
                    </div>
                  </form>
                  <p></p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_header ORDER BY id_header DESC LIMIT 1");
              $header = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_sumber2 ORDER BY id_sumber2 DESC LIMIT 1");
              $sumber2 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_sumber3a ORDER BY id_sumber3a DESC LIMIT 1");
              $sumber3a = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_sumber3b ORDER BY id_sumber3b DESC LIMIT 1");
              $sumber3b = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_sumber4 ORDER BY id_sumber4 DESC LIMIT 1");
              $sumber4 = mysqli_fetch_assoc($query);
            ?>

            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_mekarsari5 ORDER BY id_mekarsari5 DESC LIMIT 1");
              $mekarsari5 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_mekarsari6 ORDER BY id_mekarsari6 DESC LIMIT 1");
              $mekarsari6 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_mekarsari12 ORDER BY id_mekarsari12 DESC LIMIT 1");
              $mekarsari12 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_mekarsari26 ORDER BY id_mekarsari26 DESC LIMIT 1");
              $mekarsari26 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_bbp7 ORDER BY id_bbp7 DESC LIMIT 1");
              $bbp7 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_bbp13 ORDER BY id_bbp13 DESC LIMIT 1");
              $bbp13 = mysqli_fetch_assoc($query);
            ?>

            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_overflow14 ORDER BY id_overflow14 DESC LIMIT 1");
              $overflow14 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_overflow15 ORDER BY id_overflow15 DESC LIMIT 1");
              $overflow15 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_overflow16 ORDER BY id_overflow16 DESC LIMIT 1");
              $overflow16 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_overflow17 ORDER BY id_overflow17 DESC LIMIT 1");
              $overflow17 = mysqli_fetch_assoc($query);
            ?>

            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_masyarakat1 ORDER BY id_masyarakat DESC LIMIT 1");
              $masyarakat1 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_masyarakat2 ORDER BY id_masyarakat DESC LIMIT 1");
              $masyarakat2 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_masyarakat3 ORDER BY id_masyarakat DESC LIMIT 1");
              $masyarakat3 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_masyarakat4 ORDER BY id_masyarakat DESC LIMIT 1");
              $masyarakat4 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_masyarakat20 ORDER BY id_masyarakat DESC LIMIT 1");
              $masyarakat20 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_masyarakat21 ORDER BY id_masyarakat DESC LIMIT 1");
              $masyarakat21 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_masyarakat22 ORDER BY id_masyarakat DESC LIMIT 1");
              $masyarakat22 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_masyarakat23 ORDER BY id_masyarakat DESC LIMIT 1");
              $masyarakat23 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_masyarakat24 ORDER BY id_masyarakat DESC LIMIT 1");
              $masyarakat24 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_masyarakat25 ORDER BY id_masyarakat DESC LIMIT 1");
              $masyarakat25 = mysqli_fetch_assoc($query);
            ?>
            <?php 
              require_once '../_config/config.php';
              $query = mysqli_query($con, "SELECT * FROM t_flowrate where name_flowrate='FLOWRATE SUMBER 3' ORDER BY id_flowrate DESC LIMIT 1");
              $flowratel = mysqli_fetch_assoc($query);
            ?>


            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-gradient-info">
                <span class="info-box-icon"><i class="fas fa-tint"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">SUMBER 2</span>
                  <span class="info-box-number"><?php echo number_format($header['sumber2_pemakaian'],0,',','.') ?> m<sup>3</sup></span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                  </div>
                  <span class="progress-description">
                    <?php echo $new_date = date('d-m-Y', strtotime($sumber2['tanggal']));?> Usage : <?php echo number_format($sumber2['pemakaian'],0,',','.') ?> m<sup>3</sup> 
                  </span>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-gradient-info">
                <span class="info-box-icon"><i class="fas fa-tint"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">SUMBER 3A</span>
                  <span class="info-box-number"><?php echo number_format($header['sumber3a_pemakaian'],0,',','.') ?> m<sup>3</sup></span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                  </div>
                  <span class="progress-description">
                    <?php echo $new_date = date('d-m-Y', strtotime($sumber3a['tanggal']));?> Usage : <?php echo number_format($sumber3a['pemakaian'],0,',','.') ?> m<sup>3</sup> 
                  </span>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-gradient-info">
                <span class="info-box-icon"><i class="fas fa-tint"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">SUMBER 3B</span>
                  <span class="info-box-number"><?php echo number_format($header['sumber3b_pemakaian'],0,',','.') ?> m<sup>3</sup></span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                  </div>
                  <span class="progress-description">
                    <?php echo $new_date = date('d-m-Y', strtotime($sumber3b['tanggal']));?> Usage : <?php echo number_format($sumber3b['pemakaian'],0,',','.') ?> m<sup>3</sup> 
                  </span>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box bg-gradient-info">
                <span class="info-box-icon"><i class="fas fa-tint"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">SUMBER 4</span>
                  <span class="info-box-number"><?php echo number_format($header['sumber4_pemakaian'],0,',','.') ?> m<sup>3</sup></span>

                  <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                  </div>
                  <span class="progress-description">
                    <?php echo $new_date = date('d-m-Y', strtotime($sumber4['tanggal']));?> Usage : <?php echo number_format($sumber4['pemakaian'],0,',','.') ?> m<sup>3</sup> 
                  </span>
                </div>
              </div>
            </div>


            <div class="col-md-3">
              <div class="card card-info card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    Sumber 2
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
                      $cek = "SELECT * FROM t_sumber2 WHERE tanggal BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'";
                    }else{
                      $cek = "SELECT * from t_sumber2 WHERE bulan='$bulan1' ORDER BY id_header";   
                    }
                    $result = $con->query($cek);

                    $arrayTanggal = array();
                    $arrayPakai = array();
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        $arrayTanggal[] = '"'.$row['tanggal'].'"';
                        $arrayPakai[] = $row['pemakaian'];
                      }
                    }
                  ?>

                  <script type="text/javascript">
                    $(function(){
                      var chart = new Highcharts.Chart({
                          chart: {
                              renderTo: 'GrafikLineSumber',
                              type: 'spline',
                          },
                          title: {
                              text: 'Sumber 2'
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
                              name: 'Volume',
                              data: [<?= join($arrayPakai, ',') ?>],
                              color: '#258fda',
                          }]
                      });
                    });
                  </script>
                  <div class="row">
                      <div class="col-lg-12">
                        <div id="GrafikLineSumber" style="height: 250px"></div>
                      </div>
                  </div> 
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card card-info card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    Sumber 3A
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
                      $cek = "SELECT * FROM t_sumber3a WHERE tanggal BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'";
                    }else{
                      $cek = "SELECT * from t_sumber3a WHERE bulan='$bulan1' ORDER BY id_header";   
                    }
                    $result = $con->query($cek);

                    $arrayTanggal = array();
                    $arrayPakai = array();
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        $arrayTanggal[] = '"'.$row['tanggal'].'"';
                        $arrayPakai[] = $row['pemakaian'];
                      }
                    }
                  ?>

                  <script type="text/javascript">
                    $(function(){
                      var chart = new Highcharts.Chart({
                          chart: {
                              renderTo: 'GrafikLineSumber3a',
                              type: 'spline',
                          },
                          title: {
                              text: 'Sumber 3A'
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
                              name: 'Volume',
                              data: [<?= join($arrayPakai, ',') ?>],
                              color: '#258fda',
                          }]
                      });
                    });
                  </script>
                  <div class="row">
                      <div class="col-lg-12">
                        <div id="GrafikLineSumber3a" style="height: 250px"></div>
                      </div>
                  </div> 
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card card-info card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    Sumber 3B
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
                      $cek = "SELECT * FROM t_sumber3b WHERE tanggal BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'";
                    }else{
                      $cek = "SELECT * from t_sumber3b WHERE bulan='$bulan1' ORDER BY id_header";   
                    }
                    $result = $con->query($cek);

                    $arrayTanggal = array();
                    $arrayPakai = array();
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        $arrayTanggal[] = '"'.$row['tanggal'].'"';
                        $arrayPakai[] = $row['pemakaian'];
                      }
                    }
                  ?>

                  <script type="text/javascript">
                    $(function(){
                      var chart = new Highcharts.Chart({
                          chart: {
                              renderTo: 'GrafikLineSumber3b',
                              type: 'spline',
                          },
                          title: {
                              text: 'Sumber 3B'
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
                              name: 'Volume',
                              data: [<?= join($arrayPakai, ',') ?>],
                              color: '#258fda',
                          }]
                      });
                    });
                  </script>
                  <div class="row">
                      <div class="col-lg-12">
                        <div id="GrafikLineSumber3b" style="height: 250px"></div>
                      </div>
                  </div> 
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card card-info card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    Sumber 4
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
                      $cek = "SELECT * FROM t_sumber4 WHERE tanggal BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'";
                    }else{
                      $cek = "SELECT * from t_sumber4 WHERE bulan='$bulan1' ORDER BY id_header";   
                    }
                    $result = $con->query($cek);

                    $arrayTanggal = array();
                    $arrayPakai = array();
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        $arrayTanggal[] = '"'.$row['tanggal'].'"';
                        $arrayPakai[] = $row['pemakaian'];
                      }
                    }
                  ?>

                  <script type="text/javascript">
                    $(function(){
                      var chart = new Highcharts.Chart({
                          chart: {
                              renderTo: 'GrafikLineSumber4',
                              type: 'spline',
                          },
                          title: {
                              text: 'Sumber 4'
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
                              name: 'Volume',
                              data: [<?= join($arrayPakai, ',') ?>],
                              color: '#258fda',
                          }]
                      });
                    });
                  </script>
                  <div class="row">
                      <div class="col-lg-12">
                        <div id="GrafikLineSumber4" style="height: 250px"></div>
                      </div>
                  </div> 
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="card card-info card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    Historycal Sumber <sup><?php echo $new_date = date('d-m-Y', strtotime($sumber3b['tanggal']));?></sup>
                  </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="col-md-12">
                    <div class="card card-info collapsed-card">
                      <div class="card-header">
                        <h3 class="card-title"><i class="far fa-circle"></i> Production <sup><?php echo $new_date = date('d-m-Y', strtotime($sumber3b['tanggal']));?></sup> </h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body">
                        <table class="table table-striped">
                          <tbody>
                            <tr>
                              <td>MEKARSARI</td>
                              <td>: <?php echo number_format($mekarsari5['pemakaian']+$mekarsari6['pemakaian']+$mekarsari12['pemakaian']+$mekarsari26['pemakaian'],0,',','.') ?> m<sup>3</sup></td>
                            </tr>
                            <tr>
                              <td>BBP</td>
                              <td>: <?php echo number_format($bbp7['pemakaian']+$bbp13['pemakaian'],0,',','.') ?> m<sup>3</sup></td>
                            </tr>
                            <tr>
                              <td>OVERFLOW</td>
                              <td>: <?php echo number_format($overflow14['pemakaian']+$overflow15['pemakaian']+$overflow16['pemakaian']+$overflow17['pemakaian'],0,',','.') ?> m<sup>3</sup></td>
                            </tr>
                            <tr>
                              <td>MASYARAKAT</td>
                              <td>: <?php echo number_format($masyarakat1['pemakaian']+$masyarakat2['pemakaian']+$masyarakat3['pemakaian']+$masyarakat4['pemakaian']+$masyarakat20['pemakaian']+$masyarakat21['pemakaian']+$masyarakat22['pemakaian']+$masyarakat23['pemakaian']+$masyarakat24['pemakaian']+$masyarakat25['pemakaian'],0,',','.') ?> m<sup>3</sup></td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td>TOTAL</td>
                              <td>: <?php echo number_format($mekarsari5['pemakaian']+$mekarsari6['pemakaian']+$mekarsari12['pemakaian']+$mekarsari26['pemakaian']+$bbp7['pemakaian']+$bbp13['pemakaian'],0,',','.') ?> m<sup>3</sup></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="card card-info card-outline">
                      <div class="card-header">
                        <h3 class="card-title"><i class="far fa-circle"></i> Level Sumber <sup><?php echo $new_date = date('d-m-Y', strtotime($sumber3b['tanggal']));?></sup> </h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="col-12 col-md-3 text-center">
                          <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"
                                 value="<?php echo $flowratel['level_sumber'] ?>" data-width="120" data-height="120" data-fgColor="#00c0ef" data-max="10">

                          <div class="knob-label"><?php echo $flowratel['level_sumber'] ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                  

            <div class="col-md-6">
              <div class="card card-info card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    Historycal Flow Rate Sumber
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
                      $cek = "SELECT * FROM t_flowrate WHERE name_flowrate='FLOWRATE SUMBER 3' AND tanggal BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'";
                    }else{
                      $cek = "SELECT * from t_flowrate WHERE name_flowrate='FLOWRATE SUMBER 3' bulan='$bulan1' ORDER BY id_header";   
                    }
                    $result = $con->query($cek);

                    $arrayTanggal = array();
                    $arrayPakai = array();
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        $arrayTanggal[] = '"'.$row['tanggal'].'"';
                        $arrayPakai[] = $row['flowrate'];
                      }
                    }
                  ?>

                  <script type="text/javascript">
                    $(function(){
                      var chart = new Highcharts.Chart({
                          chart: {
                              renderTo: 'GrafikLineFlowrate',
                              type: 'spline',
                          },
                          title: {
                              text: 'Tracking Flowrate Sumber'
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
                                  text: 'ltr / sec',
                                  align: 'high'
                              },
                              labels: {
                                  overflow: 'justify'
                              }
                          },
                          tooltip: {
                              valueSuffix: ' ltr / sec'
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
                              name: 'Flowrate',
                              data: [<?= join($arrayPakai, ',') ?>],
                              color: '#258fda',
                          }]
                      });
                    });
                  </script>
                  <div class="row">
                      <div class="col-lg-12">
                        <div id="GrafikLineFlowrate" style="height: 320px;"></div>
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

  <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
  <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
  <script>
    $(function () {
      /* jQueryKnob */

      $('.knob').knob({
        /*change : function (value) {
         //console.log("change : " + value);
         },
         release : function (value) {
         console.log("release : " + value);
         },
         cancel : function () {
         console.log("cancel : " + this.value);
         },*/
        draw: function () {

          // "tron" case
          if (this.$.data('skin') == 'tron') {

            var a   = this.angle(this.cv)  // Angle
              ,
                sa  = this.startAngle          // Previous start angle
              ,
                sat = this.startAngle         // Start angle
              ,
                ea                            // Previous end angle
              ,
                eat = sat + a                 // End angle
              ,
                r   = true

            this.g.lineWidth = this.lineWidth

            this.o.cursor
            && (sat = eat - 0.3)
            && (eat = eat + 0.3)

            if (this.o.displayPrevious) {
              ea = this.startAngle + this.angle(this.value)
              this.o.cursor
              && (sa = ea - 0.3)
              && (ea = ea + 0.3)
              this.g.beginPath()
              this.g.strokeStyle = this.previousColor
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
              this.g.stroke()
            }

            this.g.beginPath()
            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
            this.g.stroke()

            this.g.lineWidth = 2
            this.g.beginPath()
            this.g.strokeStyle = this.o.fgColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
            this.g.stroke()

            return false
          }
        }
      })
      /* END JQUERY KNOB */

      //INITIALIZE SPARKLINE CHARTS
      $('.sparkline').each(function () {
        var $this = $(this)
        $this.sparkline('html', $this.data())
      })

      /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
      drawDocSparklines()
      drawMouseSpeedDemo()

    })

    function drawDocSparklines() {

      // Bar + line composite charts
      $('#compositebar').sparkline('html', {
        type    : 'bar',
        barColor: '#aaf'
      })
      $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {
          composite: true,
          fillColor: false,
          lineColor: 'red'
        })


      // Line charts taking their values from the tag
      $('.sparkline-1').sparkline()

      // Larger line charts for the docs
      $('.largeline').sparkline('html',
        {
          type  : 'line',
          height: '2.5em',
          width : '4em'
        })

      // Customized line chart
      $('#linecustom').sparkline('html',
        {
          height      : '1.5em',
          width       : '8em',
          lineColor   : '#f00',
          fillColor   : '#ffa',
          minSpotColor: false,
          maxSpotColor: false,
          spotColor   : '#77f',
          spotRadius  : 3
        })

      // Bar charts using inline values
      $('.sparkbar').sparkline('html', { type: 'bar' })

      $('.barformat').sparkline([1, 3, 5, 3, 8], {
        type               : 'bar',
        tooltipFormat      : '{{value:levels}} - {{value}}',
        tooltipValueLookups: {
          levels: $.range_map({
            ':2' : 'Low',
            '3:6': 'Medium',
            '7:' : 'High'
          })
        }
      })

      // Tri-state charts using inline values
      $('.sparktristate').sparkline('html', { type: 'tristate' })
      $('.sparktristatecols').sparkline('html',
        {
          type    : 'tristate',
          colorMap: {
            '-2': '#fa7',
            '2' : '#44f'
          }
        })

      // Composite line charts, the second using values supplied via javascript
      $('#compositeline').sparkline('html', {
        fillColor     : false,
        changeRangeMin: 0,
        chartRangeMax : 10
      })
      $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {
          composite     : true,
          fillColor     : false,
          lineColor     : 'red',
          changeRangeMin: 0,
          chartRangeMax : 10
        })

      // Line charts with normal range marker
      $('#normalline').sparkline('html',
        {
          fillColor     : false,
          normalRangeMin: -1,
          normalRangeMax: 8
        })
      $('#normalExample').sparkline('html',
        {
          fillColor       : false,
          normalRangeMin  : 80,
          normalRangeMax  : 95,
          normalRangeColor: '#4f4'
        })

      // Discrete charts
      $('.discrete1').sparkline('html',
        {
          type     : 'discrete',
          lineColor: 'blue',
          xwidth   : 18
        })
      $('#discrete2').sparkline('html',
        {
          type          : 'discrete',
          lineColor     : 'blue',
          thresholdColor: 'red',
          thresholdValue: 4
        })

      // Bullet charts
      $('.sparkbullet').sparkline('html', { type: 'bullet' })

      // Pie charts
      $('.sparkpie').sparkline('html', {
        type  : 'pie',
        height: '1.0em'
      })

      // Box plots
      $('.sparkboxplot').sparkline('html', { type: 'box' })
      $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
        {
          type        : 'box',
          raw         : true,
          showOutliers: true,
          target      : 6
        })

      // Box plot with specific field order
      $('.boxfieldorder').sparkline('html', {
        type                     : 'box',
        tooltipFormatFieldlist   : ['med', 'lq', 'uq'],
        tooltipFormatFieldlistKey: 'field'
      })

      // click event demo sparkline
      $('.clickdemo').sparkline()
      $('.clickdemo').bind('sparklineClick', function (ev) {
        var sparkline = ev.sparklines[0],
            region    = sparkline.getCurrentRegionFields()
        value         = region.y
        alert('Clicked on x=' + region.x + ' y=' + region.y)
      })

      // mouseover event demo sparkline
      $('.mouseoverdemo').sparkline()
      $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
        var sparkline = ev.sparklines[0],
            region    = sparkline.getCurrentRegionFields()
        value         = region.y
        $('.mouseoverregion').text('x=' + region.x + ' y=' + region.y)
      }).bind('mouseleave', function () {
        $('.mouseoverregion').text('')
      })
    }

    /**
     ** Draw the little mouse speed animated graph
     ** This just attaches a handler to the mousemove event to see
     ** (roughly) how far the mouse has moved
     ** and then updates the display a couple of times a second via
     ** setTimeout()
     **/
    function drawMouseSpeedDemo() {
      var mrefreshinterval = 500 // update display every 500ms
      var lastmousex       = -1
      var lastmousey       = -1
      var lastmousetime
      var mousetravel      = 0
      var mpoints          = []
      var mpoints_max      = 30
      $('html').mousemove(function (e) {
        var mousex = e.pageX
        var mousey = e.pageY
        if (lastmousex > -1) {
          mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey))
        }
        lastmousex = mousex
        lastmousey = mousey
      })
      var mdraw = function () {
        var md      = new Date()
        var timenow = md.getTime()
        if (lastmousetime && lastmousetime != timenow) {
          var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000)
          mpoints.push(pps)
          if (mpoints.length > mpoints_max) {
            mpoints.splice(0, 1)
          }
          mousetravel = 0
          $('#mousespeed').sparkline(mpoints, {
            width        : mpoints.length * 2,
            tooltipSuffix: ' pixels per second'
          })
        }
        lastmousetime = timenow
        setTimeout(mdraw, mrefreshinterval)
      }
      // We could use setInterval instead, but I prefer to do it this way
      setTimeout(mdraw, mrefreshinterval);
    }
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
