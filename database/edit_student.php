<?php
include "config.php";
//var_dump($_POST);exit();
if(isset($_POST['update_button']))
{

   session_start();
   $username=$_SESSION['user']['username']; 
   $role=$_SESSION['user']['role']; 
   //var_dump($_POST);exit();
   $remark1=$_POST['remark1'];
   $WhatsApp=$_POST['WhatsApp'];
   $en_id=$_POST['e_id'];
   $remark2=$_POST['remark2'];
   $remark3=$_POST['remark3'];
   $remark4=$_POST['remark4'];
   $percen1=$_POST['percen1'];
   $percen2=$_POST['percen2'];
   $board1=$_POST['board1'];
   if(isset($_POST['Course']) || isset($_POST['Branch']))
   {
         $Course=$_POST['Course'];
         $Branch=$_POST['Branch'];
         $qry36="update tbl_lead_management set Course='$Course',Branch='$Branch' where E_ID=$en_id";
         $upd=mysqli_query($connect,$qry36); 

   }      
   $final_status=$_POST['final_status'];
   $status1=$_POST['status1'];
   $date = $_POST['visitdate'];
     

    if($role=='admin')
     {
         $qry20="update tbl_lead_distribution set R1='$remark1',R2='$remark2',R3='$remark3',R4='$remark4',10th='$percen1',12th='$percen2',board='$board1',visit='$status1',Tentative_visit_date='".$date."',status='$final_status',whatsapp_no='$WhatsApp' where E_ID=$en_id";

     }
     else
     { 
      echo $qry20="update tbl_lead_distribution set R1='$remark1',R2='$remark2',R3='$remark3',R4='$remark4',10th='$percen1',12th='$percen2',board='$board1',visit='$status1',Tentative_visit_date='".$date."',status='$final_status',whatsapp_no='$WhatsApp' where U_ID='$username' and E_ID=$en_id";
     }  
      $update_query=mysqli_query($connect,$qry20); 
    
     header("location:../edit_inquires.php?id=$en_id");
             
 }    
?>