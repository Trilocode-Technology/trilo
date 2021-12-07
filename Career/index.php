<?php include_once('header.php'); 
include_once('connection.php'); ?>
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
<style type="text/css" media="screen">
.elect{
margin: .5em 0;
    padding: .7em 1em;
    font-size: .9em;
    width: 100%;
    
    letter-spacing: 2px;
    height: 45px;
    border-radius: 0px;
    border-color: #a9a9a9;
}
	
</style>
<!-- banner -->
<div class="banner">
	<h2>Career</h2>
	<p><a href="index.php">Home »</a> Career </p>
</div>
<!--//banner -->

<!-- contact -->
<section class="contact" id="contact">
	<div class="container">
		<!--<div class="contact-heading">
			<h3 class="heading">Contact us</h3>
		</div>-->
		<div class="contact-grids">
			<div class=" col-md-7 contact-form">
			<h4 class="heading"><b>Make Career In Trilocode </b> </h4>
			<?php
if(isset($_POST['send']))
{
    date_default_timezone_set("Asia/Calcutta");
	$post_name=$_POST['post_name'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	error_reporting(0);
    $cdate=date("Y-m-d h:i:s");
	$allowedExts = array("pdf", "doc", "docx");
    $extension = end(explode(".", $_FILES["resume"]["name"]));

    if (($_FILES["resume"]["type"] == "application/pdf") || ($_FILES["resume"]["type"] == "application/msword") || ($_FILES["resume"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") && ($_FILES["resume"]["size"] < 200000) && in_array($extension, $allowedExts))
    {

		if ($_FILES['resume']['error'] > 0)
		{
			echo "return code:" . $_FILES['resume']['error'];
		}
		
		else if(move_uploaded_file($_FILES['resume']['tmp_name'],'../applicants/'.$_FILES['resume']['name']))
		{
		$post_file = $_FILES['resume']['name'];
		}

		$sql=mysqli_query($con,"INSERT INTO students(applied_post,name,email,mobile,cv_resume,send_at) VALUES('$post_name','$name','$email','$mobile','$post_file','$cdate')") or die(mysqli_error($con));
      
         if($sql == true ) {
           // echo "<script type='text/javascript'>alert('Message sent successfully...');</script>";
           	echo '<div class="alert alert-success">
				<strong>Your CV Submitted Successfully!</strong>
			</div>';
			$to = $_POST['email'];
         $subject = "Trilocode Technology";
         $message = "Thank You for Applying to " .$post_name. ",
           we will shortly contact with you \r\n Regards: Trilocode Technology";
         $header = "Trilocode Technology\r\n";        
         
          mail ($to,$subject,$message,$header);


			
			
           
         }else {
           echo '<div class="alert alert-danger">
				<strong>CV Not Sent! please Try Again</strong>
			</div>';
         }
	}
	else{
		echo '<div class="alert alert-danger">
				<strong>Wrong File Format Upload only PDF / DOC File</strong>
			</div>';

	}
		
	
	

}
?>						
				<form action="" method="POST" enctype="multipart/form-data" >
					<select name="post_name"  class="form-control elect" required=''>
						<option value="" >Select Post</option>
					<?php $query=mysqli_query($con,"SELECT * FROM career_post") or die(mysqli_error($con));
					while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
					$post_name=$row['post_name'];	?>
					
						<option value="<?php echo $post_name;?>" ><?php echo $post_name;?></option>
					<?php }	?>					
					</select>				
						<input type="text" name="name" placeholder="Full Name" required=""/>
						<input type="email" name="email" placeholder="EMail Id" required=""/>						
						<input type="text" name="mobile" placeholder="Mobile" required=""/>	
						<label for="" style="margin: 20px;"> Upload Resume</label>						
						<input type="file" name="resume" placeholder="Upload Resume" required=""  />					
						<div class="submit1"><br><p>[ Note: Resume should be in .doc, .docx, pdf format only and file size less than 2 mb. ]</p><br>
						<input type="submit" value="Send " class="hvr-grow-shadow" name="send">
						</div>
				</form>

			</div>
			<div class=" col-md-5 map row">
				<br><br><br>
				<h1 style="color:#000;"><b>Post Vacancies </b></h1>
				<br><?php $query=mysqli_query($con,"SELECT * FROM career_post") or die(mysqli_error($con));
					while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
					$post_name=$row['post_name']; $post_detail=$row['post_detail'];	?>
				<div class="col-sm-12 row" style="border:1px solid #eee; padding: 20px; box-shadow: 0 10px 20px rgba(0,0,0,0.10), 0 6px 6px rgba(0,0,0,0.15); margin-bottom: 15px;">
					<div class="col-sm-9"><h3><?php echo $post_name;?></h3></div>
					<div><p style="color: #757272;"><?php echo $post_detail;?></p></div>								
				</div>
				<?php }	?>	
				
				</div>

			</div>

			<div class=" col-md-5 map row">
				
			
			
				
				<div class="clearfix"></div>
				</br></br>
				
				
			</div>
		</div>
	</div>
</section>
<!-- //contact -->

<?php include_once('footer.php'); ?>