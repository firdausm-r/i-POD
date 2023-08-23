<?php require_once '../_config/config.php';
  ob_start();
  session_start();
  if(!isset($_SESSION['username'])){
    die("<b>Oops! Access Denied ! </b>
      <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
      <button type='button' onclick=location.href='../login.php'>Click to Login</button>");
  }
  if($_SESSION['level']!="user"){
    die("<b>Oops!</b> Access Failed.
      <p>Anda Bukan dari Tim DEWA.</p>
      <button type='button' onclick=location.href='../login.php'>Click to Login</button>");
  }
?>
<?php require_once '../_config/config.php';
  include '../_title.php';
  include './_sidebar_user.php';
?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
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

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">D E W A 1.0</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><a href="create_detail.php"></a> Report Daily</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <?php
        $tampilPeg    =mysqli_query($con, "SELECT * FROM user WHERE username='$_SESSION[username]'");
        $peg    =mysqli_fetch_array($tampilPeg);
      ?>

      <!-- Main content -->
      <?php
        include ('../_config/config.php');
        $id_ph_tr = $_GET['id_ph_tr'];
        $query = "SELECT * FROM t_ph
          WHERE id_ph_tr='$id_ph_tr' ";
        $cek=mysqli_query($con, $query);
        $data=mysqli_fetch_array($cek)
      ?>
      <?php
        include ('../_config/config.php');
        $id_ph_tr = $_GET['id_ph_tr'];
        $query2 = "SELECT * FROM t_wwtp
          WHERE id_ph_tr='$id_ph_tr' ";
        $cek2=mysqli_query($con, $query2);
        $data2=mysqli_fetch_array($cek2)
      ?>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Record Daily <a href="create_detail.php" class="btn btn-primary"><i class="fas fa-reply"></i> Kembali</a> </h3>
                </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label"><i class="fas fa-temperature-high text-primary"></i> <b>pH, Temp & WWTP</b></label>
                    <div class="col-sm-8">
                      <?php echo $data['id_ph_tr'] ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label"><i class="fas fa-calendar-alt text-primary"></i> <b>Tanggal</b></label>
                    <div class="col-sm-8">
                      <?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label"><i class="fas fa-calendar-alt text-primary"></i> <b>Bulan</b></label>
                    <div class="col-sm-8">
                      <?php echo $new_date = date('M-Y', strtotime($data['tanggal']));?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-12">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="5"><i class="fas fa-temperature-high"></i> pH & Temp</th>
                          </tr>
                          <tr>
                            <th rowspan="2">JAM</th>
                            <th>pH INLET</th>
                            <th>pH OUTLET</th>
                            <th>TEMP INLET</th>
                            <th>TEMP OUTLET</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="text" name="" value="06:00-08:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin1" id="phin1" class="form-control" value="<?php echo $data['phin1'] ?>"   onkeyup="total_ph();" required></td> 
                            <td><input type="text" name="phou1" id="phou1" class="form-control" value="<?php echo $data['phou1'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempin1" id="tempin1" class="form-control" value="<?php echo $data['tempin1'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou1" id="tempou1" class="form-control" value="<?php echo $data['tempou1'] ?>" onkeyup="total_ph();" required></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="" value="08:00-10:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin2" id="phin2" class="form-control" value="<?php echo $data['phin2'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="phou2" id="phou2" class="form-control" value="<?php echo $data['phou2'] ?>"  onkeyup="total_ph();" required></td>
                            
                            <td><input type="text" name="tempin2" id="tempin2" class="form-control" value="<?php echo $data['tempin2'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou2" id="tempou2" class="form-control" value="<?php echo $data['tempou2'] ?>" onkeyup="total_ph();" required></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="" value="10:00-12:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin3" id="phin3" class="form-control" value="<?php echo $data['phin3'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="phou3" id="phou3" class="form-control" value="<?php echo $data['phou3'] ?>"  onkeyup="total_ph();" required></td>
                            
                            <td><input type="text" name="tempin3" id="tempin3" class="form-control" value="<?php echo $data['tempin3'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou3" id="tempou3" class="form-control" value="<?php echo $data['tempou3'] ?>" onkeyup="total_ph();" required></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="" value="12:00-14:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin4" id="phin4" class="form-control" value="<?php echo $data['phin4'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="phou4" id="phou4" class="form-control" value="<?php echo $data['phou4'] ?>"  onkeyup="total_ph();" required></td>
                            
                            <td><input type="text" name="tempin4" id="tempin4" class="form-control" value="<?php echo $data['tempin4'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou4" id="tempou4" class="form-control" value="<?php echo $data['tempou4'] ?>" onkeyup="total_ph();" required></td>
                          </tr>

                          <tr>
                            <td><input type="text" name="" value="14:00-16:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin5" id="phin5" class="form-control" value="<?php echo $data['phin5'] ?>"   onkeyup="total_ph();" required></td> 
                            <td><input type="text" name="phou5" id="phou5" class="form-control" value="<?php echo $data['phou5'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempin5" id="tempin5" class="form-control" value="<?php echo $data['tempin5'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou5" id="tempou5" class="form-control" value="<?php echo $data['tempou5'] ?>" onkeyup="total_ph();" required></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="" value="16:00-18:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin6" id="phin6" class="form-control" value="<?php echo $data['phin6'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="phou6" id="phou6" class="form-control" value="<?php echo $data['phou6'] ?>"  onkeyup="total_ph();" required></td>
                            
                            <td><input type="text" name="tempin6" id="tempin6" class="form-control" value="<?php echo $data['tempin6'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou6" id="tempou6" class="form-control" value="<?php echo $data['tempou6'] ?>" onkeyup="total_ph();" required></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="" value="18:00-20:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin7" id="phin7" class="form-control" value="<?php echo $data['phin7'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="phou7" id="phou7" class="form-control" value="<?php echo $data['phou7'] ?>"  onkeyup="total_ph();" required></td>
                            
                            <td><input type="text" name="tempin7" id="tempin7" class="form-control" value="<?php echo $data['tempin7'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou7" id="tempou7" class="form-control" value="<?php echo $data['tempou7'] ?>" onkeyup="total_ph();" required></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="" value="20:00-22:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin8" id="phin8" class="form-control" value="<?php echo $data['phin8'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="phou8" id="phou8" class="form-control" value="<?php echo $data['phou8'] ?>"  onkeyup="total_ph();" required></td>
                            
                            <td><input type="text" name="tempin8" id="tempin8" class="form-control" value="<?php echo $data['tempin8'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou8" id="tempou8" class="form-control" value="<?php echo $data['tempou8'] ?>" onkeyup="total_ph();" required></td>
                          </tr>

                          <tr>
                            <td><input type="text" name="" value="22:00-00:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin9" id="phin9" class="form-control" value="<?php echo $data['phin9'] ?>"   onkeyup="total_ph();" required></td> 
                            <td><input type="text" name="phou9" id="phou9" class="form-control" value="<?php echo $data['phou9'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempin9" id="tempin9" class="form-control" value="<?php echo $data['tempin9'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou9" id="tempou9" class="form-control" value="<?php echo $data['tempou9'] ?>" onkeyup="total_ph();" required></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="" value="00:00-02:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin10" id="phin10" class="form-control" value="<?php echo $data['phin10'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="phou10" id="phou10" class="form-control" value="<?php echo $data['phou10'] ?>"  onkeyup="total_ph();" required></td>
                            
                            <td><input type="text" name="tempin10" id="tempin10" class="form-control" value="<?php echo $data['tempin10'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou10" id="tempou10" class="form-control" value="<?php echo $data['tempou10'] ?>" onkeyup="total_ph();" required></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="" value="02:00-04:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin11" id="phin11" class="form-control" value="<?php echo $data['phin11'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="phou11" id="phou11" class="form-control" value="<?php echo $data['phou11'] ?>"  onkeyup="total_ph();" required></td>
                            
                            <td><input type="text" name="tempin11" id="tempin11" class="form-control" value="<?php echo $data['tempin11'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou11" id="tempou11" class="form-control" value="<?php echo $data['tempou11'] ?>" onkeyup="total_ph();" required></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="" value="04:00-06:00" class="form-control" readonly> </td>
                            <td><input type="text" name="phin12" id="phin12" class="form-control" value="<?php echo $data['phin12'] ?>"  onkeyup="total_ph();" required></td>
                            <td><input type="text" name="phou12" id="phou12" class="form-control" value="<?php echo $data['phou12'] ?>"  onkeyup="total_ph();" required></td>
                            
                            <td><input type="text" name="tempin12" id="tempin12" class="form-control" value="<?php echo $data['tempin12'] ?>" onkeyup="total_ph();" required></td>
                            <td><input type="text" name="tempou12" id="tempou12" class="form-control" value="<?php echo $data['tempou12'] ?>" onkeyup="total_ph();" required></td>
                          </tr>
                          <tr>
                            <td>Min Value</td>
                            <td><?php echo min($data['phin1'], $data['phin2'], $data['phin3'], $data['phin4'], $data['phin5'], $data['phin6'], $data['phin7'], $data['phin8'], $data['phin9'], $data['phin10'], $data['phin11'], $data['phin12']); ?></td>
                            <td><?php echo min($data['phou1'], $data['phou2'], $data['phou3'], $data['phou4'], $data['phou5'], $data['phou6'], $data['phou7'], $data['phou8'], $data['phou9'], $data['phou10'], $data['phou11'], $data['phou12']); ?></td>
                            <td><?php echo min($data['tempin1'], $data['tempin2'], $data['tempin3'], $data['tempin4'], $data['tempin5'], $data['tempin6'], $data['tempin7'], $data['tempin8'], $data['tempin9'], $data['tempin10'], $data['tempin11'], $data['tempin12']); ?></td>
                            <td><?php echo min($data['tempou1'], $data['tempou2'], $data['tempou3'], $data['tempou4'], $data['tempou5'], $data['tempou6'], $data['tempou7'], $data['tempou8'], $data['tempou9'], $data['tempou10'], $data['tempou11'], $data['tempou12']); ?></td>
                          </tr>
                          <tr>
                            <td>Max Value</td>
                            <td><?php echo max($data['phin1'], $data['phin2'], $data['phin3'], $data['phin4'], $data['phin5'], $data['phin6'], $data['phin7'], $data['phin8'], $data['phin9'], $data['phin10'], $data['phin11'], $data['phin12']); ?></td>
                            <td><?php echo max($data['phou1'], $data['phou2'], $data['phou3'], $data['phou4'], $data['phou5'], $data['phou6'], $data['phou7'], $data['phou8'], $data['phou9'], $data['phou10'], $data['phou11'], $data['phou12']); ?></td>
                            <td><?php echo max($data['tempin1'], $data['tempin2'], $data['tempin3'], $data['tempin4'], $data['tempin5'], $data['tempin6'], $data['tempin7'], $data['tempin8'], $data['tempin9'], $data['tempin10'], $data['tempin11'], $data['tempin12']); ?></td>
                            <td><?php echo max($data['tempou1'], $data['tempou2'], $data['tempou3'], $data['tempou4'], $data['tempou5'], $data['tempou6'], $data['tempou7'], $data['tempou8'], $data['tempou9'], $data['tempou10'], $data['tempou11'], $data['tempou12']); ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-12">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th style="text-align: center; color: blue;" colspan="11">FLOW METER WWTP</th>
                          </tr>
                          <tr>
                            <th style="text-align: center;" rowspan="2">CATEGORY</th>
                            <th style="text-align: center;" colspan="3">FLOW METER 1 INLET (M<sup>3</sup>)</th>
                            <th style="text-align: center;" colspan="4">FLOW METER 2 INLET (M<sup>3</sup>)</th>
                            <th style="text-align: center;" colspan="3">FLOW METER OUTLET (M<sup>3</sup>)</th>
                          </tr>
                          <tr>
                            <th>AWAL</th>
                            <th>AKHIR</th>
                            <th>JUMLAH 1</th>
                            <th>AWAL </th>
                            <th>AKHIR </th>
                            <th>JUMLAH 2</th>
                            <th>TOTAL INLET </th>
                            <th>AWAL </th>
                            <th>AKHIR </th>
                            <th>JUMLAH </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> SHIFT 1</td>
                            <td><input type="text" name="inlet1_awal_s1" id="inlet1_awal_s1" class="form-control" value="<?php echo number_format($data2['inlet1_awal_s1'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet1_akhir_s1" id="inlet1_akhir_s1" class="form-control" value="<?php echo number_format($data2['inlet1_akhir_s1'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet1_pemakaian_s1" id="inlet1_pemakaian_s1" class="form-control" value="<?php echo number_format($data2['inlet1_pemakaian_s1'],0,',','.') ?>"></td>

                            <td><input type="text" name="inlet2_awal_s1" id="inlet2_awal_s1" class="form-control" value="<?php echo number_format($data2['inlet2_awal_s1'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet2_akhir_s1" id="inlet2_akhir_s1" class="form-control" value="<?php echo number_format($data2['inlet2_akhir_s1'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet2_pemakaian_s1" id="inlet2_pemakaian_s1" class="form-control" value="<?php echo $data2['inlet2_pemakaian_s1'] ?>"></td>
                            <td><input type="text" name="total_inlet_1" id="total_inlet_1" class="form-control" value="<?php echo $data2['total_inlet_1'] ?>"></td>

                            <td><input type="text" name="outlet_awal_s1" id="outlet_awal_s1" class="form-control" value="<?php echo number_format($data2['outlet_awal_s1'],0,',','.') ?>"></td>
                            <td><input type="text" name="outlet_akhir_s1" id="outlet_akhir_s1" class="form-control" value="<?php echo number_format($data2['outlet_akhir_s1'],0,',','.') ?>"></td>
                            <td><input type="text" name="outlet_pemakaian_s1" id="outlet_pemakaian_s1" class="form-control" value="<?php echo $data2['outlet_pemakaian_s1'] ?>"></td>
                          </tr>
                          <tr>
                            <td>SHIFT 2</td>
                            <td><input type="text" name="inlet1_awal_s2" id="inlet1_awal_s2" class="form-control" value="<?php echo number_format($data2['inlet1_awal_s2'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet1_akhir_s2" id="inlet1_akhir_s2" class="form-control" value="<?php echo number_format($data2['inlet1_akhir_s2'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet1_pemakaian_s2" id="inlet1_pemakaian_s2" class="form-control" value="<?php echo number_format($data2['inlet1_pemakaian_s2'],0,',','.') ?>"></td>

                            <td><input type="text" name="inlet2_awal_s2" id="inlet2_awal_s2" class="form-control" value="<?php echo number_format($data2['inlet2_awal_s2'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet2_akhir_s2" id="inlet2_akhir_s2" class="form-control" value="<?php echo number_format($data2['inlet2_akhir_s2'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet2_pemakaian_s2" id="inlet2_pemakaian_s2" class="form-control" value="<?php echo $data2['inlet2_pemakaian_s2'] ?>"></td>
                            <td><input type="text" name="total_inlet_2" id="total_inlet_2" class="form-control" value="<?php echo $data2['total_inlet_2'] ?>"></td>

                            <td><input type="text" name="outlet_awal_s2" id="outlet_awal_s2" class="form-control" value="<?php echo number_format($data2['outlet_awal_s2'],0,',','.') ?>"></td>
                            <td><input type="text" name="outlet_akhir_s2" id="outlet_akhir_s2" class="form-control" value="<?php echo number_format($data2['outlet_akhir_s2'],0,',','.') ?>"></td>
                            <td><input type="text" name="outlet_pemakaian_s2" id="outlet_pemakaian_s2" class="form-control" value="<?php echo $data2['outlet_pemakaian_s2'] ?>"></td>
                          </tr>
                          <tr>
                            <td>SHIFT 3</td>
                            <td><input type="text" name="inlet1_awal_s3" id="inlet1_awal_s3" class="form-control" value="<?php echo number_format($data2['inlet1_awal_s3'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet1_akhir_s3" id="inlet1_akhir_s3" class="form-control" value="<?php echo number_format($data2['inlet1_akhir_s3'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet1_pemakaian_s3" id="inlet1_pemakaian_s3" class="form-control" value="<?php echo number_format($data2['inlet1_pemakaian_s3'],0,',','.') ?>"></td>

                            <td><input type="text" name="inlet2_awal_s3" id="inlet2_awal_s3" class="form-control" value="<?php echo number_format($data2['inlet2_awal_s3'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet2_akhir_s3" id="inlet2_akhir_s3" class="form-control" value="<?php echo number_format($data2['inlet2_akhir_s3'],0,',','.') ?>"></td>
                            <td><input type="text" name="inlet2_pemakaian_s3" id="inlet2_pemakaian_s3" class="form-control" value="<?php echo number_format($data2['inlet2_pemakaian_s3'],0,',','.') ?>"></td>
                            <td>
                              <input type="text" name="total_inlet_3" id="total_inlet_3" class="form-control" value="<?php echo number_format($data2['total_inlet_3'],0,',','.') ?>">
                              <input type="text" name="total_inlet_3" id="total_inlet_3" class="form-control" value="<?php echo number_format($data2['total_inlet_1'] + $data2['total_inlet_2'] + $data2['total_inlet_3'],0,',','.') ?>">
                            </td>

                            <td><input type="text" name="outlet_awal_s3" id="outlet_awal_s3" class="form-control" value="<?php echo number_format($data2['outlet_awal_s3'],0,',','.')  ?>"></td>
                            <td><input type="text" name="outlet_akhir_s3" id="outlet_akhir_s3" class="form-control" value="<?php echo number_format($data2['outlet_akhir_s3'],0,',','.') ?>"></td>
                            <td><input type="text" name="outlet_pemakaian_s3" id="outlet_pemakaian_s3" class="form-control" value="<?php echo number_format($data2['outlet_pemakaian_s3'],0,',','.') ?>"></td>
                          </tr>
                          <tr>
                            <td style="text-align: right; background-color: #F0FFFF;" colspan="10">RELEASE SUNGAI :</td>
                            <td style="background-color: #F0FFFF"><?php echo $data2['outlet_pemakaian_s1'] + $data2['outlet_pemakaian_s2'] + $data2['outlet_pemakaian_s3'] ?> M<sup>3</sup> </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-12">
                      <table class="table table-sm">
                        <tbody>
                          <tr>
                            <th style="text-align: left; color: blue;" colspan="4">SHIFT 1</th>
                          </tr>
                          <tr>
                            <td>NAME</td>
                            <td><input type="text" name="petugas1" id="petugas1" class="form-control" value="<?php echo $data['petugas1'] ?>"></td>
                          </tr>
                          <tr>
                            <td>ISSSUE pH, TEMP</td>
                            <td>
                              <input type="text" class="form-control" name="catatan1" id="catatan1" value="<?php echo $data['catatan1'] ?>" placeholder="masukan jika ada temuan" >
                            </td>

                            <td>ISSSUE FLOW METER</td>
                            <td>
                              <input type="text" class="form-control" name="wcatatan1" id="wcatatan1" value="<?php echo $data2['wcatatan1'] ?>" placeholder="masukan jika ada temuan" >
                            </td>
                          </tr>
                          <tr>
                            <td>ACTION</td>
                            <td><input type="text" name="act1" id="act1" class="form-control" value="<?php echo $data['act1'] ?>"></td>
                            <td>ACTION</td>
                            <td><input type="text" name="wact1" id="wact1" class="form-control" value="<?php echo $data2['wact1'] ?>"></td>
                          </tr>

                          <tr>
                            <th style="text-align: left; color: blue;" colspan="4">SHIFT 2</th>
                          </tr>
                          <tr>
                            <td>NAME</td>
                            <td><input type="text" name="petugas2" id="petugas2" class="form-control" value="<?php echo $data['petugas2'] ?>"></td>
                          </tr>
                          <tr>
                            <td>ISSSUE pH, TEMP</td>
                            <td>
                              <input type="text" class="form-control" name="catatan2" id="catatan2" value="<?php echo $data['catatan2'] ?>" placeholder="masukan jika ada temuan" >
                            </td>

                            <td>ISSSUE FLOW METER</td>
                            <td>
                              <input type="text" class="form-control" name="wcatatan2" id="wcatatan2" value="<?php echo $data2['wcatatan2'] ?>" placeholder="masukan jika ada temuan" >
                            </td>
                          </tr>
                          <tr>
                            <td>ACTION</td>
                            <td><input type="text" name="act2" id="act2" class="form-control" value="<?php echo $data['act2'] ?>"></td>
                            <td>ACTION</td>
                            <td><input type="text" name="wact2" id="wact2" class="form-control" value="<?php echo $data2['wact2'] ?>"></td>
                          </tr>

                          <tr>
                            <th style="text-align: left; color: blue;" colspan="4">SHIFT 3</th>
                          </tr>
                          <tr>
                            <td>NAME</td>
                            <td><input type="text" name="petugas3" id="petugas3" class="form-control" value="<?php echo $data['petugas3'] ?>"></td>
                          </tr>
                          <tr>
                            <td>ISSSUE pH, TEMP</td>
                            <td>
                              <input type="text" class="form-control" name="catatan3" id="catatan3" value="<?php echo $data['catatan3'] ?>" placeholder="masukan jika ada temuan" >
                            </td>

                            <td>ISSSUE FLOW METER</td>
                            <td>
                              <input type="text" class="form-control" name="wcatatan3" id="wcatatan3" value="<?php echo $data2['wcatatan3'] ?>" placeholder="masukan jika ada temuan" >
                            </td>
                          </tr>
                          <tr>
                            <td>ACTION</td>
                            <td><input type="text" name="act3" id="act3" class="form-control" value="<?php echo $data['act3'] ?>"></td>
                            <td>ACTION</td>
                            <td><input type="text" name="wact3" id="wact3" class="form-control" value="<?php echo $data2['wact3'] ?>"></td>
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

  <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../dist/js/adminlte.min.js"></script>
  <script src="../dist/js/demo.js"></script>


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
