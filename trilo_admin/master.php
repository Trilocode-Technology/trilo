<?php session_start();
if (!isset($_SESSION['authenticated']) || !isset($_SESSION['username'])) {
	header('Location:index.php');
}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
	<link rel="shortcut icon" href="logo.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	 <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	 <script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php"><strong>Trilocode</strong></a>
            </div>
          </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<!-- <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div> -->
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">                    
					<li>
                        <a href="projects.php"><i class="fa fa-plus"></i>Add Project Images</a>
                    </li>                   
					<li>
                        <a href="gallery.php"><i class="fa fa-plus"></i>Add Reward Images</a>
                    </li>
                    <li>
                        <a href="blogs.php"><i class="fa fa-plus"></i>Add Blog Post</a>
                    </li>
                    <li>
                        <a href="add_post.php"><i class="fa fa-plus"></i>Add Posts</a>
                    </li><li>
                        <a href="view_applied.php"><i class="fa fa-eye"></i>View Applicants</a>
                    </li>
                    <li>
                        <a href="products.php"><i class="fa fa-plus"></i>Add Product</a>
                    </li>
                    <li>
                        <a href="products_slides.php"><i class="fa fa-plus"></i>Add Product slider Images</a>
                    </li>
				    <li>
                        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>