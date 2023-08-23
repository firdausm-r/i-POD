<?php

include "../_config/config.php";




// Cek apakah user ingin mengubah fotonya atau tidak

if(isset($_POST['ubah_file'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
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
        $nama_baru        = "W-".$data['name_wiring'].".pdf";
        $file_temp        = $_FILES['file_wiring']['tmp_name'];
        $folder           = "file";
        move_uploaded_file($file_temp, "$folder/$nama_baru"); 
         //update nama file di database
        mysqli_query($con,"UPDATE m_wiring SET file_wiring='$nama_baru' WHERE id_wiring='$data[id_wiring]'");
        header('location:./a_create_wiring.php?pesan=upload-berhasil');

        

    // Ambil data foto yang dipilih dari form
    $id_wiring  = trim($_POST['id_wiring']);
    $name_wiring = trim($_POST['name_wiring']);
    $id_machine  = trim($_POST['id_machine']);
    $sumber = $_FILES['file_wiring']['name'];

    $nama_gambar = $_FILES['file_wiring']['tmp_name'];

    

    // Rename nama fotonya dengan menambahkan tanggal dan jam upload

    $fotobaru = date('dmYHis').$sumber;

    

    // Set path folder tempat menyimpan fotonya

    $path = "file/".$fotobaru;



    if(move_uploaded_file($nama_gambar, $path)){ // Cek apakah gambar berhasil diupload atau tidak

        // Query untuk menampilkan data user berdasarkan id_user yang dikirim
        $query            = mysqli_query($con,"SELECT * FROM m_wiring WHERE id_wiring='".$id_wiring."' ");
        $data             = mysqli_fetch_array($query);



        // Cek apakah file gambar sebelumnya ada di folder foto

        if(is_file("file/".$data['file_wiring'])) // Jika gambar ada

            unlink("file/".$data['file_wiring']); // Hapus file gambar sebelumnya yang ada di folder images

        

        // Proses ubah data ke Database

        $query = "UPDATE m_wiring SET name_wiring='$name_wiring', id_machine='$id_machine', file_wiring='$fotobaru' where id_wiring='$id_wiring' ";

        $sql = mysqli_query($con, $query); // Eksekusi/ Jalankan query dari variabel $query



        if($sql){ // Cek jika proses simpan ke database sukses atau tidak

            // Jika Sukses, Lakukan :

            header("location: a_create_wiring.php"); // Redirect ke halaman index.php

        }else{

            // Jika Gagal, Lakukan :

            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

            echo "<br><a href='a_create_wiring.php'>Kembali Ke Form</a>";

        }

    }else{

        // Jika gambar gagal diupload, Lakukan :

        echo   "<script> alert('Maaf, File gagal untuk diupload'); 

                location = 'a_create_wiring.php'; 

                </script>";

    }

}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :

    // Proses ubah data ke Database

    $query = "UPDATE m_wiring SET name_wiring='$name_wiring', id_machine='$id_machine' WHERE id_wiring='$id_wiring' ";

    $sql = mysqli_query($con, $query); // Eksekusi/ Jalankan query dari variabel $query



    if($sql){ // Cek jika proses simpan ke database sukses atau tidak

        // Jika Sukses, Lakukan :

        header("location: a_create_wiring.php"); // Redirect ke halaman index.php

    }else{

        // Jika Gagal, Lakukan :

        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";

        echo "<br><a href='a_create_wiring.php'>Kembali Ke Form</a>";

    }

}



?>