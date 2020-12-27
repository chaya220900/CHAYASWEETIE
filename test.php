<?php
session_start();
   $str_hostname = "localhost"; /*config*/
   $str_username = "root";
   $str_password = "";
   $str_dbname = "course_adminlte3_data"; /*dataname*/
 
   $obj_con = mysqli_connect($str_hostname,$str_username,$str_password,$str_dbname);
 
   if(!$obj_con) {
       header("location:error.php");
       exit;
   }
  
   mysqli_query($obj_con,"SET NAMES UTF8");
 
 
   $str_sql = "SELECT * FROM `mem_tb` INNER JOIN statusmem_tb on mem_tb.mem_f_statusmem = statusmem_tb.statusmem_id " ;
   $obj_rs = mysqli_query($obj_con,$str_sql);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<select> 
                    <?php while ($obj_row = mysqli_fetch_array($obj_rs)) { ?>  
                      <option><?= $obj_row['statusmem_name'] ?></option>
                    <?php } ?>  
                    </select> 
</body>
</html>