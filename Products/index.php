<?php include_once('header.php'); 
include_once("../connection.php");
$date=date('F d, Y');
 ?>
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
.col-sm-4{
padding:25px;
	}
	.space{
		border: 1px solid #cac2c2;
		padding:5px;
		/*box-shadow:0px 0px 10px rgba(0, 0, 0, 0.41);*/
	}
	body{
		background-color: #f2f2f2;
	}
	.col-md-3{
		justify-content: center;    position: relative;    padding-left: 42px;
    padding-right: 40px;    padding: 24px;    box-sizing: border-box;
        display: flex;  flex-direction: column;     background-color: #fff;  transition: transform 250ms ease;
	}
	.hovereff{
	background-color: #fff;
	}
	.hovereff:hover{
	box-shadow: 10px 10px 20px 0px rgba(0,0,0,0.04), -10px 0 20px 0px rgba(0,0,0,0.04);
    z-index: 1;	}
    .opa:hover{opacity: 1;
    transform: translateY(0);}
    .opa{
    	padding-right: 0px !important; padding-left: 0px !important;
    }

    .blog{
    	margin-left: auto;
    margin-right: auto;    
    width: 980px;
    }
    .img1{    	
    	transition:  500ms ease;
    } .img1:hover{    	
    	transform: scale(0.95);
    	opacity: 1;
    }
    .img2{    	
    	transition: 500ms ease;
    } .img2:hover{    	
    	transform: scale(1.02);
    	opacity: 1;
    }
  
    .desc{    	 
    	padding:40px;background-color: #fff0;
    	transition: transform 250ms ease;
    	   }
 .desc:hover{    	 
    	transform:translateX(-8px); 

    } p.para{
    	font-size: 17px; color: #000;  font-family: 'Arimo',sans-serif;
    }
    p.para:hover{
    	 color: #259ae1; 
    }
    p.para1{
    	font-size: 15px; color: #000;
    	padding-bottom: 25px;
    }
    .subtitle{
    	padding:25px; background: #fff;
    	transition: transform 250ms ease;
    }
    .subtitle:hover{
    	transform:translateY(-30px); 
    }
    .asub:hover{
    	box-shadow: 20px 12px 25px 10px rgba(0,0,0,0.04), -10px 0 20px 0px rgba(0,0,0,0.04);
    z-index: 1;


    }
    .posts{
    	background-color: #f2f2f2; width: 31.9477%;  margin-right: 14px; float: left;  padding:15px;

    }

@media screen and (max-width: 640px){
	.blog{
    	margin-left: auto;
    margin-right: auto;    
    width: 80% !important;
    }
      .posts{
     width: 100%;  margin-right:   padding:15px;

    }
}


.fade-carousel {
    position: relative;
    height: 400px;
}
.fade-carousel .carousel-inner .item {
    height: 400px;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 2.5em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .2;
}


.fade-carousel .slides .slide1{
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
/*.fade-carousel .slides .slide-1 {
  background-image: url(images/windows.jpg); 

}
.fade-carousel .slides .slide-2 {
  background-image: url(images/google.jpg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(https://ununsplash.imgix.net/photo-1416339276121-ba1dfa199912?q=75&fm=jpg&s=9bf9f2ef5be5cb5eee5255e7765cb327);
}*/

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}
  
	
</style>
<!-- banner -->

<!--//banner -->

<!-- contact -->

<!-- <div class="container" style="height: 450px;">
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
 
  <div class="overlay"></div>

  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>We are creative</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are smart</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>       
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>We are amazing</h1>        
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
  </div> 
</div>
</div> -->

<section class="blog" id="blog">



			<br><br>
		<a href="javascript:(0);" class="ahover" ><div class="row hovereff" style="border-bottom: 5px solid #259ae1;" >					
			<div class="col-md-8 opa">
				<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

<?php $cnt1=0;
$sql1=@mysqli_query($con,"SELECT * FROM trilo_product_slides ORDER BY `trilo_product_slides`.`id` DESC") or die(mysqli_error($con));?>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php  while($row1=mysqli_fetch_array($sql1,MYSQLI_ASSOC))
{   ?>
    <li data-target="#bs-carousel" data-slide-to="0" class="<?php if($cnt1==0){ echo 'active'; }?>"></li>
    
  <?php $cnt1++; } ?>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <!-- from -->
    <?php 
    $cnt=0;

$sql=@mysqli_query($con,"SELECT * FROM trilo_product_slides ORDER BY `trilo_product_slides`.`id` DESC") or die(mysqli_error($con));
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{ $image_path=$row['image_path'];  $title=$row['title']; $paragraph=$row['paragraph'];
?>
    <div class="item slides  <?php if($cnt==0){ echo 'active'; }?>">
      <div class="slide1 img-responsive" >
          <img src="<?php echo $image_path; ?>" width='100%'  >
      </div>
      <div class="hero">
        <hgroup>
            <h1><?php echo $title; ?></h1>        
            <h3><?php echo $paragraph; ?></h3>
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
  <?php  $cnt++; }?>
  </div> 
</div>
			</div>
			<div class="col-md-4 desc">
				<center>
                    <img src="images/TRILO.png" alt="" width="60px;" style="margin-bottom: 8px;" >
                    <img src="images/logo.png" alt="" width="200px;" ></center><br>
				<p class="para"><b>Trilocode Technology </b></p>
				<p class="para1">Trilocode Technology Is An Emerging Software Development Company In Solapur. Trilocode Technology Is An Emerging Software Development Company In Solapur.</p>
				<p><?php echo $date;?></p>
			</div>
		</div></a><br>
		<div class="row">
			<?php 

$sql=@mysqli_query($con,"SELECT * FROM trilo_products ORDER BY `trilo_products`.`id` DESC") or die(mysqli_error($con));
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{ $product_title=$row['product_title']; $image_path=$row['image_path']; 
?>
<!--post_details.php?post_detail=<?php //echo ' '. $post_id;?>-->
			<a href="javascript:(0); "  ><div class="posts"  >
				<div class="row asub"  >
				<div style="height: 190px;">
					<img src="<?php echo $image_path;?>" alt=""  class="img-responsive img2" style="width: 100%; height:100%;">	
				</div>
				<div class="subtitle" style="border-bottom: 5px solid #259ae1; height: 90px;">
					<p class="para">
					<?php echo $product_title;?>
				</p><br>
				<!-- <p class="para1" ><?php //echo $blog_short_des;?></p> 
				<p><?php //echo $post_date;?></p>-->
				</div>	
				</div>		
			</div>
			</a>
			<?php }?>				
		</div>
			
				
		
		</div>
	</div>
</section>
<!-- //contact -->

<?php include_once('footer.php'); ?>