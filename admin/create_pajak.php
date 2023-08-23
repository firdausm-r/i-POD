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
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">BERASAL DARI PENCATATAN 2 METER AIR UKURAN 8 INCI</h3>
                  <h5 class="card-title"> PEMAKAIAN MEKARSARI SIPA 3</h5>
                </div>
                <div class="card-body">
                  
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th>Item</th>
                            <th>Detail</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Nomor</td>
                            <td>: </td>
                          </tr>
                          <tr>
                            <td>Nama Perusahaan</td>
                            <td>: AQUA GOLDEN MISSISSIPI, PT</td>
                          </tr>
                          <tr>
                            <td>Alamat</td>
                            <td>: Ds. Mekarsari Kec. Cicurug</td>
                          </tr>
                          <tr>
                            <td>Jenis Usaha</td>
                            <td>: AMDK</td>
                          </tr>
                          <tr>
                            <td>Peruntukan</td>
                            <td>: BAHAN UTAMA</td>
                          </tr>
                          <tr>
                            <td>Harga Air Baku</td>
                            <td>: </td>
                          </tr>
                          <tr>
                            <td rowspan="2">Debit yang di ijinkan</td>
                            <td>: MA 3</td>
                          </tr>
                          <tr>
                            <td>: M<sup>3</sup>/Hari </td>
                            <td> M<sup>3</sup>/Bulan </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <h6>Faktor Komponen Sumber Daya Alam</h6>
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th style="text-align: center;" colspan="2">Kriteria</th>
                            <th style="text-align: center;">Nilai</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Zona</td>
                            <td style="text-align: center;">AMAN</td>
                            <td style="text-align: center;">0.3</td>
                          </tr>
                          <tr>
                            <td>Kualitas Air</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">1.9</td>
                          </tr>
                          <tr>
                            <td>Sumber Alternatif</td>
                            <td style="text-align: center;">TIDAK ADA</td>
                            <td style="text-align: center;">0.1</td>
                          </tr>
                          <tr>
                            <td>Jenis Sumber Air</td>
                            <td style="text-align: center;">DALAM</td>
                            <td style="text-align: center;">0.8</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th style="text-align: center;" colspan="2">Jumlah</th>
                            <th style="text-align: center;">16.0</th>
                          </tr>
                        </tfoot>
                      </table>

                      <h6>Periode Data Record</h6>
                      <table class="table table-sm">
                        <tbody>
                          <tr>
                            <td style="font-size: 10px">ID Header</td>
                            <td style="font-size: 10px">: <?php echo $data['id_header'] ?></td>
                          </tr>
                          <tr>
                            <td style="font-size: 10px">Month</td>
                            <td style="font-size: 10px">: <?php echo $data['bulan_header'] ?></td>
                          </tr>
                          <tr>
                            <td style="font-size: 10px">Periode</td>
                            <td style="font-size: 10px">: <?php echo $data['periode_header'] ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-sm-3">
                      <div class="card card-info collapsed-card">
                        <div class="card-header">
                          <h3 class="card-title">Data Bahan & Faktor Komponen</h3>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                          <table class="table table-sm">
                            <tbody>
                              <tr>
                                <td style="font-size: 10px">BHN.UTAMA</td>
                                <td style="font-size: 10px">31</td>
                                
                              </tr>
                              <tr>
                                <td style="text-align: center; font-size: 10px" colspan="2">Bobot Komponen</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">SDA</td>
                                <td style="font-size: 10px">0.6</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">KP</td>
                                <td style="font-size: 10px">0.4</td>
                              </tr>
                              <tr>
                                <td style="text-align: center; font-size: 10px" colspan="2">Zona Pengambilan</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">AMAN</td>
                                <td style="font-size: 10px">0.3</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">KRITIS</td>
                                <td style="font-size: 10px">2.6</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">RAWAN</td>
                                <td style="font-size: 10px">1.1</td>
                              </tr>
                              <tr>
                                <td style="text-align: center; font-size: 10px" colspan="2">Kualitas Air Tanah</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">A</td>
                                <td style="font-size: 10px">1.9</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">B</td>
                                <td style="font-size: 10px">0.9</td>
                              </tr>
                              <tr>
                                <td style="text-align: center; font-size: 10px" colspan="2">Sumber Alternatif</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">AP</td>
                                <td style="font-size: 10px">0.6</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">PDAM</td>
                                <td style="font-size: 10px">1.3</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">TDK.ADA</td>
                                <td style="font-size: 10px">0.1</td>
                              </tr>
                              <tr>
                                <td style="text-align: center; font-size: 10px" colspan="2">Jenis Sumber Air</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">DALAM</td>
                                <td style="font-size: 10px">0.8</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">DANGKAL</td>
                                <td style="font-size: 10px">0.2</td>
                              </tr>
                              <tr>
                                <td style="text-align: center; font-size: 10px" colspan="2">Harga Air Baku</td>
                              </tr>
                              <tr>
                                <td style="font-size: 10px">AT DLM</td>
                                <td style="font-size: 10px">500</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                          
                    </div>

                  </div>

                  <div class="form-group row">
                    <div class="table-responsive">
                      <div class="col-sm-12"> 
                        <table class="table table-sm">
                          <thead>
                            <tr>
                              <th style="text-align: center;" rowspan="2">Titik Ke</th>
                              <th style="text-align: center;" rowspan="2">Source</th>
                              <th rowspan="2">Volume (M<sup>3</sup>)</th>
                              <th style="text-align: center;" colspan="9">Komponen Volume Progresif (M<sup>3</sup>)</th>
                              <th style="text-align: center;" rowspan="2">Overdebit</th>
                              <th style="text-align: center;" rowspan="2">Volume Overdebit</th>
                              <th style="text-align: center;" rowspan="2">NPA (Rp)</th>
                            </tr>
                            <tr>
                              <td>0-500</td>
                              <td>500-1500</td>
                              <td>1500-3500</td>
                              <td>3500-7500</td>
                              <td>7500-15500</td>
                              <td>15500-31500</td>
                              <td>31500-63500</td>
                              <td>63500-127500</td>
                              <td>>127500</td>
                            </tr>
                          </thead>
                          <tbody>
                            
                            <tr>
                              <td rowspan="2">MA 3</td>
                              <td>LAPORAN</td>
                              <td><?php echo number_format($data['sumber3a_pemakaian'] + $data['sumber3b_pemakaian'],0,'.','.'); ?></td>
                            </tr>
                            <tr>
                              <td>KALKULASI</td>
                              <td><?php echo number_format($data['sumber3a_pemakaian'] + $data['sumber3b_pemakaian'],0,'.','.'); ?></td>
                              <td>
                                <?php 
                                  ;
                                  $datasumber3 = $data['sumber3a_pemakaian'] + $data['sumber3b_pemakaian'];
                                  if ($datasumber3 >= '500') {
                                      echo '500';
                                  }
                                  else {
                                    $datasumber3;
                                  }
                                ?>
                              </td>
                              <td>
                                <?php 
                                  ;
                                  $datasumber3 = $data['sumber3a_pemakaian'] + $data['sumber3b_pemakaian'];
                                  $nilai1 = $datasumber3 - 500;
                                  if ($datasumber3 >= '1000') {
                                      echo '1000';
                                  }
                                  else {
                                    $nilai1;
                                  }
                                ?>
                              </td>
                              <td>
                                <?php 
                                  ;
                                  $datasumber3 = $data['sumber3a_pemakaian'] + $data['sumber3b_pemakaian'];
                                  $nilai2 = $datasumber3 - 1500;
                                  if ($datasumber3 >= '2000') {
                                      echo '2000';
                                  }
                                  else{
                                    $nilai2;
                                  }
                                ?>
                              </td>
                              <td>
                                <?php 
                                  ;
                                  $datasumber3 = $data['sumber3a_pemakaian'] + $data['sumber3b_pemakaian'];
                                  $nilai3 = $datasumber3 - 3500;
                                  if ($datasumber3 >= '4000') {
                                      echo '4000';
                                  }
                                  else{
                                    $nilai3;
                                  }
                                ?>
                              </td>
                              <td>
                                <?php 
                                  ;
                                  $datasumber3 = $data['sumber3a_pemakaian'] + $data['sumber3b_pemakaian'];
                                  $nilai4 = $datasumber3 - 7000;
                                  if ($datasumber3 >= '8000') {
                                      echo '8000';
                                  }
                                  else{
                                    $nilai4;
                                  }
                                ?>
                              </td>
                              <td>
                                <?php 
                                  ;
                                  $datasumber3 = $data['sumber3a_pemakaian'] + $data['sumber3b_pemakaian'];
                                  $nilai5 = $datasumber3 - 13500;
                                  if ($datasumber3 >= '16000') {
                                      echo '16000';
                                  }
                                  else{
                                    $nilai5;
                                  }
                                ?>
                              </td>
                              <td>
                                <?php 
                                  ;
                                  $datasumber3 = $data['sumber3a_pemakaian'] + $data['sumber3b_pemakaian'];
                                  $nilai6 = $datasumber3 - 31500;
                                  if ($datasumber3 >= '32000') {
                                      echo '32000';
                                  }
                                  else{
                                    $nilai6;
                                  }
                                ?>
                              </td>
                              <td>
                                <?php 
                                  ;
                                  $datasumber3 = $data['sumber3a_pemakaian'] + $data['sumber3b_pemakaian'];
                                  $nilai7 = $datasumber3 - 63500;
                                  if ($datasumber3 >= '32206') {
                                      echo '32206';
                                  }
                                  else{
                                    $nilai7;
                                  }
                                ?>
                              </td>
                              <td>
                                <?php 
                                  ;
                                  $datasumber3 = $data['sumber3a_pemakaian'] + $data['sumber3b_pemakaian'];
                                  $nilai8 = $datasumber3 - 1500;
                                  if ($datasumber3 >= '4000') {
                                      echo '4000';
                                  }
                                  else{
                                    $nilai8;
                                  }
                                ?>
                              </td>
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
        </div>
      </section>

      <!--
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Create Plant | <i class="fas fa-plus-circle"></i> Add New</h3>
                </div>
                <form class="form-horizontal" action="proses_plant.php" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="id_plant" class="col-sm-4 col-form-label">ID PLANT</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="id_plant" id="id_plant" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="plant_name" class="col-sm-4 col-form-label">PLANT NAME</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="plant_name" id="plant_name" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="status_plant" class="col-sm-4 col-form-label">STATUS</label>
                      <div class="col-sm-8">
                        <select name="status_plant" id="status_plant" class="form-control" required>
                          <option value="">-- Select Status --</option>
                          <option value="AKTIF">AKTIF</option>
                          <option value="INAKTIF">INAKTIF</option>
                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="card-footer">
                    <button type="submit" name="add" value="KIRIM" class="btn btn-info"><i class="fas fa-paper-plane"></i> Send</button>
                    <button type="reset" class="btn btn-default float-right"><i class="fas fa-reply"></i> Cancel</button>
                  </div>
                </form>
              </div>

            </div>
            <div class="col-md-6">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">General Data Reg Plant</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <table class="table table-striped" id="example3">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>ID PLANT</th>
                                <th>PLANT NAME</th>
                                <th>STATUS</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                include ('../_config/config.php');
                                $query = "SELECT * FROM t_plant ORDER BY id_plant DESC ";
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
                                <td><?php echo $data['id_plant'];?></td>
                                <td><?php echo $data['plant_name'];?></td>
                                <td><?php echo $data['status_plant'];?></td>
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
              </div>
            </div>

          </div>
        </div>
      </section> -->

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
