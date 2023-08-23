<?php
    include ('../_config/config.php');
    //pengecekan tipe harus pdf
    $tipe_file = $_FILES['file_sop']['type']; //mendapatkan mime type
    if ($tipe_file == "application/pdf"){ //mengecek apakah file tersebut pdf atau bukan
        $name_sop       = trim($_POST['name_sop']);
        $ver_sop        = trim($_POST['ver_sop']);
        $category_sop   = trim($_POST['category_sop']);
        $id_machine     = trim($_POST['id_machine']);
        $status_sop     = trim($_POST['status_sop']);
        $file_sop       = trim($_FILES['file_sop']['name']);
        
        $sql = "INSERT INTO m_sop (name_sop, ver_sop, category_sop, id_machine, status_sop) VALUES ('$name_sop', '$ver_sop', '$category_sop', '$id_machine', '$status_sop')";
        mysqli_query($con,$sql); //simpan data name_sop dahulu untuk mendapatkan id
         //dapatkan id terakhir
        $query            = mysqli_query($con,"SELECT id_sop FROM m_sop ORDER BY id_sop DESC LIMIT 1");
        $data             = mysqli_fetch_array($query);
         //mengganti nama pdf
        $nama_baru        = "S-".$name_sop.".pdf";
        $file_temp        = $_FILES['file_sop']['tmp_name'];
        $folder           = "file";
        move_uploaded_file($file_temp, "$folder/$nama_baru"); 
         //update nama file di database
        mysqli_query($con,"UPDATE m_sop SET file_sop='$nama_baru' WHERE id_sop='$data[id_sop]'");
        header('location:./a_create_sop.php?pesan=upload-berhasil');
    }else{
        echo'<div class="alert alert-danger">File gagal di upload.</div>';
    }
?>