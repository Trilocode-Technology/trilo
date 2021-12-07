<?php include_once('header.php'); ?>
<!-- banner -->

<div class="banner">
	<h2>Projects</h2>
	<p><a href="index.html">Home »</a> Projects </p>
</div>
<!--//banner -->

<!-- Portfolio -->
	<div class="portfolio w3layouts agileits" id="portfolio">
		<div class="container">		
			<ul class="portfolio-categ filter">
				<li class="port-filter all active">
					<a href="#">All</a>
				</li>
				<li class="Website">
					<a href="#" title="Websites">Websites</a>
				</li>
				<li class="Android">
					<a href="#" title="Android App">Android App</a>
				</li>
				<li class="Desktop">
					<a href="#" title="Desktop App">Desktop App</a>
				</li>
				<li class="Ecommerce">
					<a href="#" title="E-Commerce Website">E-Commerce Website</a>
				</li>
				<li class="Demo">
					<a href="#" title="Demo App">Demo App</a>
				</li>
			</ul>


			<ul class="portfolio-area">
<?php 
include_once("../connection.php");

$sql=@mysqli_query($con,"SELECT * FROM projects") or die(mysqli_error($con));
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{
?>
				<li class="portfolio-item2" data-id="id-6" data-type="<?php echo $row['category']; ?>">
					<div>
						<span class="image-block">
						<?php
						if($row['link']==""){
						?>
							<a class="image-zoom" href="<?php echo $row['link']; ?>">
						<?php
						}
						else{
						?>
						<a class="image-zoom" href="<?php echo $row['link']; ?>" target="_blank">
						<?php } ?>
								<figure >
									<img src="<?php echo $row['image']; ?>" class="img-responsive w3layouts agileits" alt="Corporation">
									<figcaption>
										<h3><?php echo $row['title']; ?></h3>
									</figcaption>
								</figure>
							</a><h4 style="text-align: center;"><?php echo $row['title']; ?></h4>
						</span>
					</div>
				</li>
<?php }?>				
				<div class="column-clear"></div>
			</ul>
			<!--end portfolio-area -->
		</div>
	</div>
<!-- //Portfolio -->
<?php include_once('footer.php'); ?>