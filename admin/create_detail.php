

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
  <script type="text/javascript">
    function j_total_air(){
      var txtOneNumberValue   = document.getElementById('meter_awal').value;
      var txtTwoNumberValue   = document.getElementById('meter_akhir').value;

      var result = parseFloat(txtTwoNumberValue) - parseFloat(txtOneNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian').value = result;
      } 

      var result = (parseInt(txtTwoNumberValue) - parseInt(txtOneNumberValue)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan').value = result;
      }
    }
    function j_total_air3a(){
      var txtOneNumberValue   = document.getElementById('meter_awal3a').value;
      var txtTwoNumberValue   = document.getElementById('meter_akhir3a').value;

      var result = parseFloat(txtTwoNumberValue) - parseFloat(txtOneNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian3a').value = result;
      } 

      var result = (parseInt(txtTwoNumberValue) - parseInt(txtOneNumberValue)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan3a').value = result;
      }
    }
    function j_total_air3b(){
      var txtOneNumberValue   = document.getElementById('meter_awal3b').value;
      var txtTwoNumberValue   = document.getElementById('meter_akhir3b').value;

      var result = parseFloat(txtTwoNumberValue) - parseFloat(txtOneNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian3b').value = result;
      } 

      var result = (parseInt(txtTwoNumberValue) - parseInt(txtOneNumberValue)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan3b').value = result;
      }
    }
    function j_total_air4(){
      var txtOneNumberValue   = document.getElementById('meter_awal4').value;
      var txtTwoNumberValue   = document.getElementById('meter_akhir4').value;

      var result = parseFloat(txtTwoNumberValue) - parseFloat(txtOneNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian4').value = result;
      } 

      var result = (parseInt(txtTwoNumberValue) - parseInt(txtOneNumberValue)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan4').value = result;
      }
    }
    function j_total_air5(){
      var txtOneNumberValue   = document.getElementById('meter_awal5').value;
      var txtTwoNumberValue   = document.getElementById('meter_akhir5').value;

      var result = parseFloat(txtTwoNumberValue) - parseFloat(txtOneNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian5').value = result;
      } 

      var result = (parseInt(txtTwoNumberValue) - parseInt(txtOneNumberValue)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan5').value = result;
      }
    }

    function j_total_overflow(){
      var overflow1   = document.getElementById('meter_awal_overflow2').value;
      var overflow2   = document.getElementById('meter_akhir_overflow2').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_overflow2').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_overflow2').value = result;
      }
    }
    function j_total_overflow3a(){
      var overflow1   = document.getElementById('meter_awal_overflow3a').value;
      var overflow2   = document.getElementById('meter_akhir_overflow3a').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_overflow3a').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_overflow3a').value = result;
      }
    }
    function j_total_overflow3b(){
      var overflow1   = document.getElementById('meter_awal_overflow3b').value;
      var overflow2   = document.getElementById('meter_akhir_overflow3b').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_overflow3b').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_overflow3b').value = result;
      }
    }
    function j_total_overflow4(){
      var overflow1   = document.getElementById('meter_awal_overflow4').value;
      var overflow2   = document.getElementById('meter_akhir_overflow4').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_overflow4').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_overflow4').value = result;
      }
    }


    function j_total_mks5(){
      var overflow1   = document.getElementById('meter_awal_mks5').value;
      var overflow2   = document.getElementById('meter_akhir_mks5').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_mks5').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_mks5').value = result;
      }
    }
    function j_total_mks6(){
      var overflow1   = document.getElementById('meter_awal_mks6').value;
      var overflow2   = document.getElementById('meter_akhir_mks6').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_mks6').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_mks6').value = result;
      }
    }
    function j_total_mks12(){
      var overflow1   = document.getElementById('meter_awal_mks12').value;
      var overflow2   = document.getElementById('meter_akhir_mks12').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_mks12').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_mks12').value = result;
      }
    }
    function j_total_mks26(){
      var overflow1   = document.getElementById('meter_awal_mks26').value;
      var overflow2   = document.getElementById('meter_akhir_mks26').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_mks26').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_mks26').value = result;
      }
    }

    function j_total_bbp7(){
      var overflow1   = document.getElementById('meter_awal_bbp7').value;
      var overflow2   = document.getElementById('meter_akhir_bbp7').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_bbp7').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_bbp7').value = result;
      }
    }
    function j_total_bbp13(){
      var overflow1   = document.getElementById('meter_awal_bbp13').value;
      var overflow2   = document.getElementById('meter_akhir_bbp13').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_bbp13').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_bbp13').value = result;
      }
    }


    function j_total_m1(){
      var overflow1   = document.getElementById('meter_awal_m1').value;
      var overflow2   = document.getElementById('meter_akhir_m1').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_m1').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_m1').value = result;
      }
    }
    function j_total_m2(){
      var overflow1   = document.getElementById('meter_awal_m2').value;
      var overflow2   = document.getElementById('meter_akhir_m2').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_m2').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_m2').value = result;
      }
    }
    function j_total_m3(){
      var overflow1   = document.getElementById('meter_awal_m3').value;
      var overflow2   = document.getElementById('meter_akhir_m3').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_m3').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_m3').value = result;
      }
    }
    function j_total_m4(){
      var overflow1   = document.getElementById('meter_awal_m4').value;
      var overflow2   = document.getElementById('meter_akhir_m4').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_m4').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_m4').value = result;
      }
    }
    function j_total_m20(){
      var overflow1   = document.getElementById('meter_awal_m20').value;
      var overflow2   = document.getElementById('meter_akhir_m20').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_m20').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_m20').value = result;
      }
    }
    function j_total_m21(){
      var overflow1   = document.getElementById('meter_awal_m21').value;
      var overflow2   = document.getElementById('meter_akhir_m21').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_m21').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_m21').value = result;
      }
    }
    function j_total_m22(){
      var overflow1   = document.getElementById('meter_awal_m22').value;
      var overflow2   = document.getElementById('meter_akhir_m22').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_m22').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_m22').value = result;
      }
    }
    function j_total_m23(){
      var overflow1   = document.getElementById('meter_awal_m23').value;
      var overflow2   = document.getElementById('meter_akhir_m23').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_m23').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_m23').value = result;
      }
    }
    function j_total_m24(){
      var overflow1   = document.getElementById('meter_awal_m24').value;
      var overflow2   = document.getElementById('meter_akhir_m24').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_m24').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_m24').value = result;
      }
    }
    function j_total_m25(){
      var overflow1   = document.getElementById('meter_awal_m25').value;
      var overflow2   = document.getElementById('meter_akhir_m25').value;

      var result = parseFloat(overflow2) - parseFloat(overflow1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_m25').value = result;
      } 

      var result = (parseInt(overflow2) - parseInt(overflow1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_m25').value = result;
      }
    }

    function j_total_san1(){
      var nugodeg1   = document.getElementById('meter_awal_san1').value;
      var nugodeg2   = document.getElementById('meter_akhir_san1').value;

      var result = parseFloat(nugodeg2) - parseFloat(nugodeg1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_san1').value = result;
      } 

      var result = (parseInt(nugodeg2) - parseInt(nugodeg1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_san1').value = result;
      }
    }
    function j_total_san2(){
      var nugodeg1   = document.getElementById('meter_awal_san2').value;
      var nugodeg2   = document.getElementById('meter_akhir_san2').value;

      var result = parseFloat(nugodeg2) - parseFloat(nugodeg1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_san2').value = result;
      } 

      var result = (parseInt(nugodeg2) - parseInt(nugodeg1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_san2').value = result;
      }
    }
    function j_total_san3(){
      var nugodeg1   = document.getElementById('meter_awal_san3').value;
      var nugodeg2   = document.getElementById('meter_akhir_san3').value;

      var result = parseFloat(nugodeg2) - parseFloat(nugodeg1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_san3').value = result;
      } 

      var result = (parseInt(nugodeg2) - parseInt(nugodeg1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_san3').value = result;
      }
    }
    function j_total_san4(){
      var nugodeg1   = document.getElementById('meter_awal_san4').value;
      var nugodeg2   = document.getElementById('meter_akhir_san4').value;

      var result = parseFloat(nugodeg2) - parseFloat(nugodeg1) ;
      if (!isNaN(result)) {
        document.getElementById('pemakaian_san4').value = result;
      } 

      var result = (parseInt(nugodeg2) - parseInt(nugodeg1)) / ((60*60*24) / 1000) ;
      if (!isNaN(result)) {
        document.getElementById('pemantauan_san4').value = result;
      }
    }

    function total_sumur(){
      var txtOneNumberValue   = document.getElementById('sumur_awal').value;
      var txtTwoNumberValue   = document.getElementById('sumur_akhir').value;
      var txtThreeNumberValue   = document.getElementById('hod_awal').value;
      var txtFourNumberValue   = document.getElementById('hod_akhir').value;
      var txtFiveNumberValue   = document.getElementById('utility_awal').value;
      var txtSixNumberValue   = document.getElementById('utility_akhir').value;
      var txtSevenNumberValue   = document.getElementById('umum_awal').value;
      var txtEightNumberValue   = document.getElementById('umum_akhir').value;
      var txtNineNumberValue   = document.getElementById('tandon_awal').value;
      var txtTenNumberValue   = document.getElementById('tandon_akhir').value;
      var txtElevenNumberValue   = document.getElementById('rwh_awal').value;
      var txtTwelveNumberValue   = document.getElementById('rwh_akhir').value;

      var result = parseFloat(txtTwoNumberValue) - parseFloat(txtOneNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('sumur_pemakaian').value = result;
      }
      var result = parseFloat(txtFourNumberValue) - parseFloat(txtThreeNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('hod_pemakaian').value = result;
      }
      var result = parseFloat(txtSixNumberValue) - parseFloat(txtFiveNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('utility_pemakaian').value = result;
      }
      var result = parseFloat(txtEightNumberValue) - parseFloat(txtSevenNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('umum_pemakaian').value = result;
      }
      var result = (parseFloat(txtFourNumberValue) - parseFloat(txtThreeNumberValue)) + (parseFloat(txtSixNumberValue) - parseFloat(txtFiveNumberValue)) ;
      if (!isNaN(result)) {
        document.getElementById('air_pakai').value = result;
      }
      var result = parseFloat(txtTenNumberValue) - parseFloat(txtNineNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('tandon_pemakaian').value = result;
      }
      var result = parseFloat(txtTwelveNumberValue) - parseFloat(txtElevenNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('rwh_pemakaian').value = result;
      }
    }
  </script>

  <script type="text/javascript">

    function total_wwtp(){
      var txtSatuNumberValue        = document.getElementById('inlet1_awal_s1').value;
      var txtDuaNumberValue         = document.getElementById('inlet1_akhir_s1').value;
      var txtTigaNumberValue        = document.getElementById('inlet2_awal_s1').value;
      var txtEmpatNumberValue       = document.getElementById('inlet2_akhir_s1').value;
      var txtLimaNumberValue        = document.getElementById('outlet_awal_s1').value;
      var txtEnamNumberValue        = document.getElementById('outlet_akhir_s1').value;

      var txtTujuhNumberValue       = document.getElementById('inlet1_awal_s2').value;
      var txtDelapanNumberValue     = document.getElementById('inlet1_akhir_s2').value;
      var txtSembilanNumberValue    = document.getElementById('inlet2_awal_s2').value;
      var txtSepuluhNumberValue     = document.getElementById('inlet2_akhir_s2').value;
      var txtSebelasNumberValue     = document.getElementById('outlet_awal_s2').value;
      var txtDuabelasNumberValue    = document.getElementById('outlet_akhir_s2').value;

      var txtTigabelasNumberValue   = document.getElementById('inlet1_awal_s3').value;
      var txtEmpatbelasNumberValue  = document.getElementById('inlet1_akhir_s3').value;
      var txtLimabelasNumberValue   = document.getElementById('inlet2_awal_s3').value;
      var txtEnambelasNumberValue   = document.getElementById('inlet2_akhir_s3').value;
      var txtTujuhbelasNumberValue  = document.getElementById('outlet_awal_s3').value;
      var txtDelapanbelasNumberValue   = document.getElementById('outlet_akhir_s3').value;

      var result = parseFloat(txtDuaNumberValue) - parseFloat(txtSatuNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('inlet1_pemakaian_s1').value = result;
      }
      var result = parseFloat(txtEmpatNumberValue) - parseFloat(txtTigaNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('inlet2_pemakaian_s1').value = result;
      }
      var result = (parseFloat(txtDuaNumberValue) - parseFloat(txtSatuNumberValue)) + (parseFloat(txtEmpatNumberValue) - parseFloat(txtTigaNumberValue)) ;
      if (!isNaN(result)) {
        document.getElementById('total_inlet_1').value = result;
      }
      var result = parseFloat(txtEnamNumberValue) - parseFloat(txtLimaNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('outlet_pemakaian_s1').value = result;
      }


      var result = parseFloat(txtDelapanNumberValue) - parseFloat(txtTujuhNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('inlet1_pemakaian_s2').value = result;
      }
      var result = parseFloat(txtSepuluhNumberValue) - parseFloat(txtSembilanNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('inlet2_pemakaian_s2').value = result;
      }
      var result = (parseFloat(txtDelapanNumberValue) - parseFloat(txtTujuhNumberValue)) + (parseFloat(txtSepuluhNumberValue) - parseFloat(txtSembilanNumberValue)) ;
      if (!isNaN(result)) {
        document.getElementById('total_inlet_2').value = result;
      }
      var result = parseFloat(txtDuabelasNumberValue) - parseFloat(txtSebelasNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('outlet_pemakaian_s2').value = result;
      }


      var result = parseFloat(txtEmpatbelasNumberValue) - parseFloat(txtTigabelasNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('inlet1_pemakaian_s3').value = result;
      }
      var result = parseFloat(txtEnambelasNumberValue) - parseFloat(txtLimabelasNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('inlet2_pemakaian_s3').value = result;
      }
      var result = (parseFloat(txtEmpatbelasNumberValue) - parseFloat(txtTigabelasNumberValue)) + (parseFloat(txtEnambelasNumberValue) - parseFloat(txtLimabelasNumberValue)) ;
      if (!isNaN(result)) {
        document.getElementById('total_inlet_3').value = result;
      }
      var result = parseFloat(txtDelapanbelasNumberValue) - parseFloat(txtTujuhbelasNumberValue) ;
      if (!isNaN(result)) {
        document.getElementById('outlet_pemakaian_s3').value = result;
      }
    }
  </script>
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
              <h1 class="m-0 text-dark">D E W A 1.0</h1>
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
            
            <div class="col-12 col-sm-12">
              <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                  <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                    <li class="pt-2 px-3"><h3 class="card-title">Entry Data</h3></li>
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true"><i class="fas fa-tachometer-alt"></i> Sumber</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false"><i class="fas fa-tachometer-alt"></i> Overflow</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-mks-tab" data-toggle="pill" href="#custom-tabs-two-mks" role="tab" aria-controls="custom-tabs-two-mks" aria-selected="false"><i class="fas fa-tachometer-alt"></i> Mekarsari</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-bbp-tab" data-toggle="pill" href="#custom-tabs-two-bbp" role="tab" aria-controls="custom-tabs-two-bbp" aria-selected="false"><i class="fas fa-tachometer-alt"></i> BBP</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false"><i class="fas fa-users"></i> Masyarakat</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-sungai-tab" data-toggle="pill" href="#custom-tabs-two-sungai" role="tab" aria-controls="custom-tabs-two-sungai" aria-selected="false"><i class="fas fa-water"></i> Sungai</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-sanitasi-tab" data-toggle="pill" href="#custom-tabs-two-sanitasi" role="tab" aria-controls="custom-tabs-two-sanitasi" aria-selected="false"><i class="fas fa-reply"></i> Sanitasi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-flowrate-tab" data-toggle="pill" href="#custom-tabs-two-flowrate" role="tab" aria-controls="custom-tabs-two-flowrate" aria-selected="false"><i class="fas fa-chart-line"></i> Flowrate</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-bor-tab" data-toggle="pill" href="#custom-tabs-two-bor" role="tab" aria-controls="custom-tabs-two-bor" aria-selected="false"><i class="fas fa-long-arrow-alt-down"></i> Sumur Bor</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">

                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-default" title="Entry Data Sumber 2">
                                  <span class="badge bg-teal">M 10</span>
                                  <i class="fas fa-edit"></i> SUMBER 2
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_sumber2 ORDER BY id_sumber2 DESC LIMIT 1");
                                  $data = mysqli_fetch_assoc($query);
                                ?>

                                <?php
                                  include ('../_config/config.php');
                                  $query = "SELECT * FROM t_header ORDER BY id_header DESC LIMIT 1 ";
                                  $cek=mysqli_query($con, $query);
                                  $data2=mysqli_fetch_array($cek);
                                ?>

                                <div class="modal fade" id="modal-default">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | SUMBER 2 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_sumber2.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="S1-S2 - SUMBER 2" readonly>
                                              <input type="text" name="id_sungai" id="id_sungai" class="form-control" value="D1-S2 - DRAIN 2" hidden>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>" required>
                                              <input type="week" class="form-control" name="minggu" id="minggu" required>
                                              <input type="month" class="form-control" name="bulan" id="bulan" required>
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal" value="<?php echo $data['meter_akhir'] ?>" onkeyup="j_total_air();" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir"  onkeyup="j_total_air();" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- SUMBER 3A -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-danger" title="Entry Data Sumber 3A">
                                  <span class="badge bg-teal">M 8</span>
                                  <i class="fas fa-edit"></i> SUMBER 3A
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_sumber3a ORDER BY id_sumber3a DESC LIMIT 1");
                                  $data_s3a = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-danger">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | SUMBER 3A </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_sumber3a.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="S2-S3A - SUMBER 3A" readonly>
                                              <input type="text" name="id_sungai" id="id_sungai" class="form-control" value="D2-S3A - DRAIN 3A" hidden>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>" required>
                                              <input type="week" class="form-control" name="minggu" id="minggu" required>
                                              <input type="month" class="form-control" name="bulan" id="bulan" required>
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal3a" value="<?php echo $data_s3a['meter_akhir'] ?>" onkeyup="j_total_air3a();" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir3a"  onkeyup="j_total_air3a();" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian3a" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan3a" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- SUMBER 3B -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-info" title="Entry Data Sumber 3B">
                                  <span class="badge bg-teal">M 9</span>
                                  <i class="fas fa-edit"></i> SUMBER 3B
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_sumber3b ORDER BY id_sumber3b DESC LIMIT 1");
                                  $data_s3b = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-info">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | SUMBER 3B </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_sumber3b.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="S3-S3B - SUMBER 3B" readonly>
                                              <input type="text" name="id_sungai" id="id_sungai" class="form-control" value="D3-S3B - DRAIN 3B" hidden>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>" required>
                                              <input type="week" class="form-control" name="minggu" id="minggu" required>
                                              <input type="month" class="form-control" name="bulan" id="bulan" required>
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="meter_awal" id="meter_awal3b" value="<?php echo $data_s3b['meter_akhir'] ?>" onkeyup="j_total_air3b();" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="meter_akhir" id="meter_akhir3b"  onkeyup="j_total_air3b();" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="pemakaian" id="pemakaian3b" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="pemantauan" id="pemantauan3b" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                                

                                <!-- SUMBER 4 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-primary" title="Entry Data Sumber 4">
                                  <span class="badge bg-teal">M 11</span>
                                  <i class="fas fa-edit"></i> SUMBER 4
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_sumber4 ORDER BY id_sumber4 DESC LIMIT 1");
                                  $data_4 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-primary">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | SUMBER 4 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_sumber4.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="S4-S4 - SUMBER 4" readonly>
                                              <input type="text" name="id_sungai" id="id_sungai" class="form-control" value="D4-S4 - DRAIN 4" hidden>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>" required>
                                              <input type="week" class="form-control" name="minggu" id="minggu" required>
                                              <input type="month" class="form-control" name="bulan" id="bulan" required>
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="meter_awal" id="meter_awal4" value="<?php echo $data_4['meter_akhir'] ?>" onkeyup="j_total_air4();" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="meter_akhir" id="meter_akhir4"  onkeyup="j_total_air4();" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="pemakaian" id="pemakaian4" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="pemantauan" id="pemantauan4" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- SUMBER 5 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-s5" title="Entry Data Sumber 4">
                                  <span class="badge bg-teal">M 19</span>
                                  <i class="fas fa-edit"></i> SUMBER 5
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_sumber5 ORDER BY id_sumber5 DESC LIMIT 1");
                                  $data_4 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-s5">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | SUMBER 5 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_sumber5.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="S5-S5 - SUMBER 5" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>" required>
                                              <input type="week" class="form-control" name="minggu" id="minggu" required>
                                              <input type="month" class="form-control" name="bulan" id="bulan" required>
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="meter_awal" id="meter_awal5" value="<?php echo $data_4['meter_akhir'] ?>" onkeyup="j_total_air5();" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="meter_akhir" id="meter_akhir5"  onkeyup="j_total_air5();" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="pemakaian" id="pemakaian5" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="pemantauan" id="pemantauan5" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr style="background-color: teal; color: whitesmoke;">
                                      <td style="text-align: center;">SUMBER 2 : METERAN 10</td>
                                      <td style="text-align: center;">SUMBER 3A : METERAN 8</td>
                                      <td style="text-align: center;">SUMBER 3B : METERAN 9</td>
                                      <td style="text-align: center;">SUMBER 4 : METERAN 11</td>
                                      <td style="text-align: center;">SUMBER 5 : METERAN 19</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>SUMBER 2</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example1">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sumber2 ORDER BY id_sumber2 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>SUMBER 3A</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example3">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sumber3a ORDER BY id_sumber3a DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>SUMBER 3B</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example4">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sumber3b ORDER BY id_sumber3b DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>SUMBER 4</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example5">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sumber4 ORDER BY id_sumber4 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>SUMBER 5</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example50">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sumber5 ORDER BY id_sumber5 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
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
                    <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">

                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-secondary" title="Entry Data Overflow M14">
                                  <span class="badge bg-teal">M 17</span>
                                  <i class="fas fa-edit"></i> OVERFLOW SUMBER 2
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_overflow14 ORDER BY id_overflow14 DESC LIMIT 1");
                                  $overflow14 = mysqli_fetch_assoc($query);
                                ?>

                                <?php
                                  include ('../_config/config.php');
                                  $query = "SELECT * FROM t_header ORDER BY id_header DESC LIMIT 1 ";
                                  $cek=mysqli_query($con, $query);
                                  $data2=mysqli_fetch_array($cek);
                                ?>

                                <div class="modal fade" id="modal-secondary">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | OVERFLOW SUMBEE 2 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_overflow14.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="O1-S2 - OVERFLOW 2" readonly>
                                              <input type="text" name="id_sungai" id="id_sungai" class="form-control" value="D1-S2 - DRAIN 2" hidden>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_overflow2" value="<?php echo $overflow14['meter_akhir'] ?>" onkeyup="j_total_overflow();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_overflow2"  onkeyup="j_total_overflow();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_overflow2" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="pemantauan" id="pemantauan_overflow2" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- OVERFLOW 15 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-warning" title="Entry Data OVERFLOW 15">
                                  <span class="badge bg-teal">M 15</span>
                                  <i class="fas fa-edit"></i> OVERFLOW SUMBER 3A
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_overflow15 ORDER BY id_overflow15 DESC LIMIT 1");
                                  $overflow15 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-warning">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | OVERFLOW SUMBER 3A </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_overflow15.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="O2-S3A - OVERFLOW 3A" readonly>
                                              <input type="text" name="id_sungai" id="id_sungai" class="form-control" value="D1-S3A - DRAIN 3A" hidden>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_overflow3a" value="<?php echo $overflow15['meter_akhir'] ?>" onkeyup="j_total_overflow3a();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_overflow3a"  onkeyup="j_total_overflow3a();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_overflow3a" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="pemantauan" id="pemantauan_overflow3a" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- OVERFLOW 16 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-success" title="Entry Data OVERFLOW 16">
                                  <span class="badge bg-teal">M 16</span>
                                  <i class="fas fa-edit"></i> OVERFLOW SUMBER 3B
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_overflow16 ORDER BY id_overflow16 DESC LIMIT 1");
                                  $overflow16 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-success">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | OVERFLOW SUMBER 3B </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_overflow16.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="O3-S3B - OVERFLOW 3B" readonly>
                                              <input type="text" name="id_sungai" id="id_sungai" class="form-control" value="D3-S3B - DRAIN 3B" hidden>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_overflow3b" value="<?php echo $overflow16['meter_akhir'] ?>" onkeyup="j_total_overflow3b();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_overflow3b"  onkeyup="j_total_overflow3b();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_overflow3b" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="pemantauan" id="pemantauan_overflow3b" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                                

                                <!-- OVERFLOW 17 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-sm" title="Entry Data OVERFLOW 17">
                                  <span class="badge bg-teal">M 14</span>
                                  <i class="fas fa-edit"></i> OVERFLOW SUMBER 4
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_overflow17 ORDER BY id_overflow17 DESC LIMIT 1");
                                  $overflow17 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-sm">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | OVERFLOW SUMBER 4 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_overflow17.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="O4-S4 - OVERFLOW 4" readonly>
                                              <input type="text" name="id_sungai" id="id_sungai" class="form-control" value="D4-S4 - DRAIN 4" hidden>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_overflow4" value="<?php echo $overflow17['meter_akhir'] ?>" onkeyup="j_total_overflow4();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_overflow4"  onkeyup="j_total_overflow4();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_overflow4" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="number" class="form-control" name="pemantauan" id="pemantauan_overflow4" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr style="background-color: purple; color: whitesmoke;">
                                      <td style="text-align: center;">OVERFLOW SUMBER 4 : METERAN 14</td>
                                      <td style="text-align: center;">OVERFLOW SUMBER 3A : METERAN 15</td>
                                      <td style="text-align: center;">OVERFLOW SUMBER 3B : METERAN 16</td>
                                      <td style="text-align: center;">OVERFLOW SUMBER 2 : METERAN 17</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>OVERFLOW M-14</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example6">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_overflow14 ORDER BY id_overflow14 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>OVERFLOW M-15</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example7">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_overflow15 ORDER BY id_overflow15 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>OVERFLOW M-16</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example8">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_overflow16 ORDER BY id_overflow16 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>OVERFLOW M-17</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example9">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_overflow17 ORDER BY id_overflow17 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
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

                       Overflow dengan <b style="color: blue;">Meteran 14</b>, <b style="color: blue;">Meteran 15</b>, <b style="color: blue;">Meteran 16</b> & <b style="color: blue;">Meteran 17</b> adalah Perhitungan sebelum ke Giant Tank. 
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-mks" role="tabpanel" aria-labelledby="custom-tabs-two-mks-tab">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">

                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mks5" title="Entry Data MEKARSARI M-5">
                                  <span class="badge bg-teal">M 5</span>
                                  <i class="fas fa-edit"></i> MEKARSARI M-5
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_mekarsari5 ORDER BY id_mekarsari5 DESC LIMIT 1");
                                  $mekarsari5 = mysqli_fetch_assoc($query);
                                ?>

                                <?php
                                  include ('../_config/config.php');
                                  $query = "SELECT * FROM t_header ORDER BY id_header DESC LIMIT 1 ";
                                  $cek=mysqli_query($con, $query);
                                  $data2=mysqli_fetch_array($cek);
                                ?>

                                <div class="modal fade" id="modal-mks5">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MEKARSARI M-5 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_mekarsari5.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="P1-MKS - MEKARSARI 5" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_mks5" value="<?php echo $mekarsari5['meter_akhir'] ?>" onkeyup="j_total_mks5();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_mks5"  onkeyup="j_total_mks5();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_mks5" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_mks5" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- MEKARSARI M-6 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mks6" title="Entry Data MEKARSARI M-6">
                                  <span class="badge bg-teal">M 6</span>
                                  <i class="fas fa-edit"></i> MEKARSARI M-6
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_mekarsari6 ORDER BY id_mekarsari6 DESC LIMIT 1");
                                  $mekarsari6 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mks6">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MEKARSARI M-6 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_mekarsari6.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="P2-MKS - MEKARSARI 6" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_mks6" value="<?php echo $mekarsari6['meter_akhir'] ?>" onkeyup="j_total_mks6();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_mks6"  onkeyup="j_total_mks6();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_mks6" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_mks6" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- MEKARSARI M-12 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mks12" title="Entry Data MEKARSARI M-12">
                                  <span class="badge bg-teal">M 12</span>
                                  <i class="fas fa-edit"></i> MEKARSARI M-12
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_mekarsari12 ORDER BY id_mekarsari12 DESC LIMIT 1");
                                  $mekarsari12 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mks12">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MEKARSARI M-12 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_mekarsari12.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="P3-MKS - MEKARSARI 12" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_mks12" value="<?php echo $mekarsari12['meter_akhir'] ?>" onkeyup="j_total_mks12();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_mks12"  onkeyup="j_total_mks12();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_mks12" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_mks12" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                                

                                <!-- MEKARSARI M-26 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mks26" title="Entry Data MEKARSARI M-26">
                                  <span class="badge bg-teal">M 26</span>
                                  <i class="fas fa-edit"></i> MEKARSARI M-26
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_mekarsari26 ORDER BY id_mekarsari26 DESC LIMIT 1");
                                  $mekarsari26 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mks26">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MEKARSARI M-26 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_mekarsari26.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="MOTOR 26 - MEKARSARI 26" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_mks26" value="<?php echo $mekarsari26['meter_akhir'] ?>" onkeyup="j_total_mks26();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_mks26"  onkeyup="j_total_mks26();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_mks26" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_mks26" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr style="background-color: orange; color: whitesmoke;">
                                      <td style="text-align: center;">MEKARSARI : METERAN 5</td>
                                      <td style="text-align: center;">MEKARSARI : METERAN 6</td>
                                      <td style="text-align: center;">MEKARSARI : METERAN 12</td>
                                      <td style="text-align: center;">MEKARSARI : METERAN 26</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MEKARSARI M-5</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example10">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_mekarsari5 ORDER BY id_mekarsari5 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MEKARSARI M-6</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example11">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_mekarsari6 ORDER BY id_mekarsari6 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MEKARSARI M-12</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example12">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_mekarsari12 ORDER BY id_mekarsari12 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MEKARSARI M-26</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example13">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_mekarsari26 ORDER BY id_mekarsari26 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
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
                       Data Meteran ke Mekarsari. 
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-bbp" role="tabpanel" aria-labelledby="custom-tabs-two-bbp-tab">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">

                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-bbp7" title="Entry Data BBP M-7">
                                  <span class="badge bg-teal">M 7</span>
                                  <i class="fas fa-edit"></i> BBP M-7
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_bbp7 ORDER BY id_bbp7 DESC LIMIT 1");
                                  $bbp7 = mysqli_fetch_assoc($query);
                                ?>

                                <?php
                                  include ('../_config/config.php');
                                  $query = "SELECT * FROM t_header ORDER BY id_header DESC LIMIT 1 ";
                                  $cek=mysqli_query($con, $query);
                                  $data2=mysqli_fetch_array($cek);
                                ?>

                                <div class="modal fade" id="modal-bbp7">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | BBP M-7 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_bbp7.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="P5-BBP - BBP 7" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_bbp7" value="<?php echo $bbp7['meter_akhir'] ?>" onkeyup="j_total_bbp7();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_bbp7"  onkeyup="j_total_bbp7();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_bbp7" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_bbp7" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- BBP M-13 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-bbp13" title="Entry Data BBP M-13">
                                  <span class="badge bg-teal">M 13</span>
                                  <i class="fas fa-edit"></i> BBP M-13
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_bbp13 ORDER BY id_bbp13 DESC LIMIT 1");
                                  $bbp13 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-bbp13">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | BBP M-13 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_bbp13.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="P6-BBP - BBP 13" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_bbp13" value="<?php echo $bbp13['meter_akhir'] ?>" onkeyup="j_total_bbp13();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_bbp13"  onkeyup="j_total_bbp13();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_bbp13" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_bbp13" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr style="background-color: orange; color: whitesmoke;">
                                      <td style="text-align: center;">BBP : METERAN 7</td>
                                      <td style="text-align: center;">BBP : METERAN 13</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>BBP M-7</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example14">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_bbp7 ORDER BY id_bbp7 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>BBP M-13</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example15">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_bbp13 ORDER BY id_bbp13 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
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
                       Data Meteran ke BBP.
                        
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-body">

                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mas1" title="Entry Data MASYARAKAT M-1">
                                  <span class="badge bg-teal">M 1</span>
                                  <i class="fas fa-users"></i> MASYARAKAT M-1
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_masyarakat1 ORDER BY id_masyarakat DESC LIMIT 1");
                                  $masyarakat1 = mysqli_fetch_assoc($query);
                                ?>

                                <?php
                                  include ('../_config/config.php');
                                  $query = "SELECT * FROM t_header ORDER BY id_header DESC LIMIT 1 ";
                                  $cek=mysqli_query($con, $query);
                                  $data2=mysqli_fetch_array($cek);
                                ?>

                                <div class="modal fade" id="modal-mas1">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MASYARAKAT M-1 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_masyarakat1.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="M1 - MASYARAKAT M-1" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_m1" value="<?php echo $masyarakat1['meter_akhir'] ?>" onkeyup="j_total_m1();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_m1"  onkeyup="j_total_m1();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_m1" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_m1" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- MASYARAKAT M-2 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mas2" title="Entry Data MASYARAKAT M-2">
                                  <span class="badge bg-teal">M 2</span>
                                  <i class="fas fa-users"></i> MASYARAKAT M-2
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_masyarakat2 ORDER BY id_masyarakat DESC LIMIT 1");
                                  $masyarakat2 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mas2">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MASYARAKAT M-2 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_masyarakat2.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="M2 - MASYARAKAT M-2" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_m2" value="<?php echo $masyarakat2['meter_akhir'] ?>" onkeyup="j_total_m2();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_m2"  onkeyup="j_total_m2();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_m2" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_m2" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- MASYARAKAT M-3 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mas3" title="Entry Data MASYARAKAT M-3">
                                  <span class="badge bg-teal">M 3</span>
                                  <i class="fas fa-users"></i> MASYARAKAT M-3
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_masyarakat3 ORDER BY id_masyarakat DESC LIMIT 1");
                                  $masyarakat3 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mas3">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MASYARAKAT M-3 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_masyarakat3.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="M3 - MASYARAKAT M-3" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_m3" value="<?php echo $masyarakat3['meter_akhir'] ?>" onkeyup="j_total_m3();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_m3"  onkeyup="j_total_air();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_m3" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_m3" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                                

                                <!-- MASYARAKAT M-4 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mas4" title="Entry Data MASYARAKAT M-4">
                                  <span class="badge bg-teal">M 4</span>
                                  <i class="fas fa-users"></i> MASYARAKAT M-4
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_masyarakat4 ORDER BY id_masyarakat DESC LIMIT 1");
                                  $masyarakat4 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mas4">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MASYARAKAT M-4 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_masyarakat4.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="M4 - MASYARAKAT M-4" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_m4" value="<?php echo $masyarakat4['meter_akhir'] ?>" onkeyup="j_total_m4();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_m4"  onkeyup="j_total_air();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_m4" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_m4" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- MASYARAKAT M-20 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mas20" title="Entry Data MASYARAKAT M-20">
                                  <span class="badge bg-teal">M 20</span>
                                  <i class="fas fa-users"></i> MASYARAKAT M-20
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_masyarakat20 ORDER BY id_masyarakat DESC LIMIT 1");
                                  $masyarakat20 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mas20">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MASYARAKAT M-20 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_masyarakat20.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="M20 - MASYARAKAT M-20" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_m20" value="<?php echo $masyarakat20['meter_akhir'] ?>" onkeyup="j_total_m20();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_m20"  onkeyup="j_total_m20();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_m20" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_m20" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- MASYARAKAT M-21 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mas21" title="Entry Data MASYARAKAT M-21">
                                  <span class="badge bg-teal">M 21</span>
                                  <i class="fas fa-users"></i> MASYARAKAT M-21
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_masyarakat21 ORDER BY id_masyarakat DESC LIMIT 1");
                                  $masyarakat21 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mas21">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MASYARAKAT M-21 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_masyarakat21.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="M21 - MASYARAKAT M-21" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_m21" value="<?php echo $masyarakat21['meter_akhir'] ?>" onkeyup="j_total_m21();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_m21"  onkeyup="j_total_m21();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_m21" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_m21" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- MASYARAKAT M-22 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mas22" title="Entry Data MASYARAKAT M-22">
                                  <span class="badge bg-teal">M 22</span>
                                  <i class="fas fa-users"></i> MASYARAKAT M-22
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_masyarakat22 ORDER BY id_masyarakat DESC LIMIT 1");
                                  $masyarakat22 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mas22">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MASYARAKAT M-22 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_masyarakat22.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="M22 - MASYARAKAT M-22" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_m22" value="<?php echo $masyarakat22['meter_akhir'] ?>" onkeyup="j_total_m22();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_m22"  onkeyup="j_total_m22();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_m22" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_m22" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- MASYARAKAT M-23 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mas23" title="Entry Data MASYARAKAT M-23">
                                  <span class="badge bg-teal">M 23</span>
                                  <i class="fas fa-users"></i> MASYARAKAT M-23
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_masyarakat23 ORDER BY id_masyarakat DESC LIMIT 1");
                                  $masyarakat23 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mas23">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MASYARAKAT M-23 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_masyarakat23.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="M23 - MASYARAKAT M-23" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_m23" value="<?php echo $masyarakat23['meter_akhir'] ?>" onkeyup="j_total_m23();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_m23"  onkeyup="j_total_m23();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_m23" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_m23" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- MASYARAKAT M-24 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mas24" title="Entry Data MASYARAKAT M-24">
                                  <span class="badge bg-teal">M 24</span>
                                  <i class="fas fa-users"></i> MASYARAKAT M-24
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_masyarakat24 ORDER BY id_masyarakat DESC LIMIT 1");
                                  $masyarakat24 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mas24">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MASYARAKAT M-24 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_masyarakat24.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="M24 - MASYARAKAT M-24" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_m24" value="<?php echo $masyarakat24['meter_akhir'] ?>" onkeyup="j_total_m24();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_m24"  onkeyup="j_total_m24();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_m24" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_m24" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- MASYARAKAT M-25 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-mas25" title="Entry Data MASYARAKAT M-25">
                                  <span class="badge bg-teal">M 25</span>
                                  <i class="fas fa-users"></i> MASYARAKAT M-25
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_masyarakat25 ORDER BY id_masyarakat DESC LIMIT 1");
                                  $masyarakat25 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-mas25">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | MASYARAKAT M-25 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_masyarakat25.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_detail" id="id_detail" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="M25 - MASYARAKAT M-25" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_m25" value="<?php echo $masyarakat25['meter_akhir'] ?>" onkeyup="j_total_m25();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_m25"  onkeyup="j_total_m25();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_m25" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_m25" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-body">
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr style="background-color: green; color: whitesmoke;">
                                      <td style="text-align: center;" colspan="4">OVERFLOW SUMBER 2, 3A, 3B & 4</td>
                                      <td style="text-align: center;" colspan="6">SUMBER 5 : METERAN 19</td>
                                    </tr>
                                    <tr style="background-color: green; color: whitesmoke;">
                                      <td style="text-align: center;">MASYARAKAT : METERAN 1</td>
                                      <td style="text-align: center;">MASYARAKAT : METERAN 2</td>
                                      <td style="text-align: center;">MASYARAKAT : METERAN 3</td>
                                      <td style="text-align: center;">MASYARAKAT : METERAN 4</td>

                                      <td style="text-align: center;">MASYARAKAT : METERAN 20</td>
                                      <td style="text-align: center;">MASYARAKAT : METERAN 21</td>
                                      <td style="text-align: center;">MASYARAKAT : METERAN 22</td>
                                      <td style="text-align: center;">MASYARAKAT : METERAN 23</td>
                                      <td style="text-align: center;">MASYARAKAT : METERAN 24</td>
                                      <td style="text-align: center;">MASYARAKAT : METERAN 25</td>
                                    </tr>
                                    <tr style="background-color: green; color: whitesmoke;">
                                      <td style="text-align: center;">Kp. PAPISANGAN</td>
                                      <td style="text-align: center;">Kp. PAPISANGAN LIO</td>
                                      <td style="text-align: center;">Kp. POJOK</td>
                                      <td style="text-align: center;">Kp. PAK MANTA</td>

                                      <td style="text-align: center;">Kp. KUBANG</td>
                                      <td style="text-align: center;">Ds. BBP</td>
                                      <td style="text-align: center;">Kp. DARMAGA</td>
                                      <td style="text-align: center;">Kp. PASIR DALEM</td>
                                      <td style="text-align: center;">Kp. PASIR KUBANG</td>
                                      <td style="text-align: center;">KP. KUTA</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MASYARAKAT M-1</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example16">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_masyarakat1 ORDER BY id_masyarakat DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MASYARAKAT M-2</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example17">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_masyarakat2 ORDER BY id_masyarakat DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MASYARAKAT M-3</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example18">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_masyarakat3 ORDER BY id_masyarakat DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MASYARAKAT M-4</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example19">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_masyarakat4 ORDER BY id_masyarakat DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MASYARAKAT M-20</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example20">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_masyarakat20 ORDER BY id_masyarakat DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MASYARAKAT M-21</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example21">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_masyarakat21 ORDER BY id_masyarakat DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MASYARAKAT M-22</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example22">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_masyarakat22 ORDER BY id_masyarakat DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MASYARAKAT M-23</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example23">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_masyarakat23 ORDER BY id_masyarakat DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MASYARAKAT M-24</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example24">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_masyarakat24 ORDER BY id_masyarakat DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>MASYARAKAT M-25</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example25">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_masyarakat25 ORDER BY id_masyarakat DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
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
                       Data Meteran untuk Masyarakat. 26-30
                    </div>

                    <div class="tab-pane fade" id="custom-tabs-two-sungai" role="tabpanel" aria-labelledby="custom-tabs-two-sungai-tab">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-water text-primary"></i> <b>DRAIN SUMBER 2</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example31">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sungai2 ORDER BY id_sungai2 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-water text-primary"></i> <b>DRAIN SUMBER 3A</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example32">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sungai3a ORDER BY id_sungai3a DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-water text-primary"></i> <b>DRAIN SUMBER 3B</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example33">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sungai3b ORDER BY id_sungai3b DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-water text-primary"></i> <b>DRAIN SUMBER 4</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example34">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sungai4 ORDER BY id_sungai4 DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
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
                      Data Meteran Sungai. 31-35
                    </div>

                    <div class="tab-pane fade" id="custom-tabs-two-sanitasi" role="tabpanel" aria-labelledby="custom-tabs-two-sanitasi-tab">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">

                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-san1" title="Entry Data SANITASI 1">
                                  <span class="badge bg-teal">S 1</span>
                                  <i class="fas fa-reply"></i> sanitasi 1
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_sanitasi1 ORDER BY id_sanitasi DESC LIMIT 1");
                                  $sanitasi1 = mysqli_fetch_assoc($query);
                                ?>

                                <?php
                                  include ('../_config/config.php');
                                  $query = "SELECT * FROM t_header ORDER BY id_header DESC LIMIT 1 ";
                                  $cek=mysqli_query($con, $query);
                                  $data2=mysqli_fetch_array($cek);
                                ?>

                                <div class="modal fade" id="modal-san1">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | SANITASI 1 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_sanitasi1.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_sanitasi" id="id_sanitasi" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="D1 - SANITASI 1" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_san1" value="<?php echo $sanitasi1['meter_akhir'] ?>" onkeyup="j_total_san1();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_san1"  onkeyup="j_total_san1();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_san1" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_san1" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- SANITASI 2 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-san2" title="Entry Data SANITASI 2">
                                  <span class="badge bg-teal">S 2</span>
                                  <i class="fas fa-reply"></i> SANITASI 2
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_sanitasi2 ORDER BY id_sanitasi DESC LIMIT 1");
                                  $sanitasi2 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-san2">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | SANITASI 2 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_sanitasi2.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_sanitasi" id="id_sanitasi" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="D2 - SANITASI 2" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_san2" value="<?php echo $sanitasi2['meter_akhir'] ?>" onkeyup="j_total_san2();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_san2"  onkeyup="j_total_san2();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_san2" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_san2" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- SANITASI 3 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-san3" title="Entry Data SANITASI 3">
                                  <span class="badge bg-teal">S 3</span>
                                  <i class="fas fa-reply"></i> SANITASI 3
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_sanitasi3 ORDER BY id_sanitasi DESC LIMIT 1");
                                  $sanitasi3 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-san3">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | SANITASI 3 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_sanitasi3.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_sanitasi" id="id_sanitasi" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="D3 - SANITASI 3" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_san3" value="<?php echo $sanitasi3['meter_akhir'] ?>" onkeyup="j_total_san3();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_san3"  onkeyup="j_total_san3();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_san3" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_san3" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                                

                                <!-- SANITASI 4 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-san4" title="Entry Data SANITASI 4">
                                  <span class="badge bg-teal">S 4</span>
                                  <i class="fas fa-reply"></i> SANITASI 4
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_sanitasi4 ORDER BY id_sanitasi DESC LIMIT 1");
                                  $sanitasi4 = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-san4">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | SANITASI 4 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_sanitasi4.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_sanitasi" id="id_sanitasi" hidden>
                                              <input type="text" name="id_motor" id="id_motor" class="form-control" value="D4 - SANITASI 4" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="week" class="form-control" name="minggu" id="minggu">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_awal" class="col-sm-4 col-form-label">Meter Awal</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_awal" id="meter_awal_san4" value="<?php echo $sanitasi4['meter_akhir'] ?>" onkeyup="j_total_san4();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="meter_akhir" class="col-sm-4 col-form-label">Meter akhir</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="meter_akhir" id="meter_akhir_san4"  onkeyup="j_total_san4();">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemakaian" class="col-sm-4 col-form-label">Pemakaian</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemakaian" id="pemakaian_san4" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="pemantauan" class="col-sm-4 col-form-label">Liter/Detik</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="pemantauan" id="pemantauan_san4" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Catatan</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="catatan" id="catatan" class="form-control">
                                              <input type="text" name="petugas" id="petugas" hidden>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr style="background-color: orange; color: whitesmoke;">
                                      <td style="text-align: center;">SANITASI 1 :</td>
                                      <td style="text-align: center;">SANITASI 2 :</td>
                                      <td style="text-align: center;">SANITASI 3 :</td>
                                      <td style="text-align: center;">SANITASI 4 :</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-reply text-primary"></i> <b>SANITASI 1</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example36">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sanitasi1 ORDER BY id_sanitasi DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-reply text-primary"></i> <b>SANITASI 2</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example37">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sanitasi2 ORDER BY id_sanitasi DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-reply text-primary"></i> <b>SANITASI 3</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example38">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sanitasi3 ORDER BY id_sanitasi DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-reply text-primary"></i> <b>SANITASI 4</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example39">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">METER AWAL(M3)</th>
                                      <th style="text-align: center;">METER AKHIR(M3)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M3)</th>
                                      <th style="text-align: center;">PEMANTAUAN (L/S)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sanitasi4 ORDER BY id_sanitasi DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['meter_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['pemantauan'],0,',','.');?></td>
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
                      Data Meteran Sanitasi. 36-40
                    </div>

                    <div class="tab-pane fade" id="custom-tabs-two-flowrate" role="tabpanel" aria-labelledby="custom-tabs-two-flowrate-tab">
                      <!-- Data Flow Rate-->
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">

                                <!-- FLOWRATE 2 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-flowrate1" title="Entry Data Flowrate Sumber 2">
                                  <span class="badge bg-teal">FR 2</span>
                                  <i class="fas fa-edit"></i> SUMBER 2
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_flowrate ORDER BY id_flowrate DESC LIMIT 1");
                                  $flowrate1 = mysqli_fetch_assoc($query);
                                ?>

                                <?php
                                  include ('../_config/config.php');
                                  $query = "SELECT * FROM t_header ORDER BY id_header DESC LIMIT 1 ";
                                  $cek=mysqli_query($con, $query);
                                  $data2=mysqli_fetch_array($cek);
                                ?>

                                <div class="modal fade" id="modal-flowrate1">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | FLOWRATE SUMBER 2 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_flowrate1.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">ID Header</label>
                                            <div class="col-sm-6">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_flowrate" id="id_flowrate" hidden>
                                              <input type="text" name="name_flowrate" id="name_flowrate" class="form-control" value="FLOWRATE SUMBER 2" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="petugas" class="col-sm-6 col-form-label">Created</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="petugas" id="petugas">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-6 col-form-label">Date</label>
                                            <div class="col-sm-6">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="conductivity" class="col-sm-6 col-form-label">Conductivity AVerage uS/cm</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="conductivity" id="conductivity">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="flowrate" class="col-sm-6 col-form-label">Flowrate Instantaneous Values l/s</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="flowrate" id="flowrate">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="ph_sumber" class="col-sm-6 col-form-label">pH Average</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="ph_sumber" id="ph_sumber">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="temp_sumber" class="col-sm-6 col-form-label">Temperature Average <sup>0</sup>C</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="temp_sumber" id="temp_sumber">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="status_flowrate" class="col-sm-6 col-form-label">Status</label>
                                            <div class="col-sm-6">
                                              <select name="status_flowrate" id="status_flowrate" class="form-control" required>
                                                <option value="">--Select Status--</option>
                                                <option value="OK"> OK</option>
                                                <option value="NOT OK"> NOT OK</option>
                                              </select>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- FLOWRATE 3 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-flowrate2" title="Entry Data Flowrate Sumber 3A">
                                  <span class="badge bg-teal">FR 3</span>
                                  <i class="fas fa-edit"></i> SUMBER 3
                                </a>

                                <div class="modal fade" id="modal-flowrate2">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | FLOWRATE SUMBER 3 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_flowrate2.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">ID Header</label>
                                            <div class="col-sm-6">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_flowrate" id="id_flowrate" hidden>
                                              <input type="text" name="name_flowrate" id="name_flowrate" class="form-control" value="FLOWRATE SUMBER 3" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="petugas" class="col-sm-6 col-form-label">Created</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="petugas" id="petugas">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-6 col-form-label">Date</label>
                                            <div class="col-sm-6">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="conductivity" class="col-sm-6 col-form-label">Conductivity AVerage uS/cm</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="conductivity" id="conductivity">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="flowrate" class="col-sm-6 col-form-label">Flowrate Instantaneous Values l/s</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="flowrate" id="flowrate">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="ph_sumber" class="col-sm-6 col-form-label">pH Average</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="ph_sumber" id="ph_sumber">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="temp_sumber" class="col-sm-6 col-form-label">Temperature Average <sup>0</sup>C</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="temp_sumber" id="temp_sumber">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="status_flowrate" class="col-sm-6 col-form-label">Status</label>
                                            <div class="col-sm-6">
                                              <select name="status_flowrate" id="status_flowrate" class="form-control" required>
                                                <option value="">--Select Status--</option>
                                                <option value="OK"> OK</option>
                                                <option value="NOT OK"> NOT OK</option>
                                              </select>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>



                                <!-- FLOWRATE 4 -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-flowrate4" title="Entry Data Flowrate Sumber 4">
                                  <span class="badge bg-teal">FR 4</span>
                                  <i class="fas fa-edit"></i> SUMBER 4
                                </a>

                                <div class="modal fade" id="modal-flowrate4">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | FLOWRATE SUMBER 4 </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_flowrate4.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">ID Header</label>
                                            <div class="col-sm-6">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_flowrate" id="id_flowrate" hidden>
                                              <input type="text" name="name_flowrate" id="name_flowrate" class="form-control" value="FLOWRATE SUMBER 4" readonly>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="petugas" class="col-sm-6 col-form-label">Created</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="petugas" id="petugas">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-6 col-form-label">Date</label>
                                            <div class="col-sm-6">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="conductivity" class="col-sm-6 col-form-label">Conductivity AVerage uS/cm</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="conductivity" id="conductivity">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="flowrate" class="col-sm-6 col-form-label">Flowrate Instantaneous Values l/s</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="flowrate" id="flowrate">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="ph_sumber" class="col-sm-6 col-form-label">pH Average</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="ph_sumber" id="ph_sumber">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="temp_sumber" class="col-sm-6 col-form-label">Temperature Average <sup>0</sup>C</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="temp_sumber" id="temp_sumber">
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="status_flowrate" class="col-sm-6 col-form-label">Status</label>
                                            <div class="col-sm-6">
                                              <select name="status_flowrate" id="status_flowrate" class="form-control" required>
                                                <option value="">--Select Status--</option>
                                                <option value="OK"> OK</option>
                                                <option value="NOT OK"> NOT OK</option>
                                              </select>
                                            </div>
                                          </div>

                                          <p>* Kolom yang di arsir abu, data terisi secara otomatis.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">
                                <table class="table table-bordered">
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_flowrate WHERE name_flowrate='FLOWRATE SUMBER 2' ORDER BY id_flowrate DESC LIMIT 1 ";
                                      $result = mysqli_query($con, $query);
                                      if (!$result) {
                                        die("Query Error: ".mysqli_errno($con).
                                          "-".mysqli_errno($con));
                                      }
                                      $no = 1;
                                      while ($flow1 = mysqli_fetch_assoc($result))
                                      {
                                    ?>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_flowrate WHERE name_flowrate='FLOWRATE SUMBER 3' ORDER BY id_flowrate DESC LIMIT 1 ";
                                      $result = mysqli_query($con, $query);
                                      if (!$result) {
                                        die("Query Error: ".mysqli_errno($con).
                                          "-".mysqli_errno($con));
                                      }
                                      $no = 1;
                                      while ($flow2 = mysqli_fetch_assoc($result))
                                      {
                                    ?>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_flowrate WHERE name_flowrate='FLOWRATE SUMBER 4' ORDER BY id_flowrate DESC LIMIT 1";
                                      $result = mysqli_query($con, $query);
                                      if (!$result) {
                                        die("Query Error: ".mysqli_errno($con).
                                          "-".mysqli_errno($con));
                                      }
                                      $no = 1;
                                      while ($flow3 = mysqli_fetch_assoc($result))
                                      {
                                    ?>
                                    <tr style="background-color: #6495ED; color: whitesmoke;">
                                      <td style="text-align: center;">SUMBER 2 : <?php echo $flow1['flowrate'] ?> </td>
                                      <td style="text-align: center;">SUMBER 3 : <?php echo $flow2['flowrate'] ?></td>
                                      <td style="text-align: center;">SUMBER 4 : <?php echo $flow3['flowrate'] ?></td>
                                    </tr>
                                    <?php } } } ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-temperature-high text-primary"></i> <b>FLOWRATE SUMBER 2</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example41">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">CONDUCTIVITY AVERAGE uS/cm</th>
                                      <th style="text-align: center;">FLOWRATE INSTANTANEOUS l/s</th>
                                      <th style="text-align: center;">pH AVERAGE</th>
                                      <th style="text-align: center;">TEMPERATURE AVERAGE <sup>0</sup>c</th>
                                      <th style="text-align: center;">STATUS</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_flowrate WHERE name_flowrate='FLOWRATE SUMBER 2' ORDER BY id_flowrate DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo $data['conductivity'];?></td>
                                      <td style="text-align: center;"><?php echo $data['flowrate'];?></td>
                                      <td style="text-align: center;"><?php echo $data['ph_sumber'];?></td>
                                      <td style="text-align: center;"><?php echo $data['temp_sumber'];?></td>
                                      <td style="text-align: center;">
                                        <?php 
                                          ;
                                          if ($data['status_flowrate'] == 'OK') {
                                              echo '<span class="btn btn-success btn-sm">OK</span>';
                                          }
                                          elseif ($data['status_flowrate'] == 'NOT OK') {
                                              echo '<span class="btn btn-danger btn-sm">NOT OK</span>';
                                          }
                                        ?>
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

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-temperature-high text-primary"></i> <b>FLOWRATE SUMBER 3</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example42">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">CONDUCTIVITY AVERAGE uS/cm</th>
                                      <th style="text-align: center;">FLOWRATE INSTANTANEOUS l/s</th>
                                      <th style="text-align: center;">pH AVERAGE</th>
                                      <th style="text-align: center;">TEMPERATURE AVERAGE <sup>0</sup>c</th>
                                      <th style="text-align: center;">STATUS</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_flowrate WHERE name_flowrate='FLOWRATE SUMBER 3' ORDER BY id_flowrate DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo $data['conductivity'];?></td>
                                      <td style="text-align: center;"><?php echo $data['flowrate'];?></td>
                                      <td style="text-align: center;"><?php echo $data['ph_sumber'];?></td>
                                      <td style="text-align: center;"><?php echo $data['temp_sumber'];?></td>
                                      <td style="text-align: center;">
                                        <?php 
                                          ;
                                          if ($data['status_flowrate'] == 'OK') {
                                              echo '<span class="btn btn-success btn-sm">OK</span>';
                                          }
                                          elseif ($data['status_flowrate'] == 'NOT OK') {
                                              echo '<span class="btn btn-danger btn-sm">NOT OK</span>';
                                          }
                                        ?>
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

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-temperature-high text-primary"></i> <b>FLOWRATE SUMBER 4</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example43">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">CONDUCTIVITY AVERAGE uS/cm</th>
                                      <th style="text-align: center;">FLOWRATE INSTANTANEOUS l/s</th>
                                      <th style="text-align: center;">pH AVERAGE</th>
                                      <th style="text-align: center;">TEMPERATURE AVERAGE <sup>0</sup>c</th>
                                      <th style="text-align: center;">STATUS</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_flowrate WHERE name_flowrate='FLOWRATE SUMBER 4' ORDER BY id_flowrate DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo $data['conductivity'];?></td>
                                      <td style="text-align: center;"><?php echo $data['flowrate'];?></td>
                                      <td style="text-align: center;"><?php echo $data['ph_sumber'];?></td>
                                      <td style="text-align: center;"><?php echo $data['temp_sumber'];?></td>
                                      <td style="text-align: center;">
                                        <?php 
                                          ;
                                          if ($data['status_flowrate'] == 'OK') {
                                              echo '<span class="btn btn-success btn-sm">OK</span>';
                                          }
                                          elseif ($data['status_flowrate'] == 'NOT OK') {
                                              echo '<span class="btn btn-danger btn-sm">NOT OK</span>';
                                          }
                                        ?>
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
                      Data Meteran Flowrate. 41-45
                    </div>

                    <div class="tab-pane fade" id="custom-tabs-two-bor" role="tabpanel" aria-labelledby="custom-tabs-two-bor-tab">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">

                                <!--Modal Create Header-->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-phtr" title="Create Header pH, Temp & WWTP">
                                  <i class="fas fa-temperature-high"></i> WWTP
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_ph_tr ORDER BY id_ph_tr DESC LIMIT 1");
                                  $ph_tr = mysqli_fetch_assoc($query);
                                ?>

                                <?php
                                  include ('../_config/config.php');
                                  $query = "SELECT * FROM t_header ORDER BY id_header DESC LIMIT 1 ";
                                  $cek=mysqli_query($con, $query);
                                  $data2=mysqli_fetch_array($cek);
                                ?>

                                <?php 
                                  require_once '../_config/config.php';
                                  $today = date('ymd');
                                  $char = 'pTW-'. $today;
                                  $query = mysqli_query($con, "SELECT max(id_ph_tr) as max_id FROM t_ph_tr WHERE id_ph_tr LIKE '{$char}%' ORDER BY id_ph_tr DESC LIMIT 1");
                                  $data = mysqli_fetch_assoc($query);

                                  $getId = $data['max_id'];
                                  $no = substr($getId, -2, 2);
                                  $no = (int) $no;
                                  $no += 1;
                                  $newId = $char . sprintf("%02s", $no);
                                ?>

                                <div class="modal fade" id="modal-phtr">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Create Header | pH, Temp & WWTP </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_phtr.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">ID Header</label>
                                            <div class="col-sm-8">
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_ph_tr" id="id_ph_tr"  value="<?php echo $newId ?>" hidden>
                                              <input type="text" name="id_wwtp_tr" id="id_wwtp_tr"  value="<?php echo $newId ?>" hidden>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="month" class="form-control" name="bulan" id="bulan">
                                              <input type="text" name="status_ph" id="status_ph" value="CREATE" hidden>
                                              <input type="text" name="max_release" id="max_release" value="500" hidden>
                                            </div>
                                          </div>

                                          <p>* Create Header dilakukan untuk transaksi awal, selanjutnya lakukan pada Input data pH pada Tabel.</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                <!-- SUMUR & RECYCLE -->
                                <a href="" type="button" class="btn btn-app" data-toggle="modal" data-target="#modal-sumur" title="Entry Data SUMUR & RECYCLE">
                                  <span class="badge bg-teal">S&R</span>
                                  <i class="fas fa-edit"></i> SUMUR & RECYCLE
                                </a>

                                <?php 
                                  require_once '../_config/config.php';
                                  $query = mysqli_query($con, "SELECT * FROM t_sumur ORDER BY id_sumur DESC LIMIT 1");
                                  $sumur = mysqli_fetch_assoc($query);
                                ?>

                                <div class="modal fade" id="modal-sumur">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | SUMUR & RECYCLE : <?php echo $data2['id_header'] ?> </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="proses_sumur.php" method="post">
                                        <div class="modal-body">

                                          <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Petugas</label>
                                            <div class="col-sm-4">
                                              <input type="text" name="nama" id="nama" class="form-control" readonly>
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" hidden>
                                              <input type="text" name="id_sumur" id="id_sumur" hidden>
                                            </div>

                                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-4">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="text" class="form-control" name="bulan" id="bulan" value="<?php echo date('Y-m') ?>" hidden>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <div class="col-sm-12">
                                              <table class="table table-sm">
                                                <thead>
                                                  <tr>
                                                    <th style="text-align: center; color: blue;" colspan="2">SUMUR BOR</th>
                                                    <th style="text-align: center; color: blue;" colspan="2">RECYCLE</th>
                                                  </tr>
                                                  <tr>
                                                    <th>Meter Awal</th>
                                                    <th>Meter Akhir</th>
                                                    <th>Meter Awal</th>
                                                    <th>Meter Akhir</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td><input type="number" name="sumur_awal" id="sumur_awal" class="form-control"  onkeyup="total_sumur();" required></td>
                                                    <td><input type="number" name="sumur_akhir" id="sumur_akhir" class="form-control" onkeyup="total_sumur();" required></td>
                                                    <td><input type="number" name="umum_awal" id="umum_awal" class="form-control" onkeyup="total_sumur();" required></td>
                                                    <td><input type="number" name="umum_akhir" id="umum_akhir" class="form-control" onkeyup="total_sumur();" required></td>
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
                                                    <th style="text-align: center; color: blue;" colspan="2">SOFTENER OUT HOD</th>
                                                    <th style="text-align: center; color: blue;" colspan="2">SOFTENER OUT UTILITY</th>
                                                  </tr>
                                                  <tr>
                                                    <th>Meter Awal</th>
                                                    <th>Meter Akhir</th>
                                                    <th>Meter Awal</th>
                                                    <th>Meter Akhir</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td><input type="number" name="hod_awal" id="hod_awal" class="form-control" onkeyup="total_sumur();" required></td>
                                                    <td><input type="number" name="hod_akhir" id="hod_akhir" class="form-control" onkeyup="total_sumur();" required></td>

                                                    <td><input type="number" name="utility_awal" id="utility_awal" class="form-control" onkeyup="total_sumur();" required></td>
                                                    <td><input type="number" name="utility_akhir" id="utility_akhir" class="form-control" onkeyup="total_sumur();" required></td>
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
                                                    <th style="text-align: center; color: blue;" colspan="2">TANDON HYDRANT</th>
                                                    <th style="text-align: center; color: blue;" colspan="2">RWH</th>
                                                  </tr>
                                                  <tr>
                                                    <th>Meter Awal</th>
                                                    <th>Meter Akhir</th>
                                                    <th>Meter Awal</th>
                                                    <th>Meter Akhir</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td><input type="number" name="tandon_awal" id="tandon_awal" class="form-control" onkeyup="total_sumur();" required></td>
                                                    <td><input type="number" name="tandon_akhir" id="tandon_akhir" class="form-control" onkeyup="total_sumur();" required></td>

                                                    <td><input type="number" name="rwh_awal" id="rwh_awal" class="form-control" onkeyup="total_sumur();" required></td>
                                                    <td><input type="number" name="rwh_akhir" id="rwh_akhir" class="form-control" onkeyup="total_sumur();" required></td>
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
                                                    <th style="text-align: center; color: blue;" colspan="7"> TOTAL CATATAN METERAN</th>
                                                  </tr>
                                                  <tr>
                                                    <th>SUMUR</th>
                                                    <th>RECYCLE</th>
                                                    <th>AIR DIPAKAI</th>
                                                    <th>OUT HOD</th>
                                                    <th>OUT UTILITY</th>
                                                    <th>HIDRANT</th>
                                                    <th>RWH</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td><input type="number" name="sumur_pemakaian" id="sumur_pemakaian" class="form-control" title="* Kolom yang di arsir abu, data terisi secara otomatis." readonly></td>
                                                    <td><input type="number" name="umum_pemakaian" id="umum_pemakaian" class="form-control" title="* Kolom yang di arsir abu, data terisi secara otomatis." readonly></td>
                                                    <td><input type="number" name="air_pakai" id="air_pakai" class="form-control" title="* Kolom yang di arsir abu, data terisi secara otomatis." readonly></td>
                                                    <td><input type="number" name="hod_pemakaian" id="hod_pemakaian" class="form-control" title="* Kolom yang di arsir abu, data terisi secara otomatis." readonly></td>
                                                    <td><input type="number" name="utility_pemakaian" id="utility_pemakaian" class="form-control" readonly></td>
                                                    <td><input type="number" name="tandon_pemakaian" id="tandon_pemakaian" class="form-control" title="* Kolom yang di arsir abu, data terisi secara otomatis." readonly></td>
                                                    <td><input type="number" name="rwh_pemakaian" id="rwh_pemakaian" class="form-control" title="* Kolom yang di arsir abu, data terisi secara otomatis." readonly></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="catatan" class="col-sm-2 col-form-label">Temuan</label>
                                            <div class="col-sm-10">
                                              <input type="text" class="form-control" name="catatan" id="catatan" >
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

                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">
                                <table class="table table-bordered">
                                  <tbody>
                                    <tr style="background-color: grey; color: whitesmoke;">
                                      <td style="text-align: center;">MEKARSARI : pH</td>
                                      <td style="text-align: center;">MEKARSARI : WWTP</td>
                                      <td style="text-align: center;">MEKARSARI : SUMUR BOR</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="container-fluid">
                        <div class="row">
                          <?php
                            include '../_config/config.php';
                            $query = "SELECT * FROM t_ph WHERE status_ph='CREATE' ORDER BY id_ph_tr";
                            $result = mysqli_query($con, $query);
                            if (!$result) {
                              die("Query Error: ".mysqli_errno($con).
                                "-".mysqli_errno($con));
                            }
                            $no = 1;
                            while ($dataph = mysqli_fetch_assoc($result))
                            {
                          ?>
                          <?php
                            include '../_config/config.php';
                            $query = "SELECT * FROM t_wwtp WHERE status_ph='CREATE' ORDER BY id_wwtp_tr";
                            $result = mysqli_query($con, $query);
                            if (!$result) {
                              die("Query Error: ".mysqli_errno($con).
                                "-".mysqli_errno($con));
                            }
                            $no = 1;
                            while ($datawwtp = mysqli_fetch_assoc($result))
                            {
                          ?>
                          <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                              <div class="info-box-content">
                                <div class="card-header">
                                  <h6 style="text-align: center;">INPUT pH, TEMP & WWTP</h6>
                                  <h3 style="text-align: center; color: darkblue;"><i class="fas fa-tags"></i></h3>


                                </div>
                                <div class="card-body">
                                  <a href="" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-inputphs1<?php echo $dataph['id_ph_tr'] ?>" title="Input Data pH">
                                    <i class="fas fa-temperature-high"></i> SHIFT 1
                                  </a>
                                  <div class="modal fade" id="modal-inputphs1<?php echo $dataph['id_ph_tr'] ?>">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | pH No. Reg : <?php echo $dataph['id_ph_tr'] ?> </h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form action="proses_phs1.php" method="post">
                                          <div class="modal-body">

                                            <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Id Header</label>
                                              <div class="col-sm-4">
                                                <input type="text" name="id_header" id="id_header" value="<?php echo $dataph['id_header'] ?>" class="form-control" readonly>
                                                <input type="text" name="id_ph_tr" id="id_ph_tr" value="<?php echo $dataph['id_ph_tr'] ?>" class="form-control" hidden>
                                                <input type="text" name="id_wwtp" id="id_wwtp" value="<?php echo $datawwtp['id_wwtp'] ?>" class="form-control" hidden>
                                                <input type="text" name="id_ph" id="id_ph" value="<?php echo $dataph['id_ph'] ?>" class="form-control" hidden>
                                              </div>

                                              <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                              <div class="col-sm-4">
                                                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $dataph['tanggal'] ?>" readonly>
                                                <input type="text" class="form-control" name="bulan" id="bulan" value="<?php echo $dataph['bulan'] ?>" hidden>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label for="petugas1" class="col-sm-2 col-form-label">Petugas</label>
                                              <div class="col-sm-4">
                                                <input type="text" name="petugas1" id="petugas1" value="<?php echo $dataph['petugas1'] ?>" class="form-control" >
                                              </div>
                                              <label><h3 style="text-align: center; background-color: blue; color: whitesmoke;">SHIFT 1</h3></label>
                                            </div>

                                            <h4 style="text-align: center; color: red;">Gunakan Titik untuk bilangan desimal</h4>
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
                                                      <td><input type="text" name="phin1" id="phin1" class="form-control" value="<?php echo $dataph['phin1'] ?>"   onkeyup="total_ph();" required></td> 
                                                      <td><input type="text" name="phou1" id="phou1" class="form-control" value="<?php echo $dataph['phou1'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempin1" id="tempin1" class="form-control" value="<?php echo $dataph['tempin1'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou1" id="tempou1" class="form-control" value="<?php echo $dataph['tempou1'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                    <tr>
                                                      <td><input type="text" name="" value="08:00-10:00" class="form-control" readonly> </td>
                                                      <td><input type="text" name="phin2" id="phin2" class="form-control" value="<?php echo $dataph['phin2'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="phou2" id="phou2" class="form-control" value="<?php echo $dataph['phou2'] ?>"  onkeyup="total_ph();" required></td>
                                                      
                                                      <td><input type="text" name="tempin2" id="tempin2" class="form-control" value="<?php echo $dataph['tempin2'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou2" id="tempou2" class="form-control" value="<?php echo $dataph['tempou2'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                    <tr>
                                                      <td><input type="text" name="" value="10:00-12:00" class="form-control" readonly> </td>
                                                      <td><input type="text" name="phin3" id="phin3" class="form-control" value="<?php echo $dataph['phin3'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="phou3" id="phou3" class="form-control" value="<?php echo $dataph['phou3'] ?>"  onkeyup="total_ph();" required></td>
                                                      
                                                      <td><input type="text" name="tempin3" id="tempin3" class="form-control" value="<?php echo $dataph['tempin3'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou3" id="tempou3" class="form-control" value="<?php echo $dataph['tempou3'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                    <tr>
                                                      <td><input type="text" name="" value="12:00-14:00" class="form-control" readonly> </td>
                                                      <td><input type="text" name="phin4" id="phin4" class="form-control" value="<?php echo $dataph['phin4'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="phou4" id="phou4" class="form-control" value="<?php echo $dataph['phou4'] ?>"  onkeyup="total_ph();" required></td>
                                                      
                                                      <td><input type="text" name="tempin4" id="tempin4" class="form-control" value="<?php echo $dataph['tempin4'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou4" id="tempou4" class="form-control" value="<?php echo $dataph['tempou4'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label for="catatan1" class="col-sm-4 col-form-label">Issue pH & Temp</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="catatan1" id="catatan1" value="<?php echo $dataph['catatan1'] ?>" placeholder="masukan jika ada temuan" >
                                              </div>

                                              <label for="act1" class="col-sm-4 col-form-label">Action</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="act1" id="act1" value="<?php echo $dataph['act1'] ?>" placeholder="Aksi yang dilakukan dari temuan tersebut" >
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <div class="col-sm-12">
                                                <table class="table table-sm">
                                                  <thead>
                                                    <tr>
                                                      <th style="text-align: center; color: blue;" colspan="6">FLOW METER WWTP</th>
                                                    </tr>
                                                    <tr>
                                                      <th style="text-align: center;" colspan="2">FLOW METER 1 INLET</th>
                                                      <th style="text-align: center;" colspan="2">FLOW METER 2 INLET</th>
                                                      <th style="text-align: center;" colspan="2">FLOW METER OUTLET</th>
                                                    </tr>
                                                    <tr>
                                                      <th>AWAL (M<sup>3</sup>)</th>
                                                      <th>AKHIR (M<sup>3</sup>)</th>
                                                      <th>AWAL (M<sup>3</sup>)</th>
                                                      <th>AKHIR (M<sup>3</sup>)</th>

                                                      <th>AWAL (M<sup>3</sup>)</th>
                                                      <th>AKHIR (M<sup>3</sup>)</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td><input type="text" name="inlet1_awal_s1" id="inlet1_awal_s1" class="form-control" value="<?php echo $datawwtp['inlet1_awal_s1'] ?>"  onkeyup="total_wwtp();" required></td>
                                                      <td><input type="text" name="inlet1_akhir_s1" id="inlet1_akhir_s1" class="form-control" value="<?php echo $datawwtp['inlet1_akhir_s1'] ?>" onkeyup="total_wwtp();" required></td>
                                                      

                                                      <td><input type="text" name="inlet2_awal_s1" id="inlet2_awal_s1" class="form-control" value="<?php echo $datawwtp['inlet2_awal_s1'] ?>"  onkeyup="total_wwtp();" required></td>
                                                      <td><input type="text" name="inlet2_akhir_s1" id="inlet2_akhir_s1" class="form-control" value="<?php echo $datawwtp['inlet2_akhir_s1'] ?>" onkeyup="total_wwtp();" required></td>

                                                      <td><input type="text" name="outlet_awal_s1" id="outlet_awal_s1" class="form-control" value="<?php echo $datawwtp['outlet_awal_s1'] ?>"  onkeyup="total_wwtp();" required></td>
                                                      <td><input type="text" name="outlet_akhir_s1" id="outlet_akhir_s1" class="form-control" value="<?php echo $datawwtp['outlet_akhir_s1'] ?>" onkeyup="total_wwtp();" required></td>

                                                    </tr>
                                                    <tr>
                                                      <td style="text-align: center;">INLET 1 (M<sup>3</sup>)</td>
                                                      <td style="text-align: center;">INLET 2 (M<sup>3</sup>)</td>
                                                      <td style="text-align: center;" colspan="2">JUMLAH INLET (M<sup>3</sup>)</td>
                                                      <td style="text-align: center;" colspan="2">OUTLET (M<sup>3</sup>)</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="text-align: center;"><input type="number" name="inlet1_pemakaian_s1" id="inlet1_pemakaian_s1" class="form-control" value="<?php echo $datawwtp['inlet1_pemakaian_s1'] ?>" readonly></td>
                                                      <td style="text-align: center;"><input type="number" name="inlet2_pemakaian_s1" id="inlet2_pemakaian_s1" class="form-control" value="<?php echo $datawwtp['inlet2_pemakaian_s1'] ?>" readonly></td>
                                                      <td style="text-align: center;" colspan="2"><input type="number" name="total_inlet_1" id="total_inlet_1" class="form-control" value="<?php echo $datawwtp['total_inlet_1'] ?>" readonly></td>

                                                      <td style="text-align: center;" colspan="2"><input type="number" name="outlet_pemakaian_s1" id="outlet_pemakaian_s1" class="form-control" value="<?php echo $datawwtp['outlet_pemakaian_s1'] ?>" readonly></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label for="wcatatan1" class="col-sm-4 col-form-label">Issue Flow Meter WWTP</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="wcatatan1" id="wcatatan1" value="<?php echo $datawwtp['wcatatan1'] ?>" placeholder="masukan jika ada temuan" >
                                              </div>

                                              <label for="wact1" class="col-sm-4 col-form-label">Action</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="wact1" id="wact1" value="<?php echo $datawwtp['wact1'] ?>" placeholder="Aksi yang dilakukan dari temuan tersebut" >
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


                                  <a href="" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-inputphs2<?php echo $dataph['id_ph_tr'] ?>" title="Input Data pH">
                                    <i class="fas fa-temperature-high"></i> SHIFT 2
                                  </a>
                                  <div class="modal fade" id="modal-inputphs2<?php echo $dataph['id_ph_tr'] ?>">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | pH No. Reg : <?php echo $dataph['id_ph_tr'] ?> </h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form action="proses_phs2.php" method="post">
                                          <div class="modal-body">

                                            <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Id Header</label>
                                              <div class="col-sm-4">
                                                <input type="text" name="id_header" id="id_header" value="<?php echo $dataph['id_header'] ?>" class="form-control" readonly>
                                                <input type="text" name="id_ph_tr" id="id_ph_tr" value="<?php echo $dataph['id_ph_tr'] ?>" class="form-control" hidden>
                                                <input type="text" name="id_wwtp" id="id_wwtp" value="<?php echo $datawwtp['id_wwtp'] ?>" class="form-control" hidden>
                                                <input type="text" name="id_ph" id="id_ph" value="<?php echo $dataph['id_ph'] ?>" class="form-control" hidden>
                                              </div>

                                              <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                              <div class="col-sm-4">
                                                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $dataph['tanggal'] ?>" readonly>
                                                <input type="text" class="form-control" name="bulan" id="bulan" value="<?php echo $dataph['bulan'] ?>" hidden>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label for="petugas2" class="col-sm-2 col-form-label">Petugas</label>
                                              <div class="col-sm-4">
                                                <input type="text" name="petugas2" id="petugas2" value="<?php echo $dataph['petugas2'] ?>" class="form-control" >
                                              </div>
                                              <label><h3 style="text-align: center; background-color: blue; color: whitesmoke;">SHIFT 2</h3></label>
                                            </div>

                                            <h4 style="text-align: center; color: red;">Gunakan Titik untuk bilangan desimal</h4>
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
                                                      <td><input type="text" name="" value="14:00-16:00" class="form-control" readonly> </td>
                                                      <td><input type="text" name="phin5" id="phin5" class="form-control" value="<?php echo $dataph['phin5'] ?>"   onkeyup="total_ph();" required></td> 
                                                      <td><input type="text" name="phou5" id="phou5" class="form-control" value="<?php echo $dataph['phou5'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempin5" id="tempin5" class="form-control" value="<?php echo $dataph['tempin5'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou5" id="tempou5" class="form-control" value="<?php echo $dataph['tempou5'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                    <tr>
                                                      <td><input type="text" name="" value="16:00-18:00" class="form-control" readonly> </td>
                                                      <td><input type="text" name="phin6" id="phin6" class="form-control" value="<?php echo $dataph['phin6'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="phou6" id="phou6" class="form-control" value="<?php echo $dataph['phou6'] ?>"  onkeyup="total_ph();" required></td>
                                                      
                                                      <td><input type="text" name="tempin6" id="tempin6" class="form-control" value="<?php echo $dataph['tempin6'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou6" id="tempou6" class="form-control" value="<?php echo $dataph['tempou6'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                    <tr>
                                                      <td><input type="text" name="" value="18:00-20:00" class="form-control" readonly> </td>
                                                      <td><input type="text" name="phin7" id="phin7" class="form-control" value="<?php echo $dataph['phin7'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="phou7" id="phou7" class="form-control" value="<?php echo $dataph['phou7'] ?>"  onkeyup="total_ph();" required></td>
                                                      
                                                      <td><input type="text" name="tempin7" id="tempin7" class="form-control" value="<?php echo $dataph['tempin7'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou7" id="tempou7" class="form-control" value="<?php echo $dataph['tempou7'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                    <tr>
                                                      <td><input type="text" name="" value="20:00-22:00" class="form-control" readonly> </td>
                                                      <td><input type="text" name="phin8" id="phin8" class="form-control" value="<?php echo $dataph['phin8'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="phou8" id="phou8" class="form-control" value="<?php echo $dataph['phou8'] ?>"  onkeyup="total_ph();" required></td>
                                                      
                                                      <td><input type="text" name="tempin8" id="tempin8" class="form-control" value="<?php echo $dataph['tempin8'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou8" id="tempou8" class="form-control" value="<?php echo $dataph['tempou8'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label for="catatan2" class="col-sm-4 col-form-label">Issue pH & Temp</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="catatan2" id="catatan2" value="<?php echo $dataph['catatan2'] ?>" placeholder="masukan jika ada temuan" >
                                              </div>

                                              <label for="act2" class="col-sm-4 col-form-label">Action</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="act2" id="act2" value="<?php echo $dataph['act2'] ?>" placeholder="Aksi yang dilakukan dari temuan tersebut" >
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <div class="col-sm-12">
                                                <table class="table table-sm">
                                                  <thead>
                                                    <tr>
                                                      <th style="text-align: center; color: blue;" colspan="6">FLOW METER WWTP</th>
                                                    </tr>
                                                    <tr>
                                                      <th style="text-align: center;" colspan="2">FLOW METER 1 INLET</th>
                                                      <th style="text-align: center;" colspan="2">FLOW METER 2 INLET</th>
                                                      <th style="text-align: center;" colspan="2">FLOW METER OUTLET</th>
                                                    </tr>
                                                    <tr>
                                                      <th>AWAL (M<sup>3</sup>)</th>
                                                      <th>AKHIR (M<sup>3</sup>)</th>
                                                      <th>AWAL (M<sup>3</sup>)</th>
                                                      <th>AKHIR (M<sup>3</sup>)</th>

                                                      <th>AWAL (M<sup>3</sup>)</th>
                                                      <th>AKHIR (M<sup>3</sup>)</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td><input type="text" name="inlet1_awal_s2" id="inlet1_awal_s2" class="form-control" value="<?php echo $datawwtp['inlet1_awal_s2'] ?>"  onkeyup="total_wwtp();" required></td>
                                                      <td><input type="text" name="inlet1_akhir_s2" id="inlet1_akhir_s2" class="form-control" value="<?php echo $datawwtp['inlet1_akhir_s2'] ?>" onkeyup="total_wwtp();" required></td>
                                                      

                                                      <td><input type="text" name="inlet2_awal_s2" id="inlet2_awal_s2" class="form-control" value="<?php echo $datawwtp['inlet2_awal_s2'] ?>"  onkeyup="total_wwtp();" required></td>
                                                      <td><input type="text" name="inlet2_akhir_s2" id="inlet2_akhir_s2" class="form-control" value="<?php echo $datawwtp['inlet2_akhir_s2'] ?>" onkeyup="total_wwtp();" required></td>

                                                      <td><input type="text" name="outlet_awal_s2" id="outlet_awal_s2" class="form-control" value="<?php echo $datawwtp['outlet_awal_s2'] ?>"  onkeyup="total_wwtp();" required></td>
                                                      <td><input type="text" name="outlet_akhir_s2" id="outlet_akhir_s2" class="form-control" value="<?php echo $datawwtp['outlet_akhir_s2'] ?>" onkeyup="total_wwtp();" required></td>

                                                    </tr>
                                                    <tr>
                                                      <td style="text-align: center;">INLET 1 (M<sup>3</sup>)</td>
                                                      <td style="text-align: center;">INLET 2 (M<sup>3</sup>)</td>
                                                      <td style="text-align: center;" colspan="2">JUMLAH INLET (M<sup>3</sup>)</td>
                                                      <td style="text-align: center;" colspan="2">OUTLET (M<sup>3</sup>)</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="text-align: center;"><input type="number" name="inlet1_pemakaian_s2" id="inlet1_pemakaian_s2" class="form-control" value="<?php echo $datawwtp['inlet1_pemakaian_s2'] ?>" readonly></td>
                                                      <td style="text-align: center;"><input type="number" name="inlet2_pemakaian_s2" id="inlet2_pemakaian_s2" class="form-control" value="<?php echo $datawwtp['inlet2_pemakaian_s2'] ?>" readonly></td>
                                                      <td style="text-align: center;" colspan="2"><input type="number" name="total_inlet_2" id="total_inlet_2" class="form-control" value="<?php echo $datawwtp['total_inlet_2'] ?>" readonly></td>

                                                      <td style="text-align: center;" colspan="2"><input type="number" name="outlet_pemakaian_s2" id="outlet_pemakaian_s2" class="form-control" value="<?php echo $datawwtp['outlet_pemakaian_s2'] ?>" readonly></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label for="wcatatan2" class="col-sm-4 col-form-label">Issue Flow Meter WWTP</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="wcatatan2" id="wcatatan2" value="<?php echo $datawwtp['wcatatan2'] ?>" placeholder="masukan jika ada temuan" >
                                              </div>

                                              <label for="wact2" class="col-sm-4 col-form-label">Action</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="wact2" id="wact2" value="<?php echo $datawwtp['wact2'] ?>" placeholder="Aksi yang dilakukan dari temuan tersebut" >
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


                                  <a href="" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-inputphs3<?php echo $dataph['id_ph_tr'] ?>" title="Input Data pH">
                                    <i class="fas fa-temperature-high"></i> SHIFT 3
                                  </a>
                                  <div class="modal fade" id="modal-inputphs3<?php echo $dataph['id_ph_tr'] ?>">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> Input Data | pH No. Reg : <?php echo $dataph['id_ph_tr'] ?> </h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form action="proses_phs3.php" method="post">
                                          <div class="modal-body">

                                            <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Id Header</label>
                                              <div class="col-sm-4">
                                                <input type="text" name="id_header" id="id_header" value="<?php echo $dataph['id_header'] ?>" class="form-control" readonly>
                                                <input type="text" name="id_ph_tr" id="id_ph_tr" value="<?php echo $dataph['id_ph_tr'] ?>" class="form-control" hidden>
                                                <input type="text" name="id_wwtp" id="id_wwtp" value="<?php echo $datawwtp['id_wwtp'] ?>" class="form-control" hidden>
                                                <input type="text" name="id_ph" id="id_ph" value="<?php echo $dataph['id_ph'] ?>" class="form-control" hidden>
                                              </div>

                                              <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                              <div class="col-sm-4">
                                                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $dataph['tanggal'] ?>" readonly>
                                                <input type="text" class="form-control" name="bulan" id="bulan" value="<?php echo $dataph['bulan'] ?>" hidden>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label for="petugas3" class="col-sm-2 col-form-label">Petugas</label>
                                              <div class="col-sm-4">
                                                <input type="text" name="petugas3" id="petugas3" value="<?php echo $dataph['petugas3'] ?>" class="form-control" >
                                              </div>
                                              <label><h3 style="text-align: center; background-color: blue; color: whitesmoke;">SHIFT 3</h3></label>
                                            </div>

                                            <h4 style="text-align: center; color: red;">Gunakan Titik untuk bilangan desimal</h4>
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
                                                      <td><input type="text" name="" value="22:00-00:00" class="form-control" readonly> </td>
                                                      <td><input type="text" name="phin9" id="phin9" class="form-control" value="<?php echo $dataph['phin9'] ?>"   onkeyup="total_ph();" required></td> 
                                                      <td><input type="text" name="phou9" id="phou9" class="form-control" value="<?php echo $dataph['phou9'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempin9" id="tempin9" class="form-control" value="<?php echo $dataph['tempin9'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou9" id="tempou9" class="form-control" value="<?php echo $dataph['tempou9'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                    <tr>
                                                      <td><input type="text" name="" value="00:00-02:00" class="form-control" readonly> </td>
                                                      <td><input type="text" name="phin10" id="phin10" class="form-control" value="<?php echo $dataph['phin10'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="phou10" id="phou10" class="form-control" value="<?php echo $dataph['phou10'] ?>"  onkeyup="total_ph();" required></td>
                                                      
                                                      <td><input type="text" name="tempin10" id="tempin10" class="form-control" value="<?php echo $dataph['tempin10'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou10" id="tempou10" class="form-control" value="<?php echo $dataph['tempou10'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                    <tr>
                                                      <td><input type="text" name="" value="02:00-04:00" class="form-control" readonly> </td>
                                                      <td><input type="text" name="phin11" id="phin11" class="form-control" value="<?php echo $dataph['phin11'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="phou11" id="phou11" class="form-control" value="<?php echo $dataph['phou11'] ?>"  onkeyup="total_ph();" required></td>
                                                      
                                                      <td><input type="text" name="tempin11" id="tempin11" class="form-control" value="<?php echo $dataph['tempin11'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou11" id="tempou11" class="form-control" value="<?php echo $dataph['tempou11'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                    <tr>
                                                      <td><input type="text" name="" value="04:00-06:00" class="form-control" readonly> </td>
                                                      <td><input type="text" name="phin12" id="phin12" class="form-control" value="<?php echo $dataph['phin12'] ?>"  onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="phou12" id="phou12" class="form-control" value="<?php echo $dataph['phou12'] ?>"  onkeyup="total_ph();" required></td>
                                                      
                                                      <td><input type="text" name="tempin12" id="tempin12" class="form-control" value="<?php echo $dataph['tempin12'] ?>" onkeyup="total_ph();" required></td>
                                                      <td><input type="text" name="tempou12" id="tempou12" class="form-control" value="<?php echo $dataph['tempou12'] ?>" onkeyup="total_ph();" required></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label for="catatan3" class="col-sm-4 col-form-label">Issue pH & Temp</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="catatan3" id="catatan3" value="<?php echo $dataph['catatan3'] ?>" placeholder="masukan jika ada temuan" >
                                              </div>

                                              <label for="act3" class="col-sm-4 col-form-label">Action</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="act3" id="act3" value="<?php echo $dataph['act3'] ?>" placeholder="Aksi yang dilakukan dari temuan tersebut" >
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <div class="col-sm-12">
                                                <table class="table table-sm">
                                                  <thead>
                                                    <tr>
                                                      <th style="text-align: center; color: blue;" colspan="6">FLOW METER WWTP</th>
                                                    </tr>
                                                    <tr>
                                                      <th style="text-align: center;" colspan="2">FLOW METER 1 INLET</th>
                                                      <th style="text-align: center;" colspan="2">FLOW METER 2 INLET</th>
                                                      <th style="text-align: center;" colspan="2">FLOW METER OUTLET</th>
                                                    </tr>
                                                    <tr>
                                                      <th>AWAL (M<sup>3</sup>)</th>
                                                      <th>AKHIR (M<sup>3</sup>)</th>
                                                      <th>AWAL (M<sup>3</sup>)</th>
                                                      <th>AKHIR (M<sup>3</sup>)</th>

                                                      <th>AWAL (M<sup>3</sup>)</th>
                                                      <th>AKHIR (M<sup>3</sup>)</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td><input type="text" name="inlet1_awal_s3" id="inlet1_awal_s3" class="form-control" value="<?php echo $datawwtp['inlet1_awal_s3'] ?>"  onkeyup="total_wwtp();" required></td>
                                                      <td><input type="text" name="inlet1_akhir_s3" id="inlet1_akhir_s3" class="form-control" value="<?php echo $datawwtp['inlet1_akhir_s3'] ?>" onkeyup="total_wwtp();" required></td>
                                                      

                                                      <td><input type="text" name="inlet2_awal_s3" id="inlet2_awal_s3" class="form-control" value="<?php echo $datawwtp['inlet2_awal_s3'] ?>"  onkeyup="total_wwtp();" required></td>
                                                      <td><input type="text" name="inlet2_akhir_s3" id="inlet2_akhir_s3" class="form-control" value="<?php echo $datawwtp['inlet2_akhir_s3'] ?>" onkeyup="total_wwtp();" required></td>

                                                      <td><input type="text" name="outlet_awal_s3" id="outlet_awal_s3" class="form-control" value="<?php echo $datawwtp['outlet_awal_s3'] ?>"  onkeyup="total_wwtp();" required></td>
                                                      <td><input type="text" name="outlet_akhir_s3" id="outlet_akhir_s3" class="form-control" value="<?php echo $datawwtp['outlet_akhir_s3'] ?>" onkeyup="total_wwtp();" required></td>

                                                    </tr>
                                                    <tr>
                                                      <td style="text-align: center;">INLET 1 (M<sup>3</sup>)</td>
                                                      <td style="text-align: center;">INLET 2 (M<sup>3</sup>)</td>
                                                      <td style="text-align: center;" colspan="2">JUMLAH INLET (M<sup>3</sup>)</td>
                                                      <td style="text-align: center;" colspan="2">OUTLET (M<sup>3</sup>)</td>
                                                    </tr>
                                                    <tr>
                                                      <td style="text-align: center;"><input type="number" name="inlet1_pemakaian_s3" id="inlet1_pemakaian_s3" class="form-control" value="<?php echo $datawwtp['inlet1_pemakaian_s3'] ?>" readonly></td>
                                                      <td style="text-align: center;"><input type="number" name="inlet2_pemakaian_s3" id="inlet2_pemakaian_s3" class="form-control" value="<?php echo $datawwtp['inlet2_pemakaian_s3'] ?>" readonly></td>
                                                      <td style="text-align: center;" colspan="2"><input type="number" name="total_inlet_3" id="total_inlet_3" class="form-control" value="<?php echo $datawwtp['total_inlet_3'] ?>" readonly></td>

                                                      <td style="text-align: center;" colspan="2"><input type="number" name="outlet_pemakaian_s3" id="outlet_pemakaian_s3" class="form-control" value="<?php echo $datawwtp['outlet_pemakaian_s3'] ?>" readonly></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label for="wcatatan3" class="col-sm-4 col-form-label">Issue Flow Meter WWTP</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="wcatatan3" id="wcatatan3" value="<?php echo $datawwtp['wcatatan3'] ?>" placeholder="masukan jika ada temuan" >
                                              </div>

                                              <label for="wact3" class="col-sm-4 col-form-label">Action</label>
                                              <div class="col-sm-8">
                                                <input type="text" class="form-control" name="wact3" id="wact3" value="<?php echo $datawwtp['wact3'] ?>" placeholder="Aksi yang dilakukan dari temuan tersebut" >
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

                                </div>
                              </div>
                            </div>
                          </div>

                          <?php } } ?>
                        </div>
                      </div>

                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-temperature-high text-primary"></i> <b>pH, Temp & WWTP</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example46">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>DETAIL</th>
                                      <th>TANGGAL</th>
                                      <th style="text-align: center;">BULAN</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_ph_tr ORDER BY id_ph_tr DESC ";
                                      $result = mysqli_query($con, $query);
                                      if (!$result) {
                                        die("Query Error: ".mysqli_errno($con).
                                          "-".mysqli_errno($con));
                                      }
                                      $no = 1;
                                      while ($data = mysqli_fetch_assoc($result))
                                      {
                                    ?>

                                    <?php
                                      include '../_config/config.php';
                                      $query = "SELECT * FROM t_ph WHERE status_ph='CREATE' ORDER BY id_ph_tr";
                                      $result = mysqli_query($con, $query);
                                      if (!$result) {
                                        die("Query Error: ".mysqli_errno($con).
                                          "-".mysqli_errno($con));
                                      }
                                      $no = 1;
                                      while ($reportph = mysqli_fetch_assoc($result))
                                      {
                                    ?>
                                    <?php
                                      include '../_config/config.php';
                                      $query = "SELECT * FROM t_wwtp WHERE status_ph='CREATE' ORDER BY id_wwtp_tr";
                                      $result = mysqli_query($con, $query);
                                      if (!$result) {
                                        die("Query Error: ".mysqli_errno($con).
                                          "-".mysqli_errno($con));
                                      }
                                      $no = 1;
                                      while ($reportwwtp = mysqli_fetch_assoc($result))
                                      {
                                    ?>
                                    <tr>
                                      <td><?php echo $no++;?></td>
                                      <td>
                                        <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-reportwwtp<?php echo $reportph['id_ph_tr'] ?>" title="Report Data, Click to Detail">
                                          <i class="fas fa-check"></i> REPORT
                                        </a>
                                        <div class="modal fade" id="modal-reportwwtp<?php echo $reportph['id_ph_tr'] ?>">
                                          <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title" style="align-content: center;"><i class="fas fa-tachometer-alt text-primary"></i> REPORT DAILY | No. Reg : <?php echo $reportph['id_ph_tr'] ?> </h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">

                                                <div class="form-group row">
                                                  <label class="col-sm-2 col-form-label">Id Header</label>
                                                  <div class="col-sm-4">
                                                    <input type="text" name="id_header" id="id_header" value="<?php echo $reportph['id_header'] ?>" class="form-control" readonly>
                                                    <input type="text" name="id_ph_tr" id="id_ph_tr" value="<?php echo $reportph['id_ph_tr'] ?>" class="form-control" hidden>
                                                    <input type="text" name="id_wwtp" id="id_wwtp" value="<?php echo $reportwwtp['id_wwtp'] ?>" class="form-control" hidden>
                                                    <input type="text" name="id_ph" id="id_ph" value="<?php echo $reportph['id_ph'] ?>" class="form-control" hidden>
                                                  </div>

                                                  <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                                  <div class="col-sm-4">
                                                    <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $reportph['tanggal'] ?>" readonly>
                                                    <input type="text" class="form-control" name="bulan" id="bulan" value="<?php echo $reportph['bulan'] ?>" hidden>
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
                                                          <td><input type="text" name="phin1" id="phin1" class="form-control" value="<?php echo $reportph['phin1'] ?>"   onkeyup="total_ph();" required></td> 
                                                          <td><input type="text" name="phou1" id="phou1" class="form-control" value="<?php echo $reportph['phou1'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempin1" id="tempin1" class="form-control" value="<?php echo $reportph['tempin1'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou1" id="tempou1" class="form-control" value="<?php echo $reportph['tempou1'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>
                                                        <tr>
                                                          <td><input type="text" name="" value="08:00-10:00" class="form-control" readonly> </td>
                                                          <td><input type="text" name="phin2" id="phin2" class="form-control" value="<?php echo $reportph['phin2'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="phou2" id="phou2" class="form-control" value="<?php echo $reportph['phou2'] ?>"  onkeyup="total_ph();" required></td>
                                                          
                                                          <td><input type="text" name="tempin2" id="tempin2" class="form-control" value="<?php echo $reportph['tempin2'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou2" id="tempou2" class="form-control" value="<?php echo $reportph['tempou2'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>
                                                        <tr>
                                                          <td><input type="text" name="" value="10:00-12:00" class="form-control" readonly> </td>
                                                          <td><input type="text" name="phin3" id="phin3" class="form-control" value="<?php echo $reportph['phin3'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="phou3" id="phou3" class="form-control" value="<?php echo $reportph['phou3'] ?>"  onkeyup="total_ph();" required></td>
                                                          
                                                          <td><input type="text" name="tempin3" id="tempin3" class="form-control" value="<?php echo $reportph['tempin3'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou3" id="tempou3" class="form-control" value="<?php echo $reportph['tempou3'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>
                                                        <tr>
                                                          <td><input type="text" name="" value="12:00-14:00" class="form-control" readonly> </td>
                                                          <td><input type="text" name="phin4" id="phin4" class="form-control" value="<?php echo $reportph['phin4'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="phou4" id="phou4" class="form-control" value="<?php echo $reportph['phou4'] ?>"  onkeyup="total_ph();" required></td>
                                                          
                                                          <td><input type="text" name="tempin4" id="tempin4" class="form-control" value="<?php echo $reportph['tempin4'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou4" id="tempou4" class="form-control" value="<?php echo $reportph['tempou4'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>

                                                        <tr>
                                                          <td><input type="text" name="" value="14:00-16:00" class="form-control" readonly> </td>
                                                          <td><input type="text" name="phin5" id="phin5" class="form-control" value="<?php echo $reportph['phin5'] ?>"   onkeyup="total_ph();" required></td> 
                                                          <td><input type="text" name="phou5" id="phou5" class="form-control" value="<?php echo $reportph['phou5'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempin5" id="tempin5" class="form-control" value="<?php echo $reportph['tempin5'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou5" id="tempou5" class="form-control" value="<?php echo $reportph['tempou5'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>
                                                        <tr>
                                                          <td><input type="text" name="" value="16:00-18:00" class="form-control" readonly> </td>
                                                          <td><input type="text" name="phin6" id="phin6" class="form-control" value="<?php echo $reportph['phin6'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="phou6" id="phou6" class="form-control" value="<?php echo $reportph['phou6'] ?>"  onkeyup="total_ph();" required></td>
                                                          
                                                          <td><input type="text" name="tempin6" id="tempin6" class="form-control" value="<?php echo $reportph['tempin6'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou6" id="tempou6" class="form-control" value="<?php echo $reportph['tempou6'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>
                                                        <tr>
                                                          <td><input type="text" name="" value="18:00-20:00" class="form-control" readonly> </td>
                                                          <td><input type="text" name="phin7" id="phin7" class="form-control" value="<?php echo $reportph['phin7'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="phou7" id="phou7" class="form-control" value="<?php echo $reportph['phou7'] ?>"  onkeyup="total_ph();" required></td>
                                                          
                                                          <td><input type="text" name="tempin7" id="tempin7" class="form-control" value="<?php echo $reportph['tempin7'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou7" id="tempou7" class="form-control" value="<?php echo $reportph['tempou7'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>
                                                        <tr>
                                                          <td><input type="text" name="" value="20:00-22:00" class="form-control" readonly> </td>
                                                          <td><input type="text" name="phin8" id="phin8" class="form-control" value="<?php echo $reportph['phin8'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="phou8" id="phou8" class="form-control" value="<?php echo $reportph['phou8'] ?>"  onkeyup="total_ph();" required></td>
                                                          
                                                          <td><input type="text" name="tempin8" id="tempin8" class="form-control" value="<?php echo $reportph['tempin8'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou8" id="tempou8" class="form-control" value="<?php echo $reportph['tempou8'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>

                                                        <tr>
                                                          <td><input type="text" name="" value="22:00-00:00" class="form-control" readonly> </td>
                                                          <td><input type="text" name="phin9" id="phin9" class="form-control" value="<?php echo $reportph['phin9'] ?>"   onkeyup="total_ph();" required></td> 
                                                          <td><input type="text" name="phou9" id="phou9" class="form-control" value="<?php echo $reportph['phou9'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempin9" id="tempin9" class="form-control" value="<?php echo $reportph['tempin9'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou9" id="tempou9" class="form-control" value="<?php echo $reportph['tempou9'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>
                                                        <tr>
                                                          <td><input type="text" name="" value="00:00-02:00" class="form-control" readonly> </td>
                                                          <td><input type="text" name="phin10" id="phin10" class="form-control" value="<?php echo $reportph['phin10'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="phou10" id="phou10" class="form-control" value="<?php echo $reportph['phou10'] ?>"  onkeyup="total_ph();" required></td>
                                                          
                                                          <td><input type="text" name="tempin10" id="tempin10" class="form-control" value="<?php echo $reportph['tempin10'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou10" id="tempou10" class="form-control" value="<?php echo $reportph['tempou10'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>
                                                        <tr>
                                                          <td><input type="text" name="" value="02:00-04:00" class="form-control" readonly> </td>
                                                          <td><input type="text" name="phin11" id="phin11" class="form-control" value="<?php echo $reportph['phin11'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="phou11" id="phou11" class="form-control" value="<?php echo $reportph['phou11'] ?>"  onkeyup="total_ph();" required></td>
                                                          
                                                          <td><input type="text" name="tempin11" id="tempin11" class="form-control" value="<?php echo $reportph['tempin11'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou11" id="tempou11" class="form-control" value="<?php echo $reportph['tempou11'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>
                                                        <tr>
                                                          <td><input type="text" name="" value="04:00-06:00" class="form-control" readonly> </td>
                                                          <td><input type="text" name="phin12" id="phin12" class="form-control" value="<?php echo $reportph['phin12'] ?>"  onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="phou12" id="phou12" class="form-control" value="<?php echo $reportph['phou12'] ?>"  onkeyup="total_ph();" required></td>
                                                          
                                                          <td><input type="text" name="tempin12" id="tempin12" class="form-control" value="<?php echo $reportph['tempin12'] ?>" onkeyup="total_ph();" required></td>
                                                          <td><input type="text" name="tempou12" id="tempou12" class="form-control" value="<?php echo $reportph['tempou12'] ?>" onkeyup="total_ph();" required></td>
                                                        </tr>
                                                        <tr>
                                                          <td>Min Value</td>
                                                          <td><?php echo min($reportph['phin1'], $reportph['phin2'], $reportph['phin3'], $reportph['phin4'], $reportph['phin5'], $reportph['phin6'], $reportph['phin7'], $reportph['phin8'], $reportph['phin9'], $reportph['phin10'], $reportph['phin11'], $reportph['phin12']); ?></td>
                                                          <td><?php echo min($reportph['phou1'], $reportph['phou2'], $reportph['phou3'], $reportph['phou4'], $reportph['phou5'], $reportph['phou6'], $reportph['phou7'], $reportph['phou8'], $reportph['phou9'], $reportph['phou10'], $reportph['phou11'], $reportph['phou12']); ?></td>
                                                          <td><?php echo min($reportph['tempin1'], $reportph['tempin2'], $reportph['tempin3'], $reportph['tempin4'], $reportph['tempin5'], $reportph['tempin6'], $reportph['tempin7'], $reportph['tempin8'], $reportph['tempin9'], $reportph['tempin10'], $reportph['tempin11'], $reportph['tempin12']); ?></td>
                                                          <td><?php echo min($reportph['tempou1'], $reportph['tempou2'], $reportph['tempou3'], $reportph['tempou4'], $reportph['tempou5'], $reportph['tempou6'], $reportph['tempou7'], $reportph['tempou8'], $reportph['tempou9'], $reportph['tempou10'], $reportph['tempou11'], $reportph['tempou12']); ?></td>
                                                        </tr>
                                                        <tr>
                                                          <td>Max Value</td>
                                                          <td><?php echo max($reportph['phin1'], $reportph['phin2'], $reportph['phin3'], $reportph['phin4'], $reportph['phin5'], $reportph['phin6'], $reportph['phin7'], $reportph['phin8'], $reportph['phin9'], $reportph['phin10'], $reportph['phin11'], $reportph['phin12']); ?></td>
                                                          <td><?php echo max($reportph['phou1'], $reportph['phou2'], $reportph['phou3'], $reportph['phou4'], $reportph['phou5'], $reportph['phou6'], $reportph['phou7'], $reportph['phou8'], $reportph['phou9'], $reportph['phou10'], $reportph['phou11'], $reportph['phou12']); ?></td>
                                                          <td><?php echo max($reportph['tempin1'], $reportph['tempin2'], $reportph['tempin3'], $reportph['tempin4'], $reportph['tempin5'], $reportph['tempin6'], $reportph['tempin7'], $reportph['tempin8'], $reportph['tempin9'], $reportph['tempin10'], $reportph['tempin11'], $reportph['tempin12']); ?></td>
                                                          <td><?php echo max($reportph['tempou1'], $reportph['tempou2'], $reportph['tempou3'], $reportph['tempou4'], $reportph['tempou5'], $reportph['tempou6'], $reportph['tempou7'], $reportph['tempou8'], $reportph['tempou9'], $reportph['tempou10'], $reportph['tempou11'], $reportph['tempou12']); ?></td>
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
                                                          <td><input type="text" name="inlet1_awal_s1" id="inlet1_awal_s1" class="form-control" value="<?php echo number_format($reportwwtp['inlet1_awal_s1'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet1_akhir_s1" id="inlet1_akhir_s1" class="form-control" value="<?php echo number_format($reportwwtp['inlet1_akhir_s1'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet1_pemakaian_s1" id="inlet1_pemakaian_s1" class="form-control" value="<?php echo number_format($reportwwtp['inlet1_pemakaian_s1'],0,',','.') ?>"></td>

                                                          <td><input type="text" name="inlet2_awal_s1" id="inlet2_awal_s1" class="form-control" value="<?php echo number_format($reportwwtp['inlet2_awal_s1'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet2_akhir_s1" id="inlet2_akhir_s1" class="form-control" value="<?php echo number_format($reportwwtp['inlet2_akhir_s1'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet2_pemakaian_s1" id="inlet2_pemakaian_s1" class="form-control" value="<?php echo $reportwwtp['inlet2_pemakaian_s1'] ?>"></td>
                                                          <td><input type="text" name="total_inlet_1" id="total_inlet_1" class="form-control" value="<?php echo $reportwwtp['total_inlet_1'] ?>"></td>

                                                          <td><input type="text" name="outlet_awal_s1" id="outlet_awal_s1" class="form-control" value="<?php echo number_format($reportwwtp['outlet_awal_s1'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="outlet_akhir_s1" id="outlet_akhir_s1" class="form-control" value="<?php echo number_format($reportwwtp['outlet_akhir_s1'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="outlet_pemakaian_s1" id="outlet_pemakaian_s1" class="form-control" value="<?php echo $reportwwtp['outlet_pemakaian_s1'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                          <td>SHIFT 2</td>
                                                          <td><input type="text" name="inlet1_awal_s2" id="inlet1_awal_s2" class="form-control" value="<?php echo number_format($reportwwtp['inlet1_awal_s2'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet1_akhir_s2" id="inlet1_akhir_s2" class="form-control" value="<?php echo number_format($reportwwtp['inlet1_akhir_s2'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet1_pemakaian_s2" id="inlet1_pemakaian_s2" class="form-control" value="<?php echo number_format($reportwwtp['inlet1_pemakaian_s2'],0,',','.') ?>"></td>

                                                          <td><input type="text" name="inlet2_awal_s2" id="inlet2_awal_s2" class="form-control" value="<?php echo number_format($reportwwtp['inlet2_awal_s2'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet2_akhir_s2" id="inlet2_akhir_s2" class="form-control" value="<?php echo number_format($reportwwtp['inlet2_akhir_s2'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet2_pemakaian_s2" id="inlet2_pemakaian_s2" class="form-control" value="<?php echo $reportwwtp['inlet2_pemakaian_s2'] ?>"></td>
                                                          <td><input type="text" name="total_inlet_2" id="total_inlet_2" class="form-control" value="<?php echo $reportwwtp['total_inlet_2'] ?>"></td>

                                                          <td><input type="text" name="outlet_awal_s2" id="outlet_awal_s2" class="form-control" value="<?php echo number_format($reportwwtp['outlet_awal_s2'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="outlet_akhir_s2" id="outlet_akhir_s2" class="form-control" value="<?php echo number_format($reportwwtp['outlet_akhir_s2'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="outlet_pemakaian_s2" id="outlet_pemakaian_s2" class="form-control" value="<?php echo $reportwwtp['outlet_pemakaian_s2'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                          <td>SHIFT 3</td>
                                                          <td><input type="text" name="inlet1_awal_s3" id="inlet1_awal_s3" class="form-control" value="<?php echo number_format($reportwwtp['inlet1_awal_s3'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet1_akhir_s3" id="inlet1_akhir_s3" class="form-control" value="<?php echo number_format($reportwwtp['inlet1_akhir_s3'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet1_pemakaian_s3" id="inlet1_pemakaian_s3" class="form-control" value="<?php echo number_format($reportwwtp['inlet1_pemakaian_s3'],0,',','.') ?>"></td>

                                                          <td><input type="text" name="inlet2_awal_s3" id="inlet2_awal_s3" class="form-control" value="<?php echo number_format($reportwwtp['inlet2_awal_s3'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet2_akhir_s3" id="inlet2_akhir_s3" class="form-control" value="<?php echo number_format($reportwwtp['inlet2_akhir_s3'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="inlet2_pemakaian_s3" id="inlet2_pemakaian_s3" class="form-control" value="<?php echo number_format($reportwwtp['inlet2_pemakaian_s3'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="total_inlet_3" id="total_inlet_3" class="form-control" value="<?php echo number_format($reportwwtp['total_inlet_3'],0,',','.') ?>"></td>

                                                          <td><input type="text" name="outlet_awal_s3" id="outlet_awal_s3" class="form-control" value="<?php echo number_format($reportwwtp['outlet_awal_s3'],0,',','.')  ?>"></td>
                                                          <td><input type="text" name="outlet_akhir_s3" id="outlet_akhir_s3" class="form-control" value="<?php echo number_format($reportwwtp['outlet_akhir_s3'],0,',','.') ?>"></td>
                                                          <td><input type="text" name="outlet_pemakaian_s3" id="outlet_pemakaian_s3" class="form-control" value="<?php echo number_format($reportwwtp['outlet_pemakaian_s3'],0,',','.') ?>"></td>
                                                        </tr>
                                                        <tr>
                                                          <td style="text-align: right; background-color: #F0FFFF;" colspan="10">RELEASE SUNGAI :</td>
                                                          <td style="background-color: #F0FFFF"><?php echo $reportwwtp['outlet_pemakaian_s1'] + $reportwwtp['outlet_pemakaian_s2'] + $reportwwtp['outlet_pemakaian_s3'] ?> M<sup>3</sup> </td>
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
                                                          <td><input type="text" name="petugas1" id="petugas1" class="form-control" value="<?php echo $reportph['petugas1'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                          <td>ISSSUE pH, TEMP</td>
                                                          <td>
                                                            <input type="text" class="form-control" name="catatan1" id="catatan1" value="<?php echo $reportph['catatan1'] ?>" placeholder="masukan jika ada temuan" >
                                                          </td>

                                                          <td>ISSSUE FLOW METER</td>
                                                          <td>
                                                            <input type="text" class="form-control" name="wcatatan1" id="wcatatan1" value="<?php echo $reportwwtp['wcatatan1'] ?>" placeholder="masukan jika ada temuan" >
                                                          </td>
                                                        </tr>
                                                        <tr>
                                                          <td>ACTION</td>
                                                          <td><input type="text" name="act1" id="act1" class="form-control" value="<?php echo $reportph['act1'] ?>"></td>
                                                          <td>ACTION</td>
                                                          <td><input type="text" name="wact1" id="wact1" class="form-control" value="<?php echo $reportwwtp['wact1'] ?>"></td>
                                                        </tr>

                                                        <tr>
                                                          <th style="text-align: left; color: blue;" colspan="4">SHIFT 2</th>
                                                        </tr>
                                                        <tr>
                                                          <td>NAME</td>
                                                          <td><input type="text" name="petugas2" id="petugas2" class="form-control" value="<?php echo $reportph['petugas2'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                          <td>ISSSUE pH, TEMP</td>
                                                          <td>
                                                            <input type="text" class="form-control" name="catatan2" id="catatan2" value="<?php echo $reportph['catatan2'] ?>" placeholder="masukan jika ada temuan" >
                                                          </td>

                                                          <td>ISSSUE FLOW METER</td>
                                                          <td>
                                                            <input type="text" class="form-control" name="wcatatan2" id="wcatatan2" value="<?php echo $reportwwtp['wcatatan2'] ?>" placeholder="masukan jika ada temuan" >
                                                          </td>
                                                        </tr>
                                                        <tr>
                                                          <td>ACTION</td>
                                                          <td><input type="text" name="act2" id="act2" class="form-control" value="<?php echo $reportph['act2'] ?>"></td>
                                                          <td>ACTION</td>
                                                          <td><input type="text" name="wact2" id="wact2" class="form-control" value="<?php echo $reportwwtp['wact2'] ?>"></td>
                                                        </tr>

                                                        <tr>
                                                          <th style="text-align: left; color: blue;" colspan="4">SHIFT 3</th>
                                                        </tr>
                                                        <tr>
                                                          <td>NAME</td>
                                                          <td><input type="text" name="petugas3" id="petugas3" class="form-control" value="<?php echo $reportph['petugas3'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                          <td>ISSSUE pH, TEMP</td>
                                                          <td>
                                                            <input type="text" class="form-control" name="catatan3" id="catatan3" value="<?php echo $reportph['catatan3'] ?>" placeholder="masukan jika ada temuan" >
                                                          </td>

                                                          <td>ISSSUE FLOW METER</td>
                                                          <td>
                                                            <input type="text" class="form-control" name="wcatatan3" id="wcatatan3" value="<?php echo $reportwwtp['wcatatan3'] ?>" placeholder="masukan jika ada temuan" >
                                                          </td>
                                                        </tr>
                                                        <tr>
                                                          <td>ACTION</td>
                                                          <td><input type="text" name="act3" id="act3" class="form-control" value="<?php echo $reportph['act3'] ?>"></td>
                                                          <td>ACTION</td>
                                                          <td><input type="text" name="wact3" id="wact3" class="form-control" value="<?php echo $reportwwtp['wact3'] ?>"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td><?php echo $new_date = date('M-Y', strtotime($data['bulan']));?></td>
                                    </tr>
                                    <?php
                                      } } }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>SUMUR BOR</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example47">
                                  <thead>
                                    <tr>
                                      <th rowspan="2">No</th>
                                      <th rowspan="2">TANGGAL</th>
                                      <th style="text-align: center; color: blue;" colspan="3">SUMUR BOR</th>
                                    </tr>
                                    <tr>
                                      <th style="text-align: center;">METER AWAL(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">METER AKHIR(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M<sup>3</sup>)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sumur ORDER BY id_sumur DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['sumur_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['sumur_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['sumur_pemakaian'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>RECYCLE</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example48">
                                  <thead>
                                    <tr>
                                      <th rowspan="2">No</th>
                                      <th rowspan="2">TANGGAL</th>
                                      
                                      <th style="text-align: center; color: blue;" colspan="3">SOFTENER OUT HOD</th>
                                      <th style="text-align: center; color: blue;" colspan="3">SOFTENER OUT UTILITY</th>
                                      <th style="text-align: center; color: blue;" colspan="4">RECYCLE</th>
                                    </tr>
                                    <tr>
                                      <th style="text-align: center;">METER AWAL(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">METER AKHIR(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">METER AWAL(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">METER AKHIR(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">METER AWAL(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">METER AKHIR(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">AIR DIPAKAI(M<sup>3</sup>)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sumur ORDER BY id_sumur DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['hod_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['hod_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['hod_pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['utility_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['utility_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['utility_pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['umum_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['umum_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['umum_pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['air_pakai'],0,',','.');?></td>
                                    </tr>
                                    <?php
                                      }
                                    ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-tint text-primary"></i> <b>TANDON HYDRANT & RWH</b></h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example49">
                                  <thead>
                                    <tr>
                                      <th rowspan="2">No</th>
                                      <th rowspan="2">TANGGAL</th> 
                                      <th style="text-align: center; color: blue;" colspan="3">TANDON HYDRANT</th>
                                      <th style="text-align: center; color: blue;" colspan="3">RWH</th>
                                    </tr>
                                    <tr>
                                      <th style="text-align: center;">METER AWAL(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">METER AKHIR(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">METER AWAL(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">METER AKHIR(M<sup>3</sup>)</th>
                                      <th style="text-align: center;">PEMAKAIAN(M<sup>3</sup>)</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_sumur ORDER BY id_sumur DESC ";
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
                                      <td><?php echo $new_date = date('d-m-Y', strtotime($data['tanggal']));?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['tandon_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['tandon_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['tandon_pemakaian'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['rwh_awal'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['rwh_akhir'],0,',','.');?></td>
                                      <td style="text-align: center;"><?php echo number_format($data['rwh_pemakaian'],0,',','.');?></td>
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
                      Data Meteran Sumur Bor. 46-50
                    </div>
                  </div>
                </div>
                <!-- /.card -->
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
      $("#example7").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example8").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example9").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example10").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example11").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example12").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example13").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example14").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example15").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example16").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example17").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example18").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example19").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example20").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example21").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example22").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example23").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example24").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example25").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example26").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example27").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example28").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example29").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example30").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example31").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example32").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example33").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example34").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example35").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example36").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example37").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example38").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example39").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example40").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example41").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example42").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example43").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example44").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example45").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example46").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example47").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example48").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example49").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example50").DataTable({
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
