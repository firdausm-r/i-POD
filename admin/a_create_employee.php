

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
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../index.php" class="nav-link">Home</a>
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
              <h1 class="m-0 text-dark">i-POD</h1>
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
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">General Data Employee</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-inputCreate" title="Add New">
                            <i class="fas fa-user-plus"></i> New Employee
                          </a>
                          <div class="modal fade" id="modal-inputCreate">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" style="align-content: center;"><i class="fas fa-user-plus text-primary"></i> Add New Employee </h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="a_create_employee_proses.php" method="post">
                                  <div class="modal-body">
                                    <div class="form-group row">
                                      <label for="share_id" class="col-sm-4 col-form-label">SHARE ID</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="share_id" id="share_id" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="nik" id="nik" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="employee_name" class="col-sm-4 col-form-label">EMPLOYEE NAME</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="employee_name" id="employee_name" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="gol" class="col-sm-4 col-form-label">GRADE</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="gol" id="gol" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="neo_sku" class="col-sm-4 col-form-label">SKU</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="neo_sku" id="neo_sku" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="posisi_by_sunfish" class="col-sm-4 col-form-label">JOB TITLE</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="posisi_by_sunfish" id="posisi_by_sunfish" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <p></p>
                          <table class="table table-striped" id="example3">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>SHARE ID</th>
                                <th>NIK</th>
                                <th>EMPLOYEE NAME</th>
                                <th>GRADE</th>
                                <th>SKU</th>
                                <th>POSITION</th>
                                <th style="text-align: center;"><i class="fas fa-cog"></i> Sett</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                include ('../_config/config.php');
                                $query = "SELECT * FROM m_employee ORDER BY share_id ASC ";
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
                                <td><?php echo $data['share_id'];?></td>
                                <td><?php echo $data['nik'];?></td>
                                <td><?php echo $data['employee_name'];?></td>
                                <td><?php echo $data['gol'];?></td>
                                <td><?php echo $data['neo_sku'];?></td>
                                <td><?php echo $data['posisi_by_sunfish'];?></td>
                                <td style="text-align: center;">
                                  <a href="" type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-inputEdit<?php echo $data['share_id'] ?>" title="Edit">
                                    <i class="fas fa-edit"></i>
                                  </a>
                                  <div class="modal fade" id="modal-inputEdit<?php echo $data['share_id'] ?>">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" style="align-content: center;"><i class="fas fa-edit text-primary"></i> Edit Data |Employee : <?php echo $data['employee_name'] ?> </h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form action="a_edit_employee_proses.php" method="post">
                                          <div class="modal-body">
                                            <div class="form-group row">
                                              <label for="share_id" class="col-sm-4 col-form-label">SHARE ID</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="share_id" id="share_id" value="<?php echo $data['share_id'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="nik" id="nik" value="<?php echo $data['nik'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="employee_name" class="col-sm-4 col-form-label">EMPLOYEE NAME</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="employee_name" id="employee_name" value="<?php echo $data['employee_name'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="gol" class="col-sm-4 col-form-label">GRADE</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="gol" id="gol" value="<?php echo $data['gol'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="neo_sku" class="col-sm-4 col-form-label">SKU</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="neo_sku" id="neo_sku" value="<?php echo $data['neo_sku'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="posisi_by_sunfish" class="col-sm-4 col-form-label">JOB TITLE</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="posisi_by_sunfish" id="posisi_by_sunfish" value="<?php echo $data['posisi_by_sunfish'] ?>" class="form-control">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="edit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>

                                  <a href="./a_del_employee_proses.php?share_id=<?php echo $data['share_id'];?>" onclick="return confirm('Are you sure you want to delete data? The data will be permanently deleted.')" class="btn btn-outline-danger btn-md" title="Hapus Data"><i class="fas fa-trash"></i></a> 
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
