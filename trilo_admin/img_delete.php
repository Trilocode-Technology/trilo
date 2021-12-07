<?php 
include_once('connection.php'); 

$ugid;

if(isset($_GET['ugid']))
{
	$ugid=$_GET['ugid'];
	
	$sql=mysqli_query($con,"DELETE FROM rewards WHERE id='$ugid' ") or die(mysqli_error($con));
	
	if($sql)
	{
		header('Location: gallery.php');
		//header('Location: slider.php?msg=true');
	}
	else
	{
		header('Location: gallery.php');
		//header('Location: slider.php?msg=false');
	}
		
}
?>