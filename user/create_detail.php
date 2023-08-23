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
      <?php
        $tampilPeg    =mysqli_query($con, "SELECT * FROM user WHERE username='$_SESSION[username]'");
        $peg    =mysqli_fetch_array($tampilPeg);
      ?>

      <!-- Main content -->
      <section class="content">
        <h5 class="mb-2">Anda Login sebagai : <b style="color: blue;"><i class="fas fa-user"></i> <?php echo $peg['nama'] ?></b> | <?php echo $peg['jabatan'] ?>  </h5>
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-12 col-sm-12">
              <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                  <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                    <li class="pt-2 px-3"><h3 class="card-title">Entry Data</h3></li>
                    
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-two-bor-tab" data-toggle="pill" href="#custom-tabs-two-bor" role="tab" aria-controls="custom-tabs-two-bor" aria-selected="false"><i class="fas fa-long-arrow-alt-down"></i> WWTP</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">


                    </div>


                    <div class="tab-pane fade" id="custom-tabs-two-bor" role="tabpanel" aria-labelledby="custom-tabs-two-bor-tab">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-body">
                                <!--
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
                                  $char = 'PTW-'. $today;
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
                                              <input type="text" name="id_header" id="id_header" value="<?php echo $data2['id_header'] ?>" class="form-control" hidden>
                                              <input type="text" name="id_ph_tr" id="id_ph_tr" class="form-control" value="<?php echo $newId ?>" readonly>
                                              <input type="text" name="id_wwtp_tr" id="id_wwtp_tr"  value="<?php echo $newId ?>" hidden>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="tanggal" class="col-sm-4 col-form-label">Date</label>
                                            <div class="col-sm-8">
                                              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d') ?>">
                                              <input type="month" class="form-control" name="bulan" id="bulan" required>
                                              <input type="text" name="status_ph" id="status_ph" value="CREATE" hidden>
                                              <input type="text" name="max_release" id="max_release" value="500" hidden>
                                            </div>
                                          </div>

                                          <p>* Create Header dilakukan untuk transaksi awal, selanjutnya lakukan pengisian data Card : "Input pH, Temp & WWTP".</p>

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>


                                
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
                                              <input type="text" name="nama" id="nama" value="<?php echo $peg['username'] ?>" class="form-control" readonly>
                                              <input type="text" name="id_ph_tr" id="id_ph_tr" class="form-control" value="<?php echo $newId ?>" readonly>
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
                                                    <td><input type="number" name="sumur_awal" id="sumur_awal" class="form-control" value="<?php echo $sumur['sumur_akhir'] ?>" onkeyup="total_sumur();" required></td>
                                                    <td><input type="number" name="sumur_akhir" id="sumur_akhir" class="form-control" onkeyup="total_sumur();" required></td>
                                                    <td><input type="number" name="umum_awal" id="umum_awal" class="form-control"  value="<?php echo $sumur['umum_akhir'] ?>" onkeyup="total_sumur();" required></td>
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
                                                    <td><input type="number" name="hod_awal" id="hod_awal" class="form-control" value="<?php echo $sumur['hod_akhir'] ?>" onkeyup="total_sumur();" required></td>
                                                    <td><input type="number" name="hod_akhir" id="hod_akhir" class="form-control" onkeyup="total_sumur();" required></td>

                                                    <td><input type="number" name="utility_awal" id="utility_awal" class="form-control"  value="<?php echo $sumur['utility_akhir'] ?>" onkeyup="total_sumur();" required></td>
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
                                                    <td><input type="number" name="tandon_awal" id="tandon_awal" class="form-control" value="<?php echo $sumur['tandon_akhir'] ?>" onkeyup="total_sumur();" required></td>
                                                    <td><input type="number" name="tandon_akhir" id="tandon_akhir" class="form-control" onkeyup="total_sumur();" required></td>

                                                    <td><input type="number" name="rwh_awal" id="rwh_awal" class="form-control" value="<?php echo $sumur['rwh_akhir'] ?>" onkeyup="total_sumur();" required></td>
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
                                </div> -->

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

                      <!--
                      <div class="container-fluid">
                        <div class="row">
                          <?php
                            include '../_config/config.php';

                            $query = "SELECT * FROM t_ph WHERE status_ph='CREATE' ORDER BY id_ph DESC LIMIT 1";
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
                            $query = "SELECT * FROM t_wwtp WHERE status_ph='CREATE' ORDER BY id_wwtp_tr DESC LIMIT 1";
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
                                  <h6 style="text-align: center; color: blue;"><?php echo $new_date = date('d-m-Y', strtotime($dataph['tanggal']));?></h6>


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
                                                <input type="text" name="petugas1" id="petugas1" value="<?php echo $peg['username'] ?>" class="form-control" readonly>
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
                                                <input type="text" name="petugas2" id="petugas2" value="<?php echo $peg['username'] ?>" class="form-control" readonly>
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
                                                      <td><input type="text" name="inlet1_awal_s2" id="inlet1_awal_s2" class="form-control" value="<?php echo $datawwtp['inlet1_akhir_s1'] ?>"  onkeyup="total_wwtp();" readonly></td>
                                                      <td><input type="text" name="inlet1_akhir_s2" id="inlet1_akhir_s2" class="form-control" value="<?php echo $datawwtp['inlet1_akhir_s2'] ?>" onkeyup="total_wwtp();" required></td>
                                                      

                                                      <td><input type="text" name="inlet2_awal_s2" id="inlet2_awal_s2" class="form-control" value="<?php echo $datawwtp['inlet2_akhir_s1'] ?>"  onkeyup="total_wwtp();" readonly></td>
                                                      <td><input type="text" name="inlet2_akhir_s2" id="inlet2_akhir_s2" class="form-control" value="<?php echo $datawwtp['inlet2_akhir_s2'] ?>" onkeyup="total_wwtp();" required></td>

                                                      <td><input type="text" name="outlet_awal_s2" id="outlet_awal_s2" class="form-control" value="<?php echo $datawwtp['outlet_akhir_s1'] ?>"  onkeyup="total_wwtp();" readonly></td>
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
                                                <input type="text" name="petugas3" id="petugas3" value="<?php echo $peg['username'] ?>" class="form-control" readonly>
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
                                                      <td><input type="text" name="inlet1_awal_s3" id="inlet1_awal_s3" class="form-control" value="<?php echo $datawwtp['inlet1_akhir_s2'] ?>"  onkeyup="total_wwtp();" readonly></td>
                                                      <td><input type="text" name="inlet1_akhir_s3" id="inlet1_akhir_s3" class="form-control" value="<?php echo $datawwtp['inlet1_akhir_s3'] ?>" onkeyup="total_wwtp();" required></td>
                                                      

                                                      <td><input type="text" name="inlet2_awal_s3" id="inlet2_awal_s3" class="form-control" value="<?php echo $datawwtp['inlet2_akhir_s2'] ?>"  onkeyup="total_wwtp();" readonly></td>
                                                      <td><input type="text" name="inlet2_akhir_s3" id="inlet2_akhir_s3" class="form-control" value="<?php echo $datawwtp['inlet2_akhir_s3'] ?>" onkeyup="total_wwtp();" required></td>

                                                      <td><input type="text" name="outlet_awal_s3" id="outlet_awal_s3" class="form-control" value="<?php echo $datawwtp['outlet_akhir_s2'] ?>"  onkeyup="total_wwtp();" readonly></td>
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
                      </div> -->

                      <div class="container-fluid">
                        <div class="row">
                          <!--
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
                                        <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-reportwwtp<?php echo $reportph['id_ph'] ?>" title="Report Data, Click to Detail">
                                          <i class="fas fa-check"></i> REPORT
                                        </a>
                                        <div class="modal fade" id="modal-reportwwtp<?php echo $reportph['id_ph'] ?>">
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
                          </div> -->

                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-temperature-high text-primary"></i> <b>pH, Temp & WWTP</b> TEST</h3>
                              </div>
                              <div class="card-body">
                                <table class="table table-striped" id="example51">
                                  <thead>
                                    <tr>
                                      <th><i class="fas fa-cog"></i> Sett</th>
                                      <th>ID</th>
                                      <th>Tanggal</th>
                                      <th>Bulan</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      include ('../_config/config.php');
                                      $query = "SELECT * FROM t_ph ORDER BY id_ph_tr DESC ";
                                      $cek = mysqli_query($con, $query);
                                      while ($data=mysqli_fetch_array($cek)) {
                                    ?> 
                                    <tr>
                                      <td>
                                        <a href="./cek.php?id_ph_tr=<?php echo $data['id_ph_tr'];?>" class="btn btn-primary btn-md" title="Detail Data"><i class="fas fa-check"></i> Report</a>
                                      </td>
                                      <td>
                                        <?php echo $data['id_ph_tr'] ?>
                                      </td>
                                      <td><?php echo $data['tanggal'] ?></td>
                                      <td><?php echo $data['bulan'] ?></td>
                                    </tr>
                                    <?php } ?>
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
                                      <td style="text-align: center;"><?php echo number_format($data['utility_pemakaian'] + $data['umum_pemakaian'],0,',','.');?></td>
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
      $("#example51").DataTable({
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
