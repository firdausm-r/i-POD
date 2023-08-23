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
      <p>Anda Bukan dari Tim PERFORMA.</p>
      <button type='button' onclick=location.href='../login.php'>Click to Login</button>");
  }
?>

<?php require_once '../_config/config.php';
  include '../_title.php';
  include './_sidebar_user.php';
?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
          <a href="../index3.php" class="nav-link">Home</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i> <?php echo $peg['nama']; ?>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <div class="media">
                <img src="../dist/img/avatar04.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    <?php echo $peg['nama']; ?>
                    <span class="float-right text-sm text-primary"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm"><?php echo $peg['jabatan']; ?></p>
                  <p class="text-sm"><?php echo $peg['departement']; ?></p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer"><?php echo $peg['status_level']; ?></a>
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
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->


      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Create Header | <i class="fas fa-plus-circle"></i> Add New</h3>
                </div>
                <div class="card-body">
                  <?php 
                    require_once '../_config/config.php';
                    $today = date('ymd');
                    $char = 'REG-'. $today . '9101';
                    $query = mysqli_query($con, "SELECT max(id_header) as max_id FROM t_header WHERE id_header LIKE '{$char}%' ORDER BY id_header DESC LIMIT 1");
                    $data = mysqli_fetch_assoc($query);

                    $getId = $data['max_id'];
                    $no = substr($getId, -2, 2);
                    $no = (int) $no;
                    $no += 1;
                    $newId = $char . sprintf("%02s", $no);
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
                    $query = mysqli_query($con, "SELECT * FROM t_sumber5 ORDER BY id_sumber5 DESC LIMIT 1");
                    $sumber5 = mysqli_fetch_assoc($query);
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
                    $query = mysqli_query($con, "SELECT * FROM t_sanitasi1 ORDER BY id_sanitasi DESC LIMIT 1");
                    $sanitasi1 = mysqli_fetch_assoc($query);
                  ?>
                  <?php 
                    require_once '../_config/config.php';
                    $query = mysqli_query($con, "SELECT * FROM t_sanitasi2 ORDER BY id_sanitasi DESC LIMIT 1");
                    $sanitasi2 = mysqli_fetch_assoc($query);
                  ?>
                  <?php 
                    require_once '../_config/config.php';
                    $query = mysqli_query($con, "SELECT * FROM t_sanitasi3 ORDER BY id_sanitasi DESC LIMIT 1");
                    $sanitasi3 = mysqli_fetch_assoc($query);
                  ?>
                  <?php 
                    require_once '../_config/config.php';
                    $query = mysqli_query($con, "SELECT * FROM t_sanitasi4 ORDER BY id_sanitasi DESC LIMIT 1");
                    $sanitasi4 = mysqli_fetch_assoc($query);
                  ?>


                  <input type="text" name="id_header" id="id_header" value="<?php echo $newId ?>" class="form-control" hidden>
                  <a href="" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#modal-default" title="Klik to Create Header Trx">
                    <i class="fas fa-tag"></i> Create Header
                  </a>

                  <div class="modal fade" id="modal-default">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tag text-primary"></i> Create Header | Trx </h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="proses_header.php" method="post">
                          <div class="modal-body">

                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label">ID Header</label>
                              <div class="col-sm-8">
                                <input type="text" name="id_header" id="id_header" value="<?php echo $newId ?>" class="form-control" readonly>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="tanggal_header" class="col-sm-4 col-form-label">Date</label>
                              <div class="col-sm-8">
                                <input type="date" class="form-control" name="tanggal_header" id="tanggal_header" value="<?php echo date('Y-m-d') ?>" readonly>
                                <input type="week" class="form-control" name="minggu_header" id="minggu_header">
                                <input type="month" class="form-control" name="bulan_header" id="bulan_header">
                                
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="periode_header" class="col-sm-4 col-form-label">Periode</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" name="periode_header" id="reservation">
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-12">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th style="text-align: center; color: blue; background-color: #F0FFFF;" colspan="5">Meteran Awal Sumber (M <sup>3</sup>)</th>
                                    </tr>
                                    <tr>
                                      <th>Sumber 2</th>
                                      <th>Sumber 3A</th>
                                      <th>Sumber 3B</th>
                                      <th>Sumber 4</th>
                                      <th>Sumber 5</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><input type="text" class="form-control" name="sumber2_awal" id="sumber2_awal" value="<?php echo $sumber2['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="sumber3a_awal" id="sumber3a_awal" value="<?php echo $sumber3a['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="sumber3b_awal" id="sumber3b_awal" value="<?php echo $sumber3b['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="sumber4_awal" id="sumber4_awal" value="<?php echo $sumber4['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="sumber5_awal" id="sumber5_awal" value="<?php echo $sumber5['meter_akhir'] ?>" required>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-12">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th style="text-align: center; color: blue; background-color: #F0FFFF;" colspan="4">Meteran Awal Overflow (M <sup>3</sup>)</th>
                                    </tr>
                                    <tr>
                                      <th>Overflow 2</th>
                                      <th>Overflow 3A</th>
                                      <th>Overflow 3B</th>
                                      <th>Overflow 4</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><input type="text" class="form-control" name="overflow2_awal" id="overflow2_awal" value="<?php echo $overflow14['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="overflow3a_awal" id="overflow3a_awal" value="<?php echo $overflow15['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="overflow3b_awal" id="overflow3b_awal" value="<?php echo $overflow16['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="overflow4_awal" id="overflow4_awal" value="<?php echo $overflow17['meter_akhir'] ?>" required>
                                      </td>
                                      
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-12">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th style="text-align: center; color: blue; background-color: #F0FFFF;" colspan="6">Meteran Awal Produksi (M <sup>3</sup>)</th>
                                    </tr>
                                    <tr>
                                      <th style="text-align: center;" colspan="4">Plant Mekarsari</th>
                                      <th style="text-align: center;" colspan="2">Plant BBP</th>
                                    </tr>
                                    <tr>
                                      <th>MKS 5</th>
                                      <th>MKS 6</th>
                                      <th>MKS 12</th>
                                      <th>MKS 26</th>
                                      <th>BBP 7</th>
                                      <th>BBP 13</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><input type="text" class="form-control" name="mks5_awal" id="mks5_awal" value="<?php echo $mekarsari5['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="mks6_awal" id="mks6_awal" value="<?php echo $mekarsari6['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="mks12_awal" id="mks12_awal" value="<?php echo $mekarsari12['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="mks26_awal" id="mks26_awal" value="<?php echo $mekarsari26['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="bbp7_awal" id="bbp7_awal" value="<?php echo $bbp7['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="bbp13_awal" id="bbp13_awal" value="<?php echo $bbp13['meter_akhir'] ?>" required>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>


                            <div class="form-group row">
                              <div class="col-sm-12">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th style="text-align: center; color: blue; background-color: #F0FFFF;" colspan="4">Meteran Awal Masyarakat dari Overflow (M <sup>3</sup>)</th>
                                    </tr>
                                    <tr>
                                      <th>Masy 1</th>
                                      <th>Masy 2</th>
                                      <th>Masy 3</th>
                                      <th>Masy 4</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><input type="text" class="form-control" name="mas1_awal" id="mas1_awal" value="<?php echo $masyarakat1['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="mas2_awal" id="mas2_awal" value="<?php echo $masyarakat2['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="mas3_awal" id="mas3_awal" value="<?php echo $masyarakat3['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="mas4_awal" id="mas4_awal" value="<?php echo $masyarakat4['meter_akhir'] ?>" required>
                                      </td>
                                      
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-12">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th style="text-align: center; color: blue; background-color: #F0FFFF;" colspan="6">Meteran Awal Masyarakat dari Sumber 5 (M <sup>3</sup>)</th>
                                    </tr>
                                    <tr>
                                      <th>Masy 20</th>
                                      <th>Masy 21</th>
                                      <th>Masy 22</th>
                                      <th>Masy 23</th>
                                      <th>Masy 24</th>
                                      <th>Masy 25</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><input type="text" class="form-control" name="mas20_awal" id="mas20_awal" value="<?php echo $masyarakat20['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="mas21_awal" id="mas21_awal" value="<?php echo $masyarakat21['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="mas22_awal" id="mas22_awal" value="<?php echo $masyarakat22['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="mas23_awal" id="mas23_awal" value="<?php echo $masyarakat22['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="mas24_awal" id="mas24_awal" value="<?php echo $masyarakat24['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="mas25_awal" id="mas25_awal" value="<?php echo $masyarakat25['meter_akhir'] ?>" required>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-12">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th style="text-align: center; color: blue; background-color: #F0FFFF;" colspan="4">Meteran Awal Sanitasi (M <sup>3</sup>)</th>
                                    </tr>
                                    <tr>
                                      <th>Sanitasi 1</th>
                                      <th>Sanitasi 2</th>
                                      <th>Sanitasi 3</th>
                                      <th>Sanitasi 4</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><input type="text" class="form-control" name="sanitasi2_awal" id="sanitasi2_awal" value="<?php echo $sanitasi1['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="sanitasi3a_awal" id="sanitasi3a_awal" value="<?php echo $sanitasi2['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="sanitasi3b_awal" id="sanitasi3b_awal" value="<?php echo $sanitasi3['meter_akhir'] ?>" required>
                                      </td>
                                      <td><input type="text" class="form-control" name="sanitasi4_awal" id="sanitasi4_awal" value="<?php echo $sanitasi4['meter_akhir'] ?>" required>
                                      </td>
                                      
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>


                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="add" class="btn btn-success"><i class="fas fa-paper-plane"></i> Create</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-footer">
                  <table class="table table-striped" id="example3">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID HEADER</th>
                        <th>MONTH</th>
                        <th>PERIODE</th>
                        <th>PAJAK</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        include ('../_config/config.php');
                        $query = "SELECT * FROM t_header ORDER BY id_header DESC ";
                        $result = mysqli_query($con, $query);

                        if (!$result) {
                            die("Query Error: ".mysqli_errno($con).
                                "-".mysqli_errno($con));
                        }

                        $no = 1;

                        while ($data = mysqli_fetch_assoc($result))
                        {
                      ?>
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td>
                          <a href="header_report.php?id_header=<?php echo $data['id_header'];?>">
                            <?php echo $data['id_header'];?>
                          </a>
                        </td>
                        <td><?php echo $data['bulan_header'];?></td>
                        <td><?php echo $data['periode_header'];?></td>
                        <td>
                          <a href="create_pajak.php?id_header=<?php echo $data['id_header'];?>">
                            <?php echo $data['id_header'];?>
                          </a>
                        </td>
                      </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                  </table>
                </div>

              </div>

            </div>

          </div>
        </div>
      </section>

    </div>

      <?php include '../_footer.php'; ?>

      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
  </div>

  <script src="../plugins/jquery/jquery.min.js"></script>
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="../plugins/toastr/toastr.min.js"></script>
  <script src="../plugins/moment/moment.min.js"></script>

  <script src="../plugins/select2/js/select2.full.min.js"></script>
  <script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

  <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../dist/js/adminlte.min.js"></script>
  <script src="../dist/js/demo.js"></script>

  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservationdate').datetimepicker({
          format: 'L'
      });
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })
      
      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });

      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

    })
  </script>

  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example3").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example4").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example5").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example6").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
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
