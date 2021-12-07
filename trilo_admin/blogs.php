<?php 
include_once("connection.php");
$datea=date('F d, Y');

if(isset($_POST['submit']))
{
	$blog_title=$_POST['blog_title'];
	$blog_short_des=$_POST['blog_short_des'];
	$blog_des=$_POST['blog_des'];
	
	if (($_FILES['img']['type'] == 'image/gif') ||($_FILES['img']['type'] == 'image/png') || ($_FILES['img']['type'] == 'image/jpeg') || ($_FILES['img']['type'] ==  'image/jpg') && ($_FILES['img']['size'] < 1500))
	{
		if ($_FILES['img']['error'] > 0)
		{
			//echo "return code:" . $_FILES['img']['error'];
			echo '<script>alert("File size too large!");</script>';
		}
		
		else if(move_uploaded_file($_FILES['img']['tmp_name'],'../Blog/images/'.$_FILES['img']['name']))
		{
			$part1 = "images/".$_FILES['img']['name'];
			
			$query=mysqli_query($con,"INSERT INTO `trilo_blog_posts`(`blog_title`,`blog_short_des`,`blog_des`,`blog_post_image`,`post_date`) VALUES('".$blog_title."','".$blog_short_des."','".$blog_des."','".$part1."','".$datea."')") or die(mysqli_error($con));
	
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

<link href="editor.css" type="text/css" rel="stylesheet"/>
<div id="page-wrapper">
    <div id="page-inner">
		<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
				<div class="panel-heading">
                    Add Blogs <span class="pull-right"><?php echo $datea;  ?></span>
				</div>
    <div class="panel-body">
	
	<form action="" method="POST" enctype="multipart/form-data">
		
		
		<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Blog Title : </label>
			<div class="col-sm-7">
				<input type="text" name="blog_title" id="blog_title" class="form-control" required>
			</div>
			</div>
		</div>
		<br>
		<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Blog short Description :</label>
			<div class="col-sm-7">
				<input type="text" name="blog_short_des" id="blog_short_des" class="form-control" required>
				
			</div>
			</div>
		</div>
		<br>
		<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Blog full Description :</label>
			<div class="col-sm-7">
				
				<div class="col-lg-12 nopadding">
				<textarea rows="4" id="txtEditor" class="form-control" name="blog_des" ></textarea> 
				 <textarea rows="4" id="gettxtid" class="form-control" name="blog_des" style="display: none;"></textarea>
				</div>			
				
			</div>
			</div>
		</div>
		<br>
		<div class="row">		
			<div class="form-group">
			<label class="form-label col-sm-3">Blog Image :</label>
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
                    View Blog Posts
                </div>
				<div class="panel-body">

	<div class="table-responsive">
	<table class="table table-bordered">
	<thead>
	<th>#</th>
	<th>Title</th>
	<th>Short Des</th>
	<!--<th>Full Des</th>-->
	<th>Image</th>
	<th>Post Date</th>
	<th>Action</th>
	</thead>
	<tbody>
<?php
$cnt=1; 
$sql=@mysqli_query($con,"SELECT * FROM trilo_blog_posts ORDER BY `trilo_blog_posts`.`id` DESC") or die(mysqli_error($con));
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
	$id=$row['id']; 
?>
<tr>
<td><?php echo $cnt; ?></td>
<td><?php echo $row['blog_title']; ?></td>
<td><?php echo $row['blog_short_des']; ?></td>
<!-- <td><?php //echo $row['blog_des']; ?></td> -->
<td><img src="../Blog/<?php echo $row['blog_post_image']; ?>" height="120px" width="150px"></td>
<td><?php echo $row['post_date']; ?></td>
<td>
	<?php echo '<a href="edit_blog.php?ugid='.$id.'" style="color:white;" > ';?>
	<button class="btn btn-success "><i class="fa fa-edit"></i></button></a>
	
	<?php echo '<a href="delete_blog.php?ugid='.$id.'" style="color:white;" > ';?>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
		<script src="editor.js"></script>
		<script>
			$(document).ready(function() {
				$("#txtEditor").Editor();			
				
			});
		</script>
		<script>
			$(document).ready(function() {		
				$("#txtEditor").Editor("setText", "<?php echo $bdes; ?>");

			});
		</script>
		<script>
	$(document).ready(function() {
	 $("#submit").click(function(){
	 	console.log($('#txtEditor').Editor("getText"));
        $('#gettxtid').text($('#txtEditor').Editor("getText"));
          });
	});
</script>