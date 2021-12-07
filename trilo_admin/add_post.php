<?php 
include_once("connection.php");

if(isset($_POST['submit']))
{
	$post_name=$_POST['post_name'];
	$post_detail=$_POST['post_detail'];
	
	$query=mysqli_query($con,"INSERT INTO `career_post`(`post_name`,`post_detail`) VALUES('".$post_name."','".$post_detail."')") or die(mysqli_error($con));
	
			if (!$query)
			{
				echo mysqli_error($con);
			}
			else
			{
				echo '<script>alert("Record Added Successfully!");</script>';
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
                    Required Human Resource
                </div>
    <div class="panel-body">
	
	<form action="" method="POST" enctype="multipart/form-data">
			<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3"> Post Name</label>
			<div class="col-sm-7">
				<input type="text" name="post_name" id="post_name" class="form-control" required>
			</div>
			</div>
		</div>
		<br>
		<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Experince</label>
			<div class="col-sm-7">
				<input type="text" name="post_detail" id="post_detail" class="form-control" required>
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
                    View Posts
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
	<th>Post Name</th>
	<th>Expericence details</th>
	<th>Action</th>
	</thead>
	<tbody>
<?php
$cnt=1;
$sql=@mysqli_query($con,"SELECT * FROM career_post") or die(mysqli_error($con));
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
	$id=$row['id'];
?>
<tr>
<td><?php echo $cnt; ?></td>
<td><?php echo $row['post_name']; ?></td>
<td><?php echo $row['post_detail']; ?></td>
<td>
	<?php echo '<a href="post_delete.php?ugid='.$id.'" style="color:white;" > ';?>
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