<?php 
    // untuk mengaktifkan session pada php agar keamanan login lebih tinggi
    session_start();
    
    // menghubungkan file php dengan koneksi ke database mysqli
    include './_config/config.php';
    
    // menerima data yang disubmit dari form login multi user
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $login = mysqli_query($con,"select * from user where username='$username' and password='$password'");
    
    // hitung jumlah data yang ditemukan dari form login
    $cek = mysqli_num_rows($login);
    
    // mengcek apakah username dan password ditemukan pada database yang ada
    if($cek > 0){
     $data = mysqli_fetch_assoc($login);
     
     // 1. fungsi login sebagai super admin
     if($data['level']=="admin"){
      
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "admin";
      
      // pindahkan ke halaman dashboard super admin
      header("location:./admin/index.php");

      // 2. fungsi login sebagai plant manager
     }else if($data['level']=="plant_manager"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "plant_manager";
     
      // pindahkan ke halaman dashboard plant manager
      header("location:plant_manager/index.php");

      // 3. fungsi login sebagai plant control
     }else if($data['level']=="plant_control"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "plant_control";
     
      // pindahkan ke halaman dashboard plant control
      header("location:plant_control/index.php");
     
     // 4. fungsi login sebagai manager hr
     }else if($data['level']=="manager_hr"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "manager_hr";
     
      // pindahkan ke halaman dashboard manager hr
      header("location:manager_hr/index.php");

      // 5. fungsi login sebagai manager logistic
     }else if($data['level']=="manager_logistic"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "manager_logistic";
     
      // pindahkan ke halaman dashboard manager logistic
      header("location:manager_logistic/index.php");

      // 6. fungsi login sebagai manager lab
     }else if($data['level']=="manager_lab"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "manager_lab";
     
      // pindahkan ke halaman dashboard manager lab
      header("location:manager_lab/index.php");

      // 7. fungsi login sebagai manager teknik
     }else if($data['level']=="manager_teknik"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "manager_teknik";
     
      // pindahkan ke halaman dashboard manager teknik
      header("location:manager_teknik/index.php");

      // 8. fungsi login sebagai manager she
     }else if($data['level']=="manager_she"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "manager_she";
     
      // pindahkan ke halaman dashboard manager she
      header("location:manager_she/index.php");

      // 9. fungsi login sebagai manager csr
     }else if($data['level']=="manager_csr"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "manager_csr";
     
      // pindahkan ke halaman dashboard manager csr
      header("location:manager_csr/index.php");

      // 10. fungsi login sebagai manager production 1
     }else if($data['level']=="manager_production1"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "manager_production1";
     
      // pindahkan ke halaman dashboard manager production 1
      header("location:manager_production1/index.php");

      // 11. fungsi login sebagai manager production 3
     }else if($data['level']=="manager_production3"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "manager_production3";
     
      // pindahkan ke halaman dashboard manager production 3
      header("location:manager_production3/index.php");

      // 12. fungsi login sebagai manager production 4
     }else if($data['level']=="manager_production4"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "manager_production4";
     
      // pindahkan ke halaman dashboard manager production 4
      header("location:manager_production4/index.php");

      // 13. fungsi login sebagai manager performance
     }else if($data['level']=="manager_performance"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "manager_performance";
     
      // pindahkan ke halaman dashboard manager performance
      header("location:manager_performance/index.php");

      // 14. fungsi login sebagai user finance
     }else if($data['level']=="user1"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "user1";
     
      // pindahkan ke halaman dashboard user finance
      header("location:user1/index.php");

      // 15. fungsi login sebagai user hr
     }else if($data['level']=="user2"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "user2";
     
      // pindahkan ke halaman dashboard user hr
      header("location:user2/index.php");

      // 16. fungsi login sebagai user logistic
     }else if($data['level']=="user3"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "user3";
     
      // pindahkan ke halaman dashboard user logistic
      header("location:user3/index.php");

      // 17. fungsi login sebagai user lab
     }else if($data['level']=="stek"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "stek";
     
      // pindahkan ke halaman dashboard user lab
      header("location:stek/index.php");

      // 18. fungsi login sebagai user teknik
     }else if($data['level']=="admin2"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "admin2";
     
      // pindahkan ke halaman dashboard user teknik
      header("location:admin2/index.php");


      // 19. fungsi login sebagai user WT
     }else if($data['level']=="user4"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "user4";
     
      // pindahkan ke halaman dashboard user WT
      header("location:user4/index.php");





      // 20. fungsi login sebagai user wt central
     }else if($data['level']=="wtcen"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "wtcen";
     
      // pindahkan ke halaman dashboard user wt central
      header("location:wtcen/index.php");

       // 20a. fungsi login sebagai pro pet1
     }else if($data['level']=="propet1"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "propet1";
     
      // pindahkan ke halaman dashboard user wt central
      header("location:propet1/index.php");

      // 21. fungsi login sebagai user visit
     }else if($data['level']=="visit"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "visit";
     
      // pindahkan ke halaman dashboard user Visitor
      header("location:visit/index.php");

      // 22. fungsi login sebagai user production 3
     }else if($data['level']=="user_production3"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "user_production3";
     
      // pindahkan ke halaman dashboard user production 3
      header("location:user_production3/index.php");

      // 23. fungsi login sebagai user production 4
     }else if($data['level']=="user_production4"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "user_production4";
     
      // pindahkan ke halaman dashboard user production 4
      header("location:user_production4/index.php");

      // 24. fungsi login sebagai user performance
     }else if($data['level']=="user_performance"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "user_performance";
     
      // pindahkan ke halaman dashboard user performance
      header("location:user_performance/index.php");

      // 25. fungsi login sebagai kasir
     }else if($data['level']=="kasir"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "kasir";
     
      // pindahkan ke halaman dashboard kasir
      header("location:kasir/index.php");

     // 26. fungsi login sebagai purchasing
     }else if($data['level']=="purchasing"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "purchasing";
     
      // pindahkan ke halaman dashboard purchasing
      header("location:purchasing/index.php");

      // 27. fungsi login sebagai user production 2
     }else if($data['level']=="user_production2"){
     
      // buat session login dan username agar keamanan lebih tinggi
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "user_production2";
     
      // pindahkan ke halaman dashboard user production 2
      header("location:user_production2/index.php");
     }else{
     
      // pindahkan ke halaman login kembali
      header("location:index.php?pesan=gagal");
     }
    }else{
     header("location:index.php?pesan=gagal");
    }
?>