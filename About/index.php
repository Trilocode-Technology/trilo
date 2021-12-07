<?php include_once('header.php'); ?>

<style>
.card {
  box-shadow: 5px 10px 10px 5px rgba(0, 0, 0, 0.2);
  min-height:300px;
  /*width:100%;*/
  margin-top: 50px;
  text-align: left;
  font-family: arial;
  padding: 10px 20px;
  /*width: 300px;*/
  
}
/*.card p{
	text-align: left;
	color: #000;
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
}*/
</style>

<!-- banner -->
<div class="banner">
	<h2>About Us</h2>
	<p><a href="index.php">Home »</a> About us </p>
</div>
<!--//banner -->



<div class="welcome">
	<div class="container">
		<div class="col-md-6 welcome_left">
			<div class="layer1 hvr-shadow-radial hvr-grow">				
					<h3>About Trilocode</h3>
					<p>Trilocode Technology Is An Emerging Software Development Company In Solapur.  We have an excellent team to deliver high quality products And services. We understand the challenges of the current market and exactly what an software should possess in order to be a bang on hit.  With this knowledge and strong ethics we provide you the best in class software application development. We, at Trilocode believe that quality on site IT services can go a long way in ensuring profits for your business and it is with this belief that we bring a complete set of IT solutions for your organization under a single roof.</p>
					</div>
		</div>
		<div class="col-md-6 welcome_left">
			<div class="layer1 hvr-shadow-radial hvr-grow">				
					<h3>Our Identity</h3>
					<p>We Offering you end-to-end web arrangements guaranteeing that your business necessities are met without trading off your corporate personality. We have an excellent team to deliver high quality products & services. We represent considerable authority in site administrations for little to large scale organizations, and in addition, individual and household ventures to incorporate web architecture, web facilitating, space name enrollment, site improvement, and advancement with choices to fit any financial plan.</p>		
							</div>
		</div>
	
				
		<div class="clearfix"></div>
	</div>
</div>


<!--<div class="portfolio w3layouts agileits" id="portfolio">
<div class="container">
<ul class="portfolio-area">

				<li>
					<div>
						<span>
							<a class="image-zoom" href="images/1.jpg" rel="prettyPhoto[gallery]">								
								<img src="images/1.jpg" class="img-responsive w3layouts agileits" alt="Corporation">							
							</a>
						</span>
					</div>
				</li>
</ul>
</div>
</div>-->
<!-- Services -->

<div class="services" id="services">
	<h3 class="heading"><b>Accomplishment</b></h3>
	<div class="container-fluid">
		<div class="services_grids">
<?php 
include_once("../connection.php");

$sql=@mysqli_query($con,"SELECT * FROM rewards ") or die(mysqli_error($con));
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
?>
			<div class="col-md-3 ser_grid1 hvr-grow" style="min-height: 350px; ">
			<a class="image-zoom" href="<?php echo $row['image']; ?>" target="_blank" rel="prettyPhoto[gallery]">	
				<img src="<?php echo $row['image']; ?>" alt="service1" />
			</a>	
				<p style="font-size: 17px;"><?php echo $row['title']; ?></p>
			</div>
<?php 
}
?>			
			<div class="clearfix"> </div>
			
		</div>
		
	</div>
</div>

<?php include_once('footer.php'); ?>