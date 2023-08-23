

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
<body class="hold-transition sidebar-mini">
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
            <i class="far fa-user"></i> Login
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <div class="media">
                <img src="../dist/img/MEKARSARI_120x120.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Menu Login
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Untuk akses halaman selanjutya</p>
                </div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="../login.php" class="dropdown-item dropdown-footer">Login</a>
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

      <?php
        include '../_config/config.php';
        $id_header = $_GET['id_header'];
        $query = "SELECT * FROM t_header WHERE id_header='$id_header'";
        $cek=mysqli_query($con, $query);
        $data=mysqli_fetch_array($cek);
      ?>
      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5>Header Transaction</h5>
                </div>
                <div class="card-body">

                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID Header</th>
                        <th>Bulan</th>
                        <th>Periode</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo $data['id_header'] ?></td>
                        <td><?php echo $data['bulan_header'] ?></td>
                        <td><?php echo $data['periode_header'] ?></td>
                      </tr>
                    </tbody>
                  </table> </br></br></br>




                  <div class="form-group row">
                    <div class="col-sm-12">
                      <table class="table table-striped">
                        <th style="text-align: center; color: blue;"><h3><i class="fas fa-tint"></i> <b>SUMBER</b></h3></th>
                      </table>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SUMBER 2 </th>
                          </tr>
                          <tr>
                            <th style="text-align: center;">Awal (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Akhir (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Pemakaian (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Pemantauan (L/s)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['sumber2_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sumber2_akhir'],0,',','.') ?></td>
                            <td style="text-align: center;"><?php echo number_format($data['sumber2_pemakaian'],0,',','.') ?></td>
                            <td style="text-align: center;"><?php echo number_format($data['sumber2_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped" style="background-color: #F0FFFF;">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SUMBER 3A </th>
                          </tr>
                          <tr>
                            <th style="text-align: center;">Awal (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Akhir (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Pemakaian (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Pemantauan (L/s)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['sumber2_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sumber2_akhir'],0,',','.') ?></td>
                            <td style="text-align: center;"><?php echo number_format($data['sumber2_pemakaian'],0,',','.') ?></td>
                            <td style="text-align: center;"><?php echo number_format($data['sumber2_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SUMBER 3B </th>
                          </tr>
                          <tr>
                            <th style="text-align: center;">Awal (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Akhir (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Pemakaian (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Pemantauan (L/s)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['sumber2_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sumber2_akhir'],0,',','.') ?></td>
                            <td style="text-align: center;"><?php echo number_format($data['sumber2_pemakaian'],0,',','.') ?></td>
                            <td style="text-align: center;"><?php echo number_format($data['sumber2_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3" style="background-color: #F0FFFF;">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SUMBER 4 </th>
                          </tr>
                          <tr>
                            <th style="text-align: center;">Awal (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Akhir (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Pemakaian (M<sup>3</sup>)</th>
                            <th style="text-align: center;">Pemantauan (L/s)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['sumber2_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sumber2_akhir'],0,',','.') ?></td>
                            <td style="text-align: center;"><?php echo number_format($data['sumber2_pemakaian'],0,',','.') ?></td>
                            <td style="text-align: center;"><?php echo number_format($data['sumber2_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-12">
                      <table class="table table-striped">
                        <th style="text-align: center;"><h3><i class="fas fa-tachometer-alt"></i> <b>PRODUKSI - MEKARSARI</b></h3></th>
                      </table>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 5 (M<sup>3</sup>) </th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mks5_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks5_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks5_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks5_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped" style="background-color: #F0FFFF;">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 6 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mks6_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks6_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks6_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks6_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 12 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mks12_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks12_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks12_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks12_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3" style="background-color: #F0FFFF;">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 26 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mks26_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks26_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks26_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks26_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-6">
                      <table class="table table-striped">
                        <th style="text-align: center;"><h3><i class="fas fa-tachometer-alt"></i> <b>PRODUKSI - BBP</b></h3></th>
                      </table>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 7 (M<sup>3</sup>) </th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['bbp7_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['bbp7_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['bbp7_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['bbp7_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped" style="background-color: #F0FFFF;">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 13 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['bbp13_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['bbp13_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['bbp13_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['bbp13_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-12">
                      <table class="table table-striped">
                        <th style="text-align: center;"><h3><i class="fas fa-tachometer-alt"></i> <b>OVERFLOW</b></h3></th>
                      </table>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SUMBER 2 (M<sup>3</sup>) </th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['overflow2_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow2_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow2_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow2_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped" style="background-color: #F0FFFF;">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SUMBER 3A (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['overflow3a_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow3a_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow3a_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow3a_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SUMBER 3B (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['overflow3b_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow3b_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow3b_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow3b_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3" style="background-color: #F0FFFF;">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SUMBER 4 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['overflow4_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow4_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow4_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['overflow4_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-12">
                      <table class="table table-striped">
                        <th style="text-align: center;"><h3><i class="fas fa-users"></i> <b>MASYARAKAT</b></h3></th>
                      </table>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 1 (M<sup>3</sup>) </th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mas1_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas1_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas1_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas1_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped" style="background-color: #F0FFFF;">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 2 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mas2_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas2_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas2_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas2_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 3 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mas3_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas3_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas3_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas3_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3" style="background-color: #F0FFFF;">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 4 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mas4_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas4_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas4_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas4_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 20 (M<sup>3</sup>) </th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mas20_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas20_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas20_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas20_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped" style="background-color: #F0FFFF;">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 21 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mas21_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas21_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas21_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas21_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 22 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mas22_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas22_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas22_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas22_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3" style="background-color: #F0FFFF;">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 23 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mas23_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas23_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas23_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas23_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 24 (M<sup>3</sup>) </th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mas24_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas24_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas24_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas24_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped" style="background-color: #F0FFFF;">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">METERAN 25 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mas25_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas25_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas25_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mas25_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SUMBER 5 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['sumber5_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sumber5_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sumber5_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sumber5_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-12">
                      <table class="table table-striped">
                        <th style="text-align: center;"><h3><i class="fas fa-reply"></i> <b>SANITASI</b></h3></th>
                      </table>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SANITASI 1 - S2 (M<sup>3</sup>) </th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['sanitasi2_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi2_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi2_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi2_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped" style="background-color: #F0FFFF;">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SANITASI 2 - S3A (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['sanitasi3a_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi3a_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi3a_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi3a_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SANITASI 3 - S3B (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['sanitasi3b_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi3b_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi3b_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi3b_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3" style="background-color: #F0FFFF;">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SANITASI 4 - S4 (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['sanitasi4_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi4_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi4_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sanitasi4_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-6">
                      <table class="table table-striped">
                        <th style="text-align: center;"><h3><i class="fas fa-arrow-down"></i> <b>SUNGAI & SUMUR</b></h3></th>
                      </table>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">DRAIN SUNGAI (M<sup>3</sup>) </th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['sungai2_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sungai2_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sungai2_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['sungai2_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <table class="table table-striped" style="background-color: #F0FFFF;">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="4">SUMUR BOR (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>Awal</th>
                            <th>Akhir</th>
                            <th>Pemakaian</th>
                            <th>Pemantauan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo number_format($data['mks6_awal'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks6_akhir'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks6_pemakaian'],0,',','.') ?></td>
                            <td><?php echo number_format($data['mks6_pemantauan'],0,',','.') ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

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
