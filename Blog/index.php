<?php include_once('header.php'); 
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
    	padding:40px;background-color: #fff;
    	transition: transform 250ms ease;
    	   }
 .desc:hover{    	 
    	transform:translateX(-8px); 

    } p.para{
    	font-size: 22px; color: #000;  font-family: 'Arimo',sans-serif;
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
    	background-color: #f2f2f2; width: 48.6%;  margin-right: 14px; float: left;  padding:15px;

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
  
	
</style>
<!-- banner -->

<!--//banner -->

<!-- contact -->
<section class="blog" id="blog">		
			<br><br>
		<a href="javascript:(0);" class="ahover" ><div class="row hovereff" style="border-bottom: 5px solid #259ae1;" >					
			<div class="col-md-8 opa">
				<img src="images/trilo.jpg" alt=""  class="img-responsive img1" style="width: 100%; height:100%;">	
			</div>
			<div class="col-md-4 desc">
				<center><img src="../images/logo.png" alt="" width="200px;" ></center><br>
				<p class="para"><b>Trilocode Technology </b></p><br>
				<p class="para1">Trilocode Technology Is An Emerging Software Development Company In Solapur. Trilocode Technology Is An Emerging Software Development Company In Solapur.</p>
				<p><?php echo $date;?></p>
			</div>
		</div></a><br>
		<div class="row">
			<?php 
include_once("../connection.php");

$sql=@mysqli_query($con,"SELECT * FROM trilo_blog_posts ORDER BY `trilo_blog_posts`.`id` DESC") or die(mysqli_error($con));
while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC))
{ $blog_title=$row['blog_title']; $blog_short_des=$row['blog_short_des']; $blog_post_image=$row['blog_post_image']; 
$post_date=$row['post_date']; $post_id=$row['id'];
?>
			<a href="post_details.php?post_detail=<?php echo ' '. $post_id;?> "  ><div class="posts"  >
				<div class="row asub"  >
				<div style="height: 300px;">
					<img src="<?php echo $blog_post_image;?>" alt=""  class="img-responsive img2" style="width: 100%; height:100%;">	
				</div>
				<div class="subtitle" style="border-bottom: 5px solid #259ae1; height: 230px;">
					<p class="para">
					<?php echo $blog_title;?>
				</p><br>
				<p class="para1" ><?php echo $blog_short_des;?></p>
				<p><?php echo $post_date;?></p>
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