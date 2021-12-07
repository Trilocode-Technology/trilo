<?php 
include_once("connection.php");

if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$prno=$_POST['prno'];
	
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
			
			$query=mysqli_query($con,"INSERT INTO `trilo_products`(`product_title`,`image_path`,`priority_no`) VALUES('".$title."','".$part1."','".$prno."')") or die(mysqli_error($con));
	
			if (!$query)
			{
				echo mysqli_error($con);
			}
			else
			{
				echo '<script>alert("Record Added Successfully!");</script>';
			}
		}
	}
	else
		{
			//echo "return code:" . $_FILES['img']['error'];
			echo '<script>alert("File size too large!");</script>';
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
                    Add New Product 
                </div>
    <div class="panel-body">
	
	<form action="" method="POST" enctype="multipart/form-data">
			<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Title :</label>
			<div class="col-sm-7">
				<input type="text" name="title" id="title" class="form-control" required>
			</div>
			</div>
		</div>
		<br>
		<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Priority No :</label>
			<div class="col-sm-7">
				<input type="text" name="prno" id="prno" class="form-control" required>
			</div>
			</div>
		</div>
		<br>
		<div class="row">		
			<div class="form-group">
			<label class="form-label col-sm-3">Image :</label>
			<div class="col-sm-7">
				<input type="file" name="img" id="img" class="form-control" required>
			</div>
			</div>
		</div>
		<br>
		<div class="row">		
			<div class="form-group">
			<div class="col-sm-3"></div>
			<div class="col-sm-2">
				<input type="submit" name="submit" class="btn btn-success" id="submit" value="Submit">
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
		
		<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
				<div class="panel-heading">
                    View Product Details
                </div>
				<div class="panel-body">
<?php	
/* if(isset($_GET['msg']))
{
	$msg=$_GET['msg'];
	
	if($msg=='true')
	{
		echo '<div class="alert alert-success">
				<strong>Record Deleted Successfully!</strong>
			</div>';
	}
} */
?>
	<div class="table-responsive">
	<table class="table table-bordered">
	<thead>
	<th>#</th>	
	<th>Title</th>
	<th>Image</th>
	<th>Action</th>
	</thead>
	<tbody>
<?php
$cnt=1;
$sql=@mysqli_query($con,"SELECT * FROM trilo_products ORDER BY `trilo_products`.`priority_no` ASC") or die(mysqli_error($con));
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
	$id=$row['id'];
?>
<tr>
<td><?php echo $cnt; ?></td>
<td><?php echo $row['product_title']; ?></td>
<td><img src="../Products/<?php echo $row['image_path']; ?>" height="120px" width="200px"></td>
<td>
    <?php echo '<a href="editproduct.php?prodid='.$id.'" style="color:white;" > ';?>
	<button class="btn btn-success "><i class="fa fa-edit"></i></button></a>
	
	<?php echo '<a href="delete.php?prodid='.$id.'" style="color:white;" > ';?>
	<button class="btn btn-danger "><i class="fa fa-times"></i></button></a>
</td> 
</tr>
<?php
$cnt++;
}

?>
	</tbody>
	</table>
				</div>		
				</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
	

<?php include_once("footer.php");?>