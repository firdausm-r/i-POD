<?php  
     include '../_config/config.php'; 
     $id_list = trim($_POST['id_list']);
     $id_competency      = trim($_POST['id_competency']);
     $list_competency    = trim($_POST['list_competency']);
     $type_competency    = trim($_POST['type_competency']);
     $category_competency     = trim($_POST['category_competency']);
     $status_list        = trim($_POST['status_list']);
     $number = count($_POST["list_competency"]);
     if($number > 0)  
          {  
               for($i=0; $i<$number; $i++)  
                    {  
                         if(trim($_POST["list_competency"][$i] != ''))  
                         {  
                              $sql = "INSERT INTO l_competency(id_list, id_competency, list_competency, type_competency, category_competency, status_list) VALUES('".mysqli_real_escape_string($con,  $_POST["id_list"][$i])."','".$_POST['id_competency'][$i]."','".$_POST['list_competency'][$i]."','".$_POST['type_competency'][$i]."','".$_POST['category_competency'][$i]."','".$_POST['status_list'][$i]."')";  
                              mysqli_query($con, $sql);  
                         }  
                    }  
           //jika berhasil input
               echo "Data Inserted Success!";  
     }  
          else 
          {  
           //jika tidak berhasil
           echo "Please Enter List ";  
     }  
 ?>