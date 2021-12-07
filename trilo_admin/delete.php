<?php 
include_once('connection.php'); 

$ugid;

if(isset($_GET['ugid']))
{
	$ugid=$_GET['ugid'];
	
	$sql=mysqli_query($con,"DELETE FROM projects WHERE id='$ugid' ") or die(mysqli_error($con));
	
	if($sql)
	{
		header('Location: projects.php');
		//header('Location: slider.php?msg=true');
	}
	else
	{
		header('Location: projects.php');
		//header('Location: slider.php?msg=false');
	}
		
}else if(isset($_GET['prodid']))
{
	$prodid=$_GET['prodid'];
	
	$sql=mysqli_query($con,"DELETE FROM trilo_products WHERE id='$prodid' ") or die(mysqli_error($con));
	
	if($sql)
	{
		header('Location: products.php');
		//header('Location: slider.php?msg=true');
	}
	else
	{
		header('Location: products.php');
		//header('Location: slider.php?msg=false');
	}
		
} else if(isset($_GET['prodslideid']))
{
	$prodslideid=$_GET['prodslideid'];
	
	$sql=mysqli_query($con,"DELETE FROM trilo_product_slides WHERE id='$prodslideid' ") or die(mysqli_error($con));
	
	if($sql)
	{
		header('Location: products_slides.php');
		//header('Location: slider.php?msg=true');
	}
	else
	{
		header('Location: products_slides.php');
		//header('Location: slider.php?msg=false');
	}
		
}
?>