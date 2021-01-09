<?php
include "conn.php"; 
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
   $query = "DELETE FROM `cms_userinfo` WHERE username='".$id."'";
   mysqli_query($connect, $query);
   $status='ok';
 }
}  
echo $status;die;

?>