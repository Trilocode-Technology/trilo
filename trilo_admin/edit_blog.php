<?php 
include_once("connection.php");
$datea=date('F d, Y');
include_once("master.php");

$ugid;
if(isset($_GET['ugid']))
{
	echo $ugid=$_GET['ugid'];
	
	$query1=mysqli_query($con,"SELECT * FROM trilo_blog_posts WHERE id='$ugid' ") or die(mysqli_error($con));
	
	$row=mysqli_fetch_array($query1,MYSQLI_ASSOC);
	$btitle=$row['blog_title'];
	$bshort_des=$row['blog_short_des'];
	$bdes=$row['blog_des'];
	$bimg=$row['blog_post_image'];
}

?>
<link href="editor.css" type="text/css" rel="stylesheet"/>

<div id="page-wrapper">
    <div id="page-inner">
		<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
				<div class="panel-heading">
                    Edit Blogs <span class="pull-right"><?php echo $datea;  ?></span>
				</div>
    <div class="panel-body">
	
	<form action="" method="POST" enctype="multipart/form-data">
		
		
		<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Blog Title : </label>
			<div class="col-sm-7">
				<input type="text" name="blog_title" id="blog_title" class="form-control" required value="<?php echo $btitle; ?>">
			</div>
			</div>
		</div>
		<br>
		<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Blog short Description :</label>
			<div class="col-sm-7">
				<input type="text" name="blog_short_des" id="blog_short_des" class="form-control" required value="<?php echo $bshort_des; ?>">
				
			</div>
			</div>
		</div>
		<br>
		<div class="row">			
			<div class="form-group">
			<label class="form-label col-sm-3">Blog full Description :</label>
			<div class="col-sm-7">
				<!-- <input type="text" name="blog_des" id="blog_des" class="form-control" required value="<?php //echo $bdes; ?>"> -->

				<textarea rows="4" id="txtEditor" class="form-control" name="blog_des" ></textarea> 
				 <textarea rows="4" id="gettxtid" class="form-control" name="blog_des" style="display: none;"></textarea>
				<!-- <input type="text" name="gettxtid" id="gettxtid" class="form-control"  >  -->
				<!--<button type="submit" id="onbtn">click</button> -->
				
				
			</div>
			</div>
		</div>
		<br>
		<div class="row">		
			<div class="form-group">
			<label class="form-label col-sm-3">Blog Image :</label>
			<div class="col-sm-7">
			<img src="../Blog/<?php echo $bimg; ?>" alt="hello" class="img-responsive" width="280px">
				<input type="file" name="img" id="img" class="form-control" >
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
		
	
		
	</div>
</div>


<?php include_once("footer.php");

error_reporting(0);
if(isset($_POST['submit']))
{
	$blog_title=$_POST['blog_title'];
	$blog_short_des=$_POST['blog_short_des'];
	$blog_des=$_POST['blog_des'];

	
	if(addslashes(file_get_contents($_FILES['img']['tmp_name']))!='')
	{

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
			
			$query=mysqli_query($con,"UPDATE `trilo_blog_posts` SET`blog_title`='".$blog_title."',`blog_short_des`= '".$blog_short_des."',`blog_des`= '".$blog_des."',`blog_post_image`= '".$part1."' WHERE id='$ugid' ") or die(mysqli_error($con));
	
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
		
	}else{

		$query=mysqli_query($con,"UPDATE `trilo_blog_posts` SET`blog_title`='".$blog_title."',`blog_short_des`= '".$blog_short_des."',`blog_des`= '".$blog_des."'  WHERE id='$ugid' ") or die(mysqli_error($con));
	
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



?>
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
		
<!-- <script>	
	$(document).ready(function(){
		var ge=$('#txtEditor').val();
		$("#gettxt").val(ge);
	});
</script>	 -->