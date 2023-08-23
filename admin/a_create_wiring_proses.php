<?php
    include ('../_config/config.php');
    //pengecekan tipe harus pdf
    $tipe_file = $_FILES['file_wiring']['type']; //mendapatkan mime type
    if ($tipe_file == "application/pdf"){ //mengecek apakah file tersebut pdf atau bukan
        $name_wiring = trim($_POST['name_wiring']);
        $id_machine  = trim($_POST['id_machine']);
        $file_wiring = trim($_FILES['file_wiring']['name']);
        
        $sql = "INSERT INTO m_wiring (name_wiring, id_machine) VALUES ('$name_wiring', '$id_machine')";
        mysqli_query($con,$sql); //simpan data name_wiring dahulu untuk mendapatkan id
         //dapatkan id terakhir
        $query            = mysqli_query($con,"SELECT id_wiring FROM m_wiring ORDER BY id_wiring DESC LIMIT 1");
        $data             = mysqli_fetch_array($query);
         //mengganti nama pdf
        $nama_baru        = "W-".$name_wiring.".pdf";
        $file_temp        = $_FILES['file_wiring']['tmp_name'];
        $folder           = "file";
        move_uploaded_file($file_temp, "$folder/$nama_baru"); 
         //update nama file di database
        mysqli_query($con,"UPDATE m_wiring SET file_wiring='$nama_baru' WHERE id_wiring='$data[id_wiring]'");
        header('location:./a_create_wiring.php?pesan=upload-berhasil');
    }else{
        echo'<div class="alert alert-danger">File gagal di upload.</div>';
    }
?>