<?php
include "config.php"; 
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
   $query = "DELETE FROM `tbl_userinfo` WHERE U_ID='".$id."'";
   mysqli_query($connect, $query);
   $status='ok';
 }
}  
echo $status;die;

?>