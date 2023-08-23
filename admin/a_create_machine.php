

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
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
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
                  <h3 class="card-title">General Data Machine</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-inputMachine" title="Add New">
                            <i class="fas fa-plus-circle"></i> New Machine
                          </a>
                          <div class="modal fade" id="modal-inputMachine">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" style="align-content: center;"><i class="fas fa-plus-circle text-primary"></i> Add New Machine </h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="a_create_machine_proses.php" method="post" enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <div class="form-group row">
                                      <label for="name_machine" class="col-sm-4 col-form-label">NAME MACHINE</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="name_machine" id="name_machine" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="since_machine" class="col-sm-4 col-form-label">SINCE</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="since_machine" id="since_machine" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="made_machine" class="col-sm-4 col-form-label">MADE IN</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="made_machine" id="made_machine" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="capacity_machine" class="col-sm-4 col-form-label">CAPACITY</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="capacity_machine" id="capacity_machine" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="energy_machine" class="col-sm-4 col-form-label">SOURCE ENERGY</label>
                                      <div class="col-sm-8">
                                        <select name="energy_machine" class="form-control">
                                          <option value="ELECTRIC">ELECTRIC</option>
                                          <option value="ELECTRIC, LOW PRESSURE">ELECTRIC, LOW PRESSURE</option>
                                          <option value="ELECTRIC, LOW PRESSURE, HIG PRESSURE">ELECTRIC, LOW PRESSURE, HIGH PRESSURE</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="electric_machine" class="col-sm-4 col-form-label">ELECTRIC</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="electric_machine" id="electric_machine" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="lp_machine" class="col-sm-4 col-form-label">LOW PRESSURE</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="lp_machine" id="lp_machine" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="hp_machine" class="col-sm-4 col-form-label">HIGH PRESSURE</label>
                                      <div class="col-sm-8">
                                        <input type="text" name="hp_machine" id="hp_machine" class="form-control">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="building" class="col-sm-4 col-form-label">BUILDING</label>
                                      <div class="col-sm-8">
                                        <select name="building" class="form-control">
                                          <option value="PET1">PET1</option>
                                          <option value="PET2">PET2</option>
                                          <option value="PP">PP</option>
                                          <option value="HOD">HOD</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="line_machine" class="col-sm-4 col-form-label">LINE</label>
                                      <div class="col-sm-8">
                                        <select name="line_machine" class="form-control">
                                          <option value="ERGOBLOC">ERGOBLOC</option>
                                          <option value="600ml">600ml</option>
                                          <option value="CUP MAKER #220ml">CUP MAKER #220ml</option>
                                          <option value="hod #3">hod #3</option>
                                          <option value="hod #7">hod #7</option>
                                          <option value="hod #8">hod #8</option>
                                          <option value="hod #9">hod #9</option>
                                          <option value="IRIS">IRIS</option>
                                          <option value="PP #3">PP #3</option>
                                          <option value="PP #4">PP #4</option>
                                          <option value="PP #7">PP #7</option>
                                          <option value="PREFORM MAKER #1500ml">PREFORM MAKER #1500ml</option>
                                          <option value="PREFORM MAKER #600ml">PREFORM MAKER #600ml</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="gambar" class="col-sm-4 col-form-label">IMAGE</label>
                                      <div class="col-sm-8">
                                        <input type="file" class="form-control" name="gambar" id="gambar" required>
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
                                <th>NAME MACHINE</th>
                                <th>SINCE</th>
                                <th>MADE IN</th>
                                <th>CAPACITY</th>
                                <th>ENERGY SOURCE</th>
                                <th>ELECTRIC</th>
                                <th>PRESSURE</th>
                                <th>BUILDING</th>
                                <th>LINE</th>
                                <th style="text-align: center;"><i class="fas fa-cog"></i> Sett</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                include ('../_config/config.php');
                                $query = "SELECT * FROM m_machine ORDER BY id_machine ASC ";
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
                                <td><?php echo $data['name_machine'];?></td>
                                <td><?php echo $data['since_machine'];?></td>
                                <td><?php echo $data['made_machine'];?></td>
                                <td><?php echo $data['capacity_machine'];?></td>
                                <td><?php echo $data['energy_machine'];?></td>
                                <td><?php echo $data['electric_machine'];?></td>
                                <td><?php echo $data['lp_machine'];?> | <?php echo $data['hp_machine'];?></td>
                                <td><?php echo $data['building'];?></td>
                                <td><?php echo $data['line_machine'];?></td>
                                <td style="text-align: center;">
                                  <a href="" type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-inputEditMachine<?php echo $data['id_machine'] ?>" title="Edit">
                                    <i class="fas fa-edit"></i>
                                  </a>
                                  <div class="modal fade" id="modal-inputEditMachine<?php echo $data['id_machine'] ?>">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" style="align-content: center;"><i class="fas fa-edit text-primary"></i> Edit Data |Machine : <?php echo $data['name_machine'] ?> </h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form action="a_edit_machine_proses.php" method="post">
                                          <div class="modal-body">
                                            <div class="form-group row">
                                              <label for="name_machine" class="col-sm-4 col-form-label">NAME MACHINE</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="name_machine" id="name_machine" value="<?php echo $data['name_machine'] ?>" class="form-control">
                                                <input type="text" name="id_machine" id="id_machine" value="<?php echo $data['id_machine'] ?>" class="form-control" hidden>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="since_machine" class="col-sm-4 col-form-label">SINCE</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="since_machine" id="since_machine" value="<?php echo $data['since_machine'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="made_machine" class="col-sm-4 col-form-label">MADE IN</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="made_machine" id="made_machine" value="<?php echo $data['made_machine'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="capacity_machine" class="col-sm-4 col-form-label">CAPACITY</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="capacity_machine" id="capacity_machine" value="<?php echo $data['capacity_machine'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="energy_machine" class="col-sm-4 col-form-label">SOURCE ENERGY</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="energy_machine" id="energy_machine" value="<?php echo $data['energy_machine'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="electric_machine" class="col-sm-4 col-form-label">ELECTRIC</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="electric_machine" id="electric_machine" value="<?php echo $data['electric_machine'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="lp_machine" class="col-sm-4 col-form-label">LOW PRESSURE</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="lp_machine" id="lp_machine" value="<?php echo $data['lp_machine'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="hp_machine" class="col-sm-4 col-form-label">HIGH PRESSURE</label>
                                              <div class="col-sm-8">
                                                <input type="text" name="hp_machine" id="hp_machine" value="<?php echo $data['hp_machine'] ?>" class="form-control">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="building" class="col-sm-4 col-form-label">BUILDING</label>
                                              <div class="col-sm-8">
                                                <select name="building" class="form-control">
                                                  <option value="PET1">PET1</option>
                                                  <option value="PET2">PET2</option>
                                                  <option value="PP">PP</option>
                                                  <option value="HOD">HOD</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="line_machine" class="col-sm-4 col-form-label">LINE</label>
                                              <div class="col-sm-8">
                                                <select name="line_machine" class="form-control">
                                                  <option value="ERGOBLOC">ERGOBLOC</option>
                                                  <option value="600ml">600ml</option>
                                                  <option value="CUP MAKER #220ml">CUP MAKER #220ml</option>
                                                  <option value="hod #3">hod #3</option>
                                                  <option value="hod #7">hod #7</option>
                                                  <option value="hod #8">hod #8</option>
                                                  <option value="hod #9">hod #9</option>
                                                  <option value="IRIS">IRIS</option>
                                                  <option value="PP #3">PP #3</option>
                                                  <option value="PP #4">PP #4</option>
                                                  <option value="PP #7">PP #7</option>
                                                  <option value="PREFORM MAKER #1500ml">PREFORM MAKER #1500ml</option>
                                                  <option value="PREFORM MAKER #600ml">PREFORM MAKER #600ml</option>
                                                </select>
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

                                  <a href="./a_del_machine_proses.php?id_machine=<?php echo $data['id_machine'];?>" onclick="return confirm('Are you sure you want to delete data? The data will be permanently deleted.')" class="btn btn-outline-danger btn-md" title="Hapus Data"><i class="fas fa-trash"></i></a> 
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
  <script src="../plugins/select2/js/select2.full.min.js"></script>
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
