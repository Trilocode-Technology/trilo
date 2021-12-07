<?php include_once('header.php'); ?>
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
<!-- banner -->
<div class="banner">
	<h2>Contact Us</h2>
	<p><a href="index.php">Home »</a> Contact us </p>
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
			<h4 class="heading"><b>Have a Question?</b></h4>
			<?php
if(isset($_POST['send']))
{
 $to = "trilocode.info@gmail.com";
         $subject = $_POST['subject'];
         $message = $_POST['msg'];
         $header = $_POST['name']."\r\n";
	     $header .= $_POST['mobile']."\r\n";
         $header .= $_POST['email']."\r\n";
         /*$header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";*/
         
         $retval = mail ($to,$subject,$message,$header);
      
         if($retval == true ) {
           // echo "<script type='text/javascript'>alert('Message sent successfully...');</script>";
           	echo '<div class="alert alert-success">
				<strong>Message Sent Successfully!</strong>
			</div>';
           
         }else {
           echo '<div class="alert alert-danger">
				<strong>Message Not Sent!</strong>
			</div>';
         }
}
?>						
				<form action="#" method="post">
						<input type="text" name="name" placeholder="Name" required=""/>
						<input type="email" name="email" placeholder="EMail Id" required=""/>
						<input type="text" name="subject" placeholder="Subject" required=""/>
						<input type="text" name="mobile" placeholder="Mobile" required=""/>
						<textarea placeholder="Message" name="msg" required=""></textarea>
						<div class="submit1">
						<input type="submit" value="Send Message" class="hvr-grow-shadow" name="send">
						</div>
				</form>
			</div>
			<div class=" col-md-5 map row">
				<br><br><br>
				<h1 style="color:#000;"><b>Contact Details </b></h1>
				<br>
				<div class="col-sm-12">
					<h3><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h3>
					<div class="contact-right">
						
						<span style="font-size: 18px;" >B-646, Mamta Nivas,<br> Karnik Nagar,Solapur-413006, Maharashtra<span>
					</div>
				</div>
<br><br><br><br>
					<div class="col-sm-12">
					<h3><i class="fa fa-phone" aria-hidden="true"></i> Phone</h3>
					<div class="contact-right">
						<span style="font-size: 18px;">+91 8983839143</span></br>
						<span style="font-size: 18px;">+91 8390353905</span>
					</div>
				</div><br><br><br><br><br>
					<div class="col-sm-12">
					<h3><i class="fa fa-envelope" aria-hidden="true"></i>  Email</h3>
					<div class="contact-right">
												
						<a href="mailto:contact@trilocode.com" style="font-size: 18px;">contact@trilocode.com</a>
					</div>
				</div>
			</div>

			<div class=" col-md-5 map row">
				
			
			
				
				<div class="clearfix"></div>
				</br></br>
				
				
			</div><div class=" col-md-12 map"><center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.4867823737723!2d75.91592331482168!3d17.674450099114527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da616f3de5c5%3A0x3600eea0b9e3bda5!2sTrilocode+Technology!5e0!3m2!1sen!2sin!4v1521616582270" style="border:2px  solid lightgrey;" width="1100" height="600" frameborder="0"  allowfullscreen></iframe></center></div>
		</div>
	</div>
</section>
<!-- //contact -->

<?php include_once('footer.php'); ?>