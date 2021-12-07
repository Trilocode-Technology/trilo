<?php 
include_once("connection.php");

$prodid;
if(isset($_GET['prodid']))
{
	$prodid=$_GET['prodid'];
	
	$query1=mysqli_query($con,"SELECT * FROM trilo_products WHERE id='$prodid' ") or die(mysqli_error($con));
	
	$row=mysqli_fetch_array($query1,MYSQLI_ASSOC);
	$product_title=$row['product_title'];
	$image_path=$row['image_path'];
	$priority_no=$row['priority_no'];
}
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$prno=$_POST['prno'];

	$imgfile=$_FILES['img']['name'];
	
	if ($imgfile=='') {

		$query=mysqli_query($con,"UPDATE `trilo_products` SET `product_title`='".$title."',`priority_no`='".$prno."' WHERE `trilo_products`.`id`= '".$prodid."' ") or die(mysqli_error($con));
	
			if (!$query)
			{
				echo mysqli_error($con);
				echo '<script>window.location.href="products.php";</script>';
			}
			else
			{
				echo '<script>alert("Record Updated Successfully!");</script>';
				echo '<script>window.location.href="products.php";</script>';
			}
	
	}else{

	if (($_FILES['img']['type'] == 'image/gif') ||($_FILES['img']['type'] == 'image/png') || ($_FILES['img']['type'] == 'image/jpeg') || ($_FILES['img']['type'] ==  'image/jpg') && ($_FILES['img']['size'] < 1500))
	{
		if ($_FILES['img']['error'] > 0)
		{
			//echo "return code:" . $_FILES['img']['error'];
			echo '<script>alert("File size too large!");</script>';
		}
		
		else if(move_uploaded_file($_FILES['img']['tmp_name'],'../Products/images/'.$_FILES['img']['name']))
		{
			$part1 = "images/".$_FILES['img']['name'];
			
			$query=mysqli_query($con,"UPDATE `trilo_products` SET `product_title`='".$title."',`image_path`='".$part1."',`priority_no`='".$prno."' WHERE `trilo_products`.`id`= '".$prodid."' ") or die(mysqli_error($con));
	
			if (!$query)
			{
				echo mysqli_error($con);
				echo '<script>window.location.href="products.php";</script>';
			}
			else
			{
				echo '<script>alert("Record Updated Successfully!");</script>';
				echo '<script>window.location.href="products.php";</script>';
			}
		}
	}
	else
		{
			//echo "return code:" . $_FILES['img']['error'];
			echo '<script>alert("File size too large!");</script>';
		}
	}
	
	
}

include_once("master.php");

?>
<div id="page-wrapper">
    <div id="page-inner">
		<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
				<div class="panel-heading">
                    Edit Product 
                </div>
    <div class="panel-body">
	
	<form action="" method="POST" enctype="multipart/form-data">
			<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Title :</label>
			<div class="col-sm-7">
				<input type="text" name="title" id="title" class="form-control" required value="<?php echo $product_title;?>">
			</div>
			</div>
		</div>
		<br>
		<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Priority No :</label>
			<div class="col-sm-7">
				<input type="text" name="prno" id="prno" class="form-control" required value="<?php echo $priority_no;?>">
			</div>
			</div>
		</div>
		<br>
		<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Current Image  :</label>
			<div class="col-sm-7">
				<img src="../Products/<?php echo $image_path;?>" width="50%">
			</div>
			</div>
		</div>
		<br>
		<div class="row">		
			<div class="form-group">
			<label class="form-label col-sm-3">Select Image :</label>
			<div class="col-sm-7">
				<input type="file" name="img" id="img" class="form-control" >
			</div>
			</div>
		</div>
		<br>
		<div class="row">		
			<div class="form-group">
			<div class="col-sm-3"></div>
			<div class="col-sm-2">
				<input type="submit" name="submit" class="btn btn-success" id="submit" value="Update">
			</div>
			<div class="col-sm-2">
				<input type="reset" name="clear" class="btn btn-danger" id="clear" value="Clear">
			</div>
			</div>
		</div>
	</form>
	</div>
				</div>
			</div>
		</div>
		
		
	

<?php include_once("footer.php");?>