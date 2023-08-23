

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
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <script src="../plugins/jquery/jquery.js" type="text/javascript"></script>
  <script src="../dist/js/js-script.js" type="text/javascript"></script>
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
                  <h3 class="card-title">General Mapping Operator</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-body">
                          <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-inputMachine" title="Add New" style="border-radius: 40px;">
                            <i class="fas fa-plus-circle"></i> New Mapping
                          </a>
                          <div class="modal fade" id="modal-inputMachine">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" style="align-content: center;"><i class="fas fa-plus-circle text-primary"></i> Add New Mapping </h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                  <div class="modal-body">
                                    <form name="add_name" id="add_name">  
                                      <div class="table-responsive">  
                                        <table class="table table-sm" id="dynamic_field">  
                                          <tr>
                                            <td>
                                              <select name="share_id[]" id="share_id" class="form-control select2bs4">
                                                <?php
                                                  include '../_config/config.php';
                                                  $sql="SELECT * FROM m_employee WHERE gol='G 12' order by share_id";
                                                  $hasil=mysqli_query($con,$sql);
                                                  while ($dataE = mysqli_fetch_array($hasil)) {
                                                ?>
                                                <option value="<?php echo $dataE['share_id'];?>"> <?php echo $dataE['share_id'];?> | <?php echo $dataE['nik'];?> | <?php echo $dataE['employee_name'];?></option>
                                                <?php } ?> 
                                              </select>
                                            </td>
                                            <td>
                                              <select name="id_machine[]" id="id_machine" class="form-control select2bs4">
                                                <?php
                                                  include '../_config/config.php';
                                                  $sql="SELECT * FROM m_machine order by id_machine";
                                                  $hasil=mysqli_query($con,$sql);
                                                  while ($dataM = mysqli_fetch_array($hasil)) {
                                                ?>
                                                <option value="<?php echo $dataM['id_machine'];?>"><?php echo $dataM['name_machine'];?></option>
                                                <?php } ?> 
                                              </select>
                                            </td>
                                            <td>
                                              <button type="button" name="add" id="add" class="btn btn-success" style="border-radius: 40px;" title="Add More"><i class="fas fa-plus-circle"></i> </button>
                                            </td>
                                          </tr>  
                                        </table>   
                                      </div> 
                                      <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius: 40px;">Close</button>
                                        <button type="submit" name="submit" id="submit" class="btn btn-primary" style="border-radius: 40px;"><i class="fas fa-paper-plane"></i> Simpan</button>
                                      </div> 
                                    </form>
                                    
                                  </div>
                                      
                              </div>
                            </div>
                          </div>
                          <p></p>
                          <table class="table table-striped" id="example3">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>SHARE ID | NIK</th>
                                <th>EMPLOYEE NAME</th>
                                <th>POSITION</th>
                                <th>SKU</th>
                                <th>NAME MACHINE</th>
                                <th style="text-align: center;"><i class="fas fa-cog"></i> Sett</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                include ('../_config/config.php');
                                $query = "SELECT m_operator.share_id, m_operator.id_machine, m_employee.share_id, m_employee.nik, m_employee.employee_name, m_employee.neo_sku, m_employee.posisi_by_sunfish, m_machine.id_machine, m_machine.name_machine FROM m_operator JOIN m_employee ON m_employee.share_id = m_operator.share_id JOIN m_machine ON m_machine.id_machine = m_operator.id_machine";
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
                                <td><?php echo $data['share_id'];?> | <?php echo $data['nik'] ?></td>
                                <td><?php echo $data['employee_name'];?></td>
                                <td><?php echo $data['posisi_by_sunfish'];?></td>
                                <td><?php echo $data['neo_sku'];?></td>
                                <td><?php echo $data['name_machine'];?></td>
                                <td style="text-align: center;">
                                  <!--<a href="" type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-inputEditMachine<?php echo $data['share_id'] ?>" title="Edit">
                                    <i class="fas fa-edit"></i>
                                  </a>
                                  <div class="modal fade" id="modal-inputEditMachine<?php echo $data['share_id'] ?>">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" style="align-content: center;"><i class="fas fa-edit text-primary"></i> Edit Data |Operator : <?php echo $data['employee_name'] ?> </h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form action="create_edit_opr_map_proses.php" method="post">
                                          <div class="modal-body">
                                            <div class="form-group row">
                                              <label for="share_id" class="col-sm-4 col-form-label">SHARE ID</label>
                                              <div class="col-sm-8">
                                                <select name="share_id" class="form-control select2bs4">
                                                  <?php
                                                    include '../_config/config.php';
                                                    $sql="SELECT * FROM m_employee WHERE gol='G 12?' order by share_id";
                                                    $hasil=mysqli_query($con,$sql);
                                                    echo "<option value=$data[share_id]>-- LAST : $data[employee_name] --</option>";
                                                    while ($dataE = mysqli_fetch_array($hasil)) {

                                                  ?>
                                                  <option value="<?php echo $dataE['share_id'];?>"> <?php echo $dataE['share_id'];?> | <?php echo $dataE['nik'];?> | <?php echo $dataE['employee_name'];?></option>
                                                  <?php } ?>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="id_machine" class="col-sm-4 col-form-label">MACHINE</label>
                                              <div class="col-sm-8">
                                                <select name="id_machine" class="form-control">
                                                  <?php
                                                    include '../_config/config.php';
                                                    $sql="SELECT * FROM m_machine order by id_machine";
                                                    $hasil=mysqli_query($con,$sql);
                                                    echo "<option value=$data[id_machine]>-- LAST : $data[name_machine] --</option>";
                                                    while ($dataM = mysqli_fetch_array($hasil)) {
                                                    
                                                  ?>
                                                  <option value="<?php echo $data['id_machine'];?>"><?php echo $data['name_machine'];?> <?php }?></option>
                                                </select>
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
                                  </div> -->

                                  <a href="./create_del_opr_map_proses.php?share_id=<?php echo $data['share_id'];?>" onclick="return confirm('Are you sure you want to delete data? The data will be permanently deleted.')" class="btn btn-outline-danger btn-md" title="Hapus Data"><i class="fas fa-trash"></i></a> 
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

  <script src="../plugins/select2/js/select2.full.min.js"></script>
  <script src="../dist/js/adminlte.min.js"></script>
  <script src="../dist/js/demo.js"></script>

  <script>  
    $(document).ready(function(){  
         var i=1;  
         $('#add').click(function(){  
              i++;  
              $('#dynamic_field').append('<tr id="row'+i+'"><td><select name="share_id[]" id="share_id" class="form-control select2bs4"><?php include '../_config/config.php'; $sql="SELECT * FROM m_employee WHERE gol='G 12?' order by share_id"; $hasil=mysqli_query($con,$sql);while ($dataE = mysqli_fetch_array($hasil)) {?><option value="<?php echo $dataE['share_id'];?>"> <?php echo $dataE['share_id'];?> | <?php echo $dataE['nik'];?> | <?php echo $dataE['employee_name'];?></option> <?php } ?> </select></td><td><select name="id_machine[]" id="id_machine" class="form-control select2bs4"><?php include '../_config/config.php'; $sql="SELECT * FROM m_machine order by id_machine"; $hasil=mysqli_query($con,$sql); while ($dataM = mysqli_fetch_array($hasil)) {?><option value="<?php echo $dataM['id_machine'];?>"><?php echo $dataM['name_machine'];?></option> <?php } ?> </select></td>  <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="border-radius: 40px;" title="Remove"><i class="fas fa-trash"></i> </button></td></tr>');  
         });  
         $(document).on('click', '.btn_remove', function(){  
              var button_id = $(this).attr("id");   
              $('#row'+button_id+'').remove();  
         });  
         $('#submit').click(function(){            
              $.ajax({  
                   url:"create_opr_map_proses.php",  
                   method:"POST",  
                   data:$('#add_name').serialize(),  
                   success:function(data)  
                   {  
                        alert(data);  
                        $('#add_name')[0].reset();  
                   }  
              });  
         });  
    });  
  </script>

  <script>

    $("#id_group").change(function(){
        // variabel dari nilai combo box group
        var id_group = $("#id_group").val();

        // Menggunakan ajax untuk mengirim dan dan menerima data dari server
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "u_ambil-data.php",
            data: "id_group="+id_group,
            success: function(data){
               $("#cost_center").html(data);
            }
        });
    });

    $("#cost_center").change(function(){
        // variabel dari nilai combo box merk
        var cost_center = $("#cost_center").val();

        // Menggunakan ajax untuk mengirim dan dan menerima data dari server
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "u_ambil-data.php",
            data: "cost_center="+cost_center,
            success: function(data){
                $("#cost_element").html(data);
            }
        });
    });
  </script>

  <script type="text/javascript"> 
    <?php echo $jsArray; ?>
      function changeValueBudget(id){
        document.getElementById('name_ce').value = prdName[id].name_ce;
        document.getElementById('ce_desc').value = prdName[id].ce_desc;
        document.getElementById('group_ce').value = prdName[id].group_ce;
        document.getElementById('plant_id').value = prdName[id].plant_id;
        document.getElementById('id_group').value = prdName[id].id_group;
      };
  </script>

  <script type="text/javascript"> 
    <?php echo $jsArray; ?>
      function changeValueOa(id){
        document.getElementById('no_item').value = prdName[id].no_item;
        document.getElementById('short_text').value = prdName[id].short_text;
        document.getElementById('vendor').value = prdName[id].vendor;
        document.getElementById('net_price').value = prdName[id].net_price;
        document.getElementById('currency').value = prdName[id].currency;
        document.getElementById('purchasing_document').value = prdName[id].purchasing_document;
      };
  </script>

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
        toastr.info('Create Header dilakukan 1x untuk 1 Pengajuan.')
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
