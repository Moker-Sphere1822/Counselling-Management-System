 <!-- <?php
// $connect = mysqli_connect('localhost', 'root', '');
// $cd = mysqli_select_db($connect,'cms');

// if($connect==true)
// {
	
// }
// else
// {
// $connect = mysqli_connect('118.185.43.122', '0187cs161025', 'sistec');
// $cd = mysqli_select_db($connect,'0187cs161025');

// 		if($connect == false)
// 		{
// 			echo "Not connected";
//         }
//         else{
//             echo "connected";
//         }
// }
?>  -->
<?php

session_start();
$server="localhost";
$username="root";
$password="";
$database="cms";

$connect = mysqli_connect($server,$username,$password,$database);

     if($connect){
     //  echo"Connection sucessful"; 
    }  else{
        echo"No connection";
    }

?>