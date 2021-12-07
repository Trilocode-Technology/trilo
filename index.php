<?php
include_once('header.php'); ?>

<link rel="stylesheet" href="css/swc.css">
<style>
p{
	text-align:justify;
}
body{
	background-color: #ffffff;
}

.card {
  box-shadow: 5px 10px 10px 5px rgba(0, 0, 0, 0.2);
  min-height:300px;
  
  margin-top: 50px;
  text-align: left;
  font-family: arial;
  padding: 10px 20px;

  
}
.card:hover {
  box-shadow: 5px 10px 10px 5px rgba(0, 0, 0, 0.2);
  min-height:300px;
 
  margin-top: 50px;
  text-align: left;
  font-family: arial;
  padding: 10px 20px;
  -webkit-transform: scale(1.1);
-ms-transform: scale(1.1);
transform: scale(1.1);
transition: 1s ease;
  
}
.card p{
	text-align: left;
	color: #fff;
}

.card i{
	color: #fff;
}

.card h3{
	text-align: center;
	color: #fff;
}
.card h4{
	color: #fff;
	text-align: center;
	font-size: 25px;
	padding: 25px 10px;;
}

@import url(https://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=number]  {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container textarea {
  font-size: 16px;
  width: 100%;
  margin-bottom: 15px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=number]:hover, textarea:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;

}

.loginmodal-submit { 
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #ff1744 ;
  font-family: roboto;
  font-size: 14px;

}

.loginmodal-submit:hover {
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #dc2044;
  
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}
  

.fa.fa-laptop:hover {
    color: #fff;
    background-color: transparent;
    transform: rotate(360deg) scale(1.3);
}
.fa.fa-shopping-cart:hover {
    color: #fff;
    background-color:transparent;
    transform: rotate(360deg) scale(1.3);
}
.fa.fa-android:hover {
    color: #fff;
    background-color:transparent;
    transform: rotate(360deg) scale(1.3);
}
.fa.fa-tasks:hover {
    color: #fff;
    background-color:transparent;
    transform: rotate(360deg) scale(1.3);
}

.grid_info:hover {
      -webkit-animation: slideIn 2s forwards;
  -moz-animation: slideIn 2s forwards;
  animation: slideIn 2s forwards;
}
/* .fa:hover {
    color:  #009FFF;
    background-color:transparent;
    transform: rotate(360deg) scale(1.5);
}
 */
 
 #popup {
    display:none;
    position:absolute;
    margin:0 auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0px 0px 50px 2px #000;
}


.img {
  border-radius: 50%;
  -webkit-transition: -webkit-transform .8s ease-in-out;
          transition: transform .8s ease-in-out;
}
.img:hover {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}


</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(document).ready(function () {
    //select the POPUP FRAME and show it
    $("#popup").hide().fadeIn(1000);

    //close the POPUP if the button with id="close" is clicked
    $("#close").on("click", function (e) {
        e.preventDefault();
        $("#popup").fadeOut(1000);
    });
});
</script>

<script type="text/javascript">
	$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     $(".loginmodal-container #subject").val( myBookId );
});
</script>





<script src="js/swc.js"></script>
    
<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">


	<!-- Indicators -->
	<ol class="carousel-indicators">
	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		<!--<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		<li data-target="#myCarousel" data-slide-to="4" class=""></li>-->
	</ol>
	<div class="carousel-inner" role="listbox">
		<!--<div class="item active">
			<div class="container">
				<div class="carousel-caption">
					<div class="col-md-6 banner_left">
						<h4>We work hard</h4>
						<h3>Maecenas id justo iaculis sapien <span>accumsan luctus</span> aluis ipsum nibh Pellen tesque felis.</h3>
					</div>
					<div class="col-md-6 banner_right">
						<p>Duis viverra laoreet ante. Curabitur in diamelit blandit tellus sollicitudin sollicitudin felis. Pellentesque neque, aliquam vel nunc et, mollismetus.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>-->
		<div class="item item2 active">
			<div class="container">
				<div class="carousel-caption text-center">
					
					
					<div class="agileits-button top_ban_agile">
						<!--<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>-->
					</div>
				</div>
			</div>
		</div>
		<div class="item item3">
			<div class="container">
				<div class="carousel-caption text-center">
					
					
					<div class="agileits-button top_ban_agile">
						<!--<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>-->
					</div>
				</div>
			</div>
		</div>
		<div class="item item4">
			<div class="container">
				<div class="carousel-caption text-center">
					
					
					<div class="agileits-button top_ban_agile">
						<!--<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>-->
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="fa fa-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="fa fa-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!-- The Modal -->
</div>
<!-- //banner -->

<!-- banner bottom -->
<div class="welcome">
	<div class="container">
	<div class="col-md-6 welcome_left ">
	        <h3 class="hvr-bounce-in"><strong>Trilocode Technology</strong></h3>
       
<br><br>
            <div  class="slide col-sm-12" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                 <div class="row">
                   <img src="images/d.jpg" class="hvr-pulse-grow img-responsive" style="width: auto; height: auto;">
                   	<h4 style="text-align:center;">Website Development</h4>
                   </div>
                </div>
                <div class="item ">
                 <div class="row">
                   <img src="images/android.png" class="hvr-pulse-grow img-responsive" style="width: auto; height: auto;">
                   <h4 style="text-align:center;">Android Application Development</h4>
                   </div>
                </div>
                <div class="item ">
                 <div class="row">
                   <img src="images/desk.png" class="hvr-pulse-grow img-responsive " style="width: auto; height: auto;">
                   <h4 style="text-align:center;">Desktop  Software</h4>
                   </div>
                </div>
              </div>
            </div>
          <!--   <div class="controls testimonial_control pull-right">
                <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic"
                  data-slide="prev"></a>

                <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic"
                  data-slide="next"></a>
              </div> -->
       
		</div>
		
		
		
    
    
		<div class="col-md-6 welcome_right">
			<div class="inner_grid1 ">
				<div class="col-md-2 icon color1" >
					<img src="images/q1.png" class="img" >
					<!-- <span class="fa fa-file-o" aria-hidden="true"></span> -->
				</div>
				<div class="col-md-10 grid_info hvr-forward" >
					<h3 style=" margin-left: 17px;"><b>Quality Product</b></h3>
					<!--<h1>Android Application,Website development,Website designer</h1>-->
					<p style="font-size: 18px;  margin-left: 17px;">Trilocode maintains  commitment, and determination to achieve excellence in quality and complete customer satisfaction by delivering defect-free product. It has to be easy to use and suitable for the end users. Our Focus on quality, rather than quantity.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="inner_grid1">
				<div class="col-md-2 icon color2">
					
					<img src="images/service1.png" class="img">
					
				</div>
				<div class="col-md-10 grid_info hvr-forward" >
					<h3 style=" margin-left: 17px;"><b>Flexible Services</b></h3>
					<p style="font-size: 18px; margin-left: 17px; "> We give quick response to our client issues via email,phone call,Online Remote Access or On-field support. We focus on customer satisfaction.We believe in to build reliability, trust through honesty and integrity to ensure long-term alliances.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="inner_grid1 ">
				<div class="col-md-2 icon color3" >
					<img src="images/tag.png" class="img">
					<!-- <span class="fa fa-line-chart" aria-hidden="true"></span> -->
				</div>
				<div class="col-md-10 grid_info hvr-forward" >
					<h3 style=" margin-left: 17px;"><b>Affordable Price</b></h3>
					<p style="font-size: 18px;  margin-left: 17px;">We build solution with high quality product and flexible service in reasonable price. Which will affordable to your business.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>


    
  

<!-- pricing plans -->

<div id="about" class="pricing">
		
        	<div class="container-fluid">
				<h3 class="heading" style="color: #000;"><b>Pricing Plans</b></h3>
								
				<div class="col-md-3" >
                    <div class="card " style="background-color:#f5702b;" data-delay="0.2s">
					<h4><i class="fa fa-laptop  fa-3x"></i></h4>
					<h3 style="font-weight: bold;"> Dynamic Website</h3>
					<div class="pricing-bottom">
					<div class="pricing-bottom-bottom orange-pricing-bottom-top">
                        <p><i class="fa fa-check"></i> Basic Website </p>
                        <p><i class="fa fa-check"></i> Website + Admin panel</p>
                        <p><i class="fa fa-check"></i> Domain + Hosting 1 Year Free</p>
                        <p><i class="fa fa-check"></i> Web Space 1 GB/ Year</p>                       
						<p><i class="fa fa-check"></i> Upto 3 Pages</p>
						<p><i class="fa fa-check"></i> Much More</p>
						<!--<h4>₹ 11,999*</h4>-->
						<div class="buy-button" style="text-align:center;">
						<a style="cursor:pointer; border-radius: 18px;" class="popup-with-zoom-anim open-AddBookDialog" data-toggle="modal" data-target="#myModal1" data-id="Dynamic Website">Get Quote</a></div>
					</div>
					</div>	
					</div>
				</div>
                
				<div class="col-md-3">
                    <div class="card" style="background-color:#61a116;" data-delay="0.3s">
					<h4><i class="fa fa-android fa-3x"></i></h4>
					<h3 style="font-weight: bold;">Android Application</h3>
					<div class="pricing-bottom">
					<div class="pricing-bottom-bottom green-pricing-bottom-top">
						<p><i class="fa fa-check"></i> Dashboard </p>
                        <p><i class="fa fa-check"></i> Google Material Design</p>
                        <p><i class="fa fa-check"></i> Firebase Notification</p>
                        <p><i class="fa fa-check"></i> Light weight & Clean Code</p>
                        <p><i class="fa fa-check"></i> Compatiable to all Devices</p>
						<p><i class="fa fa-check"></i> Much More</p>
						<!--<h4>₹ 14,999*</h4>-->
						<div class="buy-button" style="text-align:center;">
						<a style="cursor:pointer; background-color: transparent; border-radius: 18px;" class="popup-with-zoom-anim open-AddBookDialog" data-toggle="modal" data-target="#myModal1" data-id="Android Application">Get Quote</a></div>
					</div>
					</div>	
					</div>
				</div>

						<div class="col-md-3" >
                    <div class="card" style="background-color:#de1921;" data-delay="0.2s">
					<h4><i class="fa fa-shopping-cart  fa-3x"></i></h4>
					<h3 style="font-weight: bold;">E-Commerce Website</h3>
					<div class="pricing-bottom">
					<div class="pricing-bottom-bottom ">
                       <p><i class="fa fa-check"></i> Responsive Website Design </p>
                        <p><i class="fa fa-check"></i> Choice Of Templates</p>
                        <p><i class="fa fa-check"></i> Unlimited Your Product Online</p>
                        <p><i class="fa fa-check"></i> Easy to use Admin Panel</p>
                        <p><i class="fa fa-check"></i> Add/Update Your Products <span>Ease</span></p>
					
						<p><i class="fa fa-check"></i> Search Engine Friendly</p>
						<p><i class="fa fa-check"></i> Single Category Only</p>
						<p><i class="fa fa-check"></i> Free Support</p>
						<!--<h4>₹ 29,999*</h4>-->
						<div class="buy-button" style="text-align:center;">
						<a style="cursor:pointer; background-color: transparent; border-radius: 18px;" class="popup-with-zoom-anim open-AddBookDialog" data-toggle="modal" data-target="#myModal1" data-id="E-Commerce Website">Get Quote</a></div>
					</div>
					</div>	
					</div>
				</div>
			
				
	
				 	<div class="col-md-3">
                    <div class="card " style="background-color:#326ed8;" data-delay="0.3s">
					<h4><i class="fa fa-tasks fa-3x"></i></h4>
					<h3 style="font-weight: bold; margin-left: 15px; margin-right: 16px;">   Inventory System  </h3>
					<div class="pricing-bottom">
					<div class="pricing-bottom-bottom blue-pricing-bottom-top">
					 <p><i class="fa fa-check"></i> Suppliers Details</p>
                        <p><i class="fa fa-check"></i> Customers Details</p>
                        <p><i class="fa fa-check"></i> Stock Details</p>
                        <p><i class="fa fa-check"></i> Sales Ledger</p>
                        <p><i class="fa fa-check"></i> Product Ledger</p>
						<p><i class="fa fa-check"></i> Purchase Ledger</p>
						<p><i class="fa fa-check"></i> Outstanding Balance</p>
						<p><i class="fa fa-check"></i> Product Stock Alert</p>
					
						<!--<h4>₹ 14,499*</h4>-->
						<div class="buy-button" style="text-align:center;">
						<a style="cursor:pointer; background-color: transparent; border-radius: 18px;" class="popup-with-zoom-anim open-AddBookDialog" data-toggle="modal" data-target="#myModal1" data-id="Static Website">Get Quote</a></div>
					</div>
					</div>	
					</div>
				</div>
	
	
			</div>
	</div>

<!-- footer -->
<!--<div class="container-fluid">
		<div class="col-md-3 footer_grid">
			<h3 ><b>About Us</b></h3>
			<p>Trilocode Technology Is An Emerging Software Development Company In Solapur. We Have An Excellent Team To Deliver High Quality & Services. We Offering You End-To-End Web Arrangements Guaranteeing That Your Business Necessities Are Met Without Trading Off Your Corporate Personality. </p>
			
		</div>
		
<div class="team" id="team">
<div class="footer_grid">
	<h3 ><b>Client Feedback</b></h3>
	<div class="container">
		<div class="flexslider-info">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						
						<li>
							<div class="w3l-info1">
								<div class="col-md-5">
									<div class="col-md-5 team-grid-1">
										<img src="images/cp.jpg" alt="" />
									</div>
									<div class="col-md-7 team-grid-2">
										<h4>Mahadev Tambade</h4>
										<h5>Comissioner Of police (IPS)</h5>
										<p>Lorem ipsum dolor sit amet augueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus.</p>
										
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-5">
									<div class="col-md-5 team-grid-1">
										<img src="images/bapu.jpg" alt="" />
									</div>
									<div class="col-md-7 team-grid-2">
										<h4>Shri Subhash Deshmukh</h4>
										<h5>Founder Of Lokmangal</h5>
										<p>Lorem ipsum dolor sit amet augueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus.</p>
										
									</div>
									<div class="clearfix"></div>
								</div>
									<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="w3l-info1">
								<div class="col-md-5">
									<div class="col-md-5 team-grid-1">
										<img src="images/nasale.jpg" alt=""  />
									</div>
									<div class="col-md-7 team-grid-2">
										<h4>Carnivel</h4>
										<h5>Manager</h5>
										<p>Lorem ipsum dolor sit amet augueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus.</p>
										
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-5">
									<div class="col-md-5 team-grid-1">
										<img src="images/big.png" alt=""  />
									</div>
									<div class="col-md-7 team-grid-2">
										<h4>Carnivel</h4>
										<h5>Administrator</h5>
										<p>Lorem ipsum dolor sit amet augueit, consectetur adipiscing elit. Quisque utrisus eget libero finibus.</p>
										
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>



		<div class="clearfix"> </div>
	</div>
</div>-->
	
<!-- //pricing plans -->

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h1>Get Quote</h1><br>
				  <form method="POST">
				  <div id="result"></div>
					<input type="hidden" class="form-control" id="subject" name="subject">
					<input type="text" name="name" id="name" placeholder="Name" required>
					<input type="number" name="mobile" id="mobile" maxlength="10" required placeholder="Mobile">
					<textarea rows="5" name="msg" id="msg" class="form-control" required placeholder="Your Query..."></textarea>
					<input type="button" name="submit" class="login loginmodal-submit" onclick="addRecord()" value="Submit">
				  </form>
				</div>
			</div>
		  </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>		  
<script>

// Add category
 function addRecord() {
	
	var subject = $("#subject").val();
	var name = $("#name").val();
	var mobile = $("#mobile").val();
	var msg = $("#msg").val();


	// Insert Record
	 $.post("addEnquiry.php", {
			
		subject: subject,
		name: name,
		mobile: mobile,
		msg: msg
       
    }, function (data, status) {
       
	   $("#result").html('<div class="alert alert-success"><strong>Enquiry Sent Successfully!</strong></div>');
         window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 2000);
				
        // clear fields from the popup
		$("#name").val("");
		$("#mobile").val("");
		$("#msg").val("");
		   
    });
}

</script>

<?php include_once('footer.php'); ?>