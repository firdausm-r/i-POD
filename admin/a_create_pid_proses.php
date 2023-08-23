<?php
    include ('../_config/config.php');
    //pengecekan tipe harus pdf
    $tipe_file = $_FILES['file_pid']['type']; //mendapatkan mime type
    if ($tipe_file == "application/pdf"){ //mengecek apakah file tersebut pdf atau bukan
        $name_pid = trim($_POST['name_pid']);
        $id_machine  = trim($_POST['id_machine']);
        $file_pid = trim($_FILES['file_pid']['name']);
        
        $sql = "INSERT INTO m_pid (name_pid, id_machine) VALUES ('$name_pid', '$id_machine')";
        mysqli_query($con,$sql); //simpan data name_pid dahulu untuk mendapatkan id
         //dapatkan id terakhir
        $query            = mysqli_query($con,"SELECT id_pid FROM m_pid ORDER BY id_pid DESC LIMIT 1");
        $data             = mysqli_fetch_array($query);
         //mengganti nama pdf
        $nama_baru        = "P-".$name_pid.".pdf";
        $file_temp        = $_FILES['file_pid']['tmp_name'];
        $folder           = "file";
        move_uploaded_file($file_temp, "$folder/$nama_baru"); 
         //update nama file di database
        mysqli_query($con,"UPDATE m_pid SET file_pid='$nama_baru' WHERE id_pid='$data[id_pid]'");
        header('location:./a_create_pid.php?pesan=upload-berhasil');
    }else{
        echo'<div class="alert alert-danger">File gagal di upload.</div>';
    }
?>