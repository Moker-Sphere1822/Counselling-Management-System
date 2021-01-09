<?php
 include 'conn.php';
 session_start();
 $username=$_SESSION['username'];
 $logged_time="update cms_user_logininfo set logged_date_time=sysdate() where username='$username' and logged_date_time IS NULL"; 
 $logged_qry=mysqli_query($connect,$logged_time);

 session_destroy();
header("location:../index.php");
?> 