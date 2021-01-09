<?php

include "conn.php";
$data['status']='failed';



if (!empty($_POST))
{  
    session_start();
    $userName=$_SESSION['user']['username']; 
    $role=$_SESSION['user']['role']; 
      $user=$_POST['custID'];
      $eid=$_POST['eid'];
         
    $qry9="UPDATE `cms_lead_distribution` SET `flag`=0 WHERE username='$user'";
    mysqli_query($connect,$qry9);   
 
    foreach($eid as $key) 
    {  
          
       if($role=='admin')
       {  
          $qry7="UPDATE `cms_lead_management` SET `flag`=1 WHERE `E_ID`=$key";
          mysqli_query($connect,$qry7);

            $qry8="INSERT INTO `cms_lead_distribution`(`E_ID`, `username`,`Lead_allotment_Date`,`flag`,`Transfer_by`) VALUES($key,'$user',sysdate(),1,'$userName')";
            mysqli_query($connect,$qry8);
       }
     
       elseif($role=='Subadmin-r')
       {

         $qry10="UPDATE `cms_lead_distribution` SET `E_ID`=$key,`username`='$user',`Lead_allotment_Date`=sysdate(),`flag`=1 WHERE `E_ID`=$key";
          mysqli_query($connect,$qry10);
       }  	
    }
    $data['status']='success';
}
echo json_encode($data);die; 
?>