<?php
 include 'config.php';
 session_start();
 $username=$_SESSION['username'];
 $logged_time="update tbl_user_logininfo set logged_date_time=sysdate() where U_ID='$username' and logged_date_time IS NULL"; 
 $logged_qry=mysqli_query($connect,$logged_time);

 session_destroy();
header("location:../index.php");
?>