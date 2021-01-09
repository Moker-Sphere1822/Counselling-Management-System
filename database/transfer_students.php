<?php
 include "conn.php";

if (isset($_POST['update_button']))
{
              //var_dump($_POST);exit();
              session_start();
			  $userName=$_SESSION['user']['username']; 
			  //$role=$_SESSION['user']['role']; 

			  $key=$_POST['enquiry_id'];
			  $remark1=$_POST['remark1'];
			  $reason=$_POST['transferreason'];
			  $user=$_POST['userName'];


             $qry26="UPDATE `cms_student_distribution` SET `E_ID`=$key,`username`='$user',`R1`='remark1',`Lead_allotment_Date`=sysdate(),`Reason_of_transfer`='$reason',`flag`=1,`Transfer_by`='$userName' WHERE `E_ID`=$key";
             mysqli_query($connect,$qry26);
             header("location:../distribute_inquires.php");

}
   
 ?>