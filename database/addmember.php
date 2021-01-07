<?php
include "config.php";

if(isset($_POST['addnewuser']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)  && !empty($_POST['dept']) && !empty($_POST['role']) && !empty($_POST['status']) && !empty($_POST['pswd']) && !empty($_POST['campus']))
{
    
   
       $name   = $_POST['name'];
       $email  = $_POST['email'];
       $dept   = $_POST['dept'];
       $role  = $_POST['role'];
       $status1   = $_POST['status'];
       if($status1==1) 
       {
            $status1=1;
       }
       else
       {
            $status1=0;
       }
       $pswd  = $_POST['pswd'];
       $campus   = $_POST['campus'];
       $teaminfo  = $_POST['teaminfo'];
    
       $check="select *from tbl_userinfo where U_ID='$email'";
       $qry1=mysqli_query($connect,$check);

       if(mysqli_num_rows($qry1)==true) 
       {
            $status = 'err';
       }
       else
       {
            $data="insert into tbl_userinfo(U_ID,Name,Department,Role,Status,Password,Campus,Team_info) values('$email','$name','$dept','$role',$status1,'$pswd','$campus','$teaminfo')";
            $qry2=mysqli_query($connect,$data);
            $status = 'ok';           
       }
}
echo $status;die;
?>
