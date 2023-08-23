<?php  
//koneksi database
 $connect = mysqli_connect("localhost", "root", "", "ipod");
//menghitung jumlah input 
 $number = count($_POST["share_id"]);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["share_id"][$i] != ''))  
           {  
                $sql = "INSERT INTO m_operator(share_id,id_machine) VALUES('".mysqli_real_escape_string($connect, $_POST["share_id"][$i])."','".$_POST['id_machine'][$i]."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      //jika berhasil input
      echo "Data Inserted";  
 }  
 else 
 {  
      //jika tidak berhasil
      echo "Please Enter share id";  
 }  
 ?>