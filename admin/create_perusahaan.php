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
      <p>Anda Bukan dari VISITORs.</p>
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
            <!-- left column -->
            <div class="col-md-6">

              <!-- Horizontal Form -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Create Plant | <i class="fas fa-plus-circle"></i> Add New</h3>
                </div>
                <form class="form-horizontal" action="create_perusahaan_proses.php" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    

                    <div class="form-group row">
                      <label for="plant_id" class="col-sm-4 col-form-label"> PLANT ID</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="plant_id" id="plant_id" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_perusahaan" class="col-sm-4 col-form-label">NAMA PERUSAHAAN</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="alamat_perusahaan" class="col-sm-4 col-form-label">ALAMAT</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="no_telp" class="col-sm-4 col-form-label">No. TELP</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="no_telp" id="no_telp" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_cp" class="col-sm-4 col-form-label">NAMA CP</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_cp" id="nama_cp" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="no_cp" class="col-sm-4 col-form-label">Contact Person</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="no_cp" id="no_cp" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="lokasi_sumur" class="col-sm-4 col-form-label">LOKASI SUMUR</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="lokasi_sumur" id="lokasi_sumur" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="plant_manager" class="col-sm-4 col-form-label">PLANT MANAGER</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="plant_manager" id="plant_manager" required>
                      </div>
                    </div>

                    <!--
                    <div class="form-group row">
                      <label for="status_plant" class="col-sm-4 col-form-label">STATUS</label>
                      <div class="col-sm-8">
                        <select name="status_plant" id="status_plant" class="form-control" required>
                          <option value="">-- Select Status --</option>
                          <option value="AKTIF">AKTIF</option>
                          <option value="INAKTIF">INAKTIF</option>
                        </select>
                      </div>
                    </div> -->

                  </div>
                  <div class="card-footer">
                    <button type="submit" name="add" value="KIRIM" class="btn btn-info"><i class="fas fa-paper-plane"></i> Send</button>
                    <button type="reset" class="btn btn-default float-right"><i class="fas fa-reply"></i> Cancel</button>
                  </div>
                </form>
              </div>

            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">General Data Reg Plant</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <table class="table table-striped" id="example3">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>PLANT id</th>
                                <th>PLANT NAME</th>
                                <th>STATUS</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                include ('../_config/config.php');
                                $query = "SELECT * FROM M_plant ORDER BY plant_id DESC ";
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
                                <td><?php echo $data['plant_id'];?></td>
                                <td><?php echo $data['nama_perusahaan'];?></td>
                                <td><?php echo $data['alamat_perusahaan'];?></td>
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
