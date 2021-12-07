<?php include_once('header.php');  include_once("../connection.php");
if (isset($_GET['post_detail'])) {
   $postid=$_GET['post_detail'];
$sql=@mysqli_query($con,"SELECT * FROM trilo_blog_posts WHERE id='$postid' ") or die(mysqli_error($con));
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 $blog_title=$row['blog_title']; $blog_des=$row['blog_des']; $blog_post_image=$row['blog_post_image']; 
$post_date=$row['post_date']; $post_id=$row['id'];
}
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

 ?>
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=328959054536607&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style type="text/css" >
@media screen and (max-width: 600px){
    .col-sm-4{
        float: left;

    }
}
    
</style>

<hr>
<div class="container" id="Blogpost">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           <center> <img src="<?php echo $blog_post_image; ?>" alt="" class="img-responsive " style="width:400px; height: auto; "></center>
        </div>
        <div class="col-md-2"></div>        
    </div><br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           <h1><span class="pull-right" style=" font-size: 15px;"><?php echo $post_date; ?></span><?php echo $blog_title; ?></h1><br>
           <p style="color: #000; font-size: 18px; text-align: justify;"><?php echo $blog_des; ?></p><br><br>
            </div>
         <div class="col-md-2 row"> 
            <div class="col-sm-12"> 
                <p style="color: #000; font-size: 16px; margin-top: 15px;"><b>Share <i class="fa fa-share"></i></b></p><br>                
            </div>
            <div class="col-sm-12"> 
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" 
                class="twitter-share-button" data-text="<?php echo $blog_title; ?>" 
                data-via="Trilocode" data-show-count="false"></a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        
            </div>
            <div class="col-sm-12"> 
             <!--   <iframe src="https://www.facebook.com/plugins/share_button.php?href=<?php echo $actual_link; ?>&layout=button&size=large&mobile_iframe=false&appId=328959054536607&width=73&height=28" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>  -->
               <iframe src="https://www.facebook.com/plugins/share_button.php?href=<?php echo $actual_link; ?>&layout=button&size=large&mobile_iframe=true&width=73&height=28&appId" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>      
       </div>
       <div class="col-sm-12"> 
             <!--   <iframe src="https://www.facebook.com/plugins/share_button.php?href=<?php //echo $actual_link; ?>&layout=button&size=large&mobile_iframe=false&appId=328959054536607&width=73&height=28" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>  -->       
       </div>
              
    </div><br>
       
</div>
</div>

<?php include_once('footer.php'); ?>