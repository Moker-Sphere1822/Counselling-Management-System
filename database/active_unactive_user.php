<?php
include "conn.php";
$status1='err';
if (isset($_POST['status']) && !empty($_POST['active1']))
{
	
	$id=$_POST['active1'];
	$status=0;
	if ($_POST['status']!=1) {
		$status=1;
	}
	$query="UPDATE cms_userinfo Set Status=$status Where username='$id'";
	mysqli_query($connect,$query);

	$status1='ok';
}
echo $status1;die;
?>