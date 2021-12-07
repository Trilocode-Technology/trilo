
<?php 
include_once('connection.php'); 

$ugid;

if(isset($_GET['ugid']))
{
	$ugid=$_GET['ugid'];

	
	
	$sql=mysqli_query($con,"DELETE FROM trilo_blog_posts WHERE id='$ugid' ") or die(mysqli_error($con));
	
	if($sql)
	{
		header('Location: blogs.php');
		//header('Location: slider.php?msg=true');
	}
	else
	{
		header('Location: blogs.php');
		//header('Location: slider.php?msg=false');
	}
		
}
?>